<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use App\Models\ActivePackage;
use App\Models\User;
use App\Models\Transaction;
use App\Models\ActiveReward;
use App\Models\Deposit;
use App\Models\Reward;
use DateTime;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Transaction as TransactionEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($request, $image){
        if($request->hasFile($image)){
            $img = $request->file($image);
            $imgName = time() ."-". str_replace(" ", "_", $img->getClientOriginalName());
            $img->move(public_path('uploads'), $imgName);
            return $imgName;
        }else{
            return 'default.png';
        }
    }

    public function diffMinutesNow($from){
        $diff = Carbon::now()->timestamp - $from;
        $minutes = ceil($diff / 60);
        return $minutes;
    }

    public function diffDaysNow($from){
        $now = Carbon::now();
        $fromDate = Carbon::createFromFormat('Y-m-d H:i:s', $from);
        $toDate = Carbon::createFromFormat('Y-m-d H:i:s', $now);
        $days = $fromDate->diffInDays($toDate);
        return $days;
    }

    public function expirePackage($package_id){
        $package = ActivePackage::find($package_id);
        $user = User::find(Auth::id());
        $user->account_balance += $package->amount;
        $user->save();
        $this->transaction(Auth::id(), $package->package->name . " expired", $package->amount, 1);
        $package->delete();
    }

    public function updateBalance(){
        $active_packages = ActivePackage::with('package')->where('user_id', Auth::id())->get();
        $balance = 0;
        foreach($active_packages as $package){
            if($package->package->type == "Time"){
                $now = Carbon::now();
                if($now <= $package->expires_on){
                    if($package->package->update_after == 1){
                        $minutes = $this->diffMinutesNow($package->timestamp);
                        $minDif = $minutes - $package->last_updated;
                        $balance += round($minDif * $package->to_give, 4);
                        $package->last_updated = $minutes;
                        $package->save();
                    }elseif($package->package->update_after == 24){
                        $days = $this->diffDaysNow($package->created_at);
                        $daysDif = $days - $package->last_updated;
                        $balance += round($daysDif * $package->to_give, 4);
                        $package->last_updated = $days;
                        $package->save();
                    }else{
                        $days = $this->diffDaysNow($package->created_at);
                        $daysDif = $days - $package->last_updated;
                        $reminder = floor($daysDif / $package->give_after);
                        $balance += round($reminder * $package->to_give, 4);
                        if($reminder >= 1){
                            $package->last_updated += $package->give_after * $reminder;
                            $package->save();
                        }
                    }
                }else{
                    $this->expirePackage($package->id);
                }
            }else{
                if($package->given >= $package->total_return || $package->remaining <= 0){
                    $this->expirePackage($package->id);
                }else{
                    $days = $this->diffDaysNow($package->created_at);
                    $daysDif = $days - $package->last_updated;
                    $reminder = floor($daysDif / $package->give_after);
                    $to_deduct = round($reminder * $package->to_give, 4);
                    $balance += $to_deduct;
                    if($reminder >= 1){
                        $package->last_updated += $reminder * $package->give_after;
                        $package->remaining = $package->total_return - $to_deduct;
                        $package->given = $package->total_return - $package->remaining;
                        $package->save();
                    }
                }
            }
        }
        $balance = round($balance, 4);
        $user = User::find(Auth::id());
        // $user->account_balance = round($user->account_balance + $balance, 4);
        $user->profit_balance = round($user->profit_balance + $balance, 4);
        $user->save();
        return $user->profit_balance;
    }

    public function level1Users($user_id){
        $users = User::where('parent_id', $user_id)->get();
        $level1users = [];
        foreach($users as $user){
            array_push($level1users, $user);
        }
        return $level1users;
    }

    public function level2Users($user_id){
        $level1users = $this->level1Users($user_id);
        $level2users = [];
        foreach($level1users as $level1){
            $users = User::where('parent_id', $level1->id)->get();
            foreach($users as $user){
                array_push($level2users, $user);
            }
        }

        return $level2users;
    }

    public function level3users($user_id){
        $level2users = $this->level2Users($user_id);
        $level3users = [];
        foreach($level2users as $level2){
            $users = User::where('parent_id', $level2->id)->get();
            foreach ($users as $user) {
                array_push($level3users, $user);
            }
        }

        return $level3users;
    }

    public function parents($user_id){
        $parents = [];
        $user = User::find($user_id);
        $parents['parent1'] = $user->parent_id == 0 ? 0 : $user->parent_id;
        if($parents['parent1'] != 0){
            $parent1User = User::find($user->parent_id);
            $parents['parent2'] = $parent1User->parent_id == 0 ? 0 : $parent1User->parent_id;
        }else{
            $parents['parent2'] = 0;
        }
        if($parents['parent2'] != 0){
            $parent2User = User::find($parent1User->parent_id);
            $parents['parent3'] = $parent2User->parent_id == 0 ? 0 : $parent2User->parent_id;
        }else{
            $parents['parent3'] = 0;
        }
        return $parents;
    }

    public function transaction($user_id, $reason, $amount, $inout){
        $user = User::find($user_id);
        $transaction = new Transaction();
        $transaction->user_id = $user_id;
        $transaction->transaction_id = strtoupper(Str::random(10));
        $transaction->reason = $reason;
        $transaction->amount = $amount;
        $transaction->inout = $inout;
        $transaction->inout = $inout;
        $transaction->after_amount = $user->account_balance;
        $transaction->save();
        $this->sendEmail($user_id, $reason, $inout);
    }

    public function sendEmail($user_id, $message, $inout){
        $user = User::find($user_id);
        if($inout == 1){
            $subject = "Amount Deposited";
        }else{
            $subject = "Amount Deducted";
        }
        $data = [
            'message' => $message,
            'subject' => $subject,
        ];
        Mail::to($user->email)->send(new TransactionEmail($data));
    }

    public function checkRewards(){
        $active_reward = ActiveReward::with('reward')->where('user_id', Auth::id())->where('is_completed', 0)->first();
        if($active_reward){
            $user = User::find(Auth::id());
            $now_date = new DateTime();
            $due_date = new DateTime($active_reward->expiry_date);
            if($user->reward_balance >= $active_reward->reward->amount){
                $user->reward_balance = $user->reward_balance - $active_reward->reward->amount;
                if($active_reward->reward->type == "amount"){
                    $user->account_balance = $user->account_balance + $active_reward->reward->amount;
                    $this->transaction(Auth::id(), "You earned a reward of $" . $active_reward->reward->reward, $active_reward->reward->amount, 1);
                }
                $active_reward->is_completed = 1;
                $active_reward->save();
                $user->save();
            }elseif($now_date > $due_date){
                $user->reward_balance = $user->reward_balance - $active_reward->reward->amount;
                $active_reward->delete();
            }
        }
    }

    public function checkCryptoDeposits(){
        $deposits = Deposit::where('user_id', Auth::id())->where('type', 'Crypto')->where('status', 'waiting')->get();
        foreach($deposits as $deposit){
            $payment = json_decode(Http::withHeaders([
                'x-api-key' => env('COIN_API'),
            ])->get(env('COIN_BASE') . 'payment/' . $deposit->payment_id,)->body());
            if($payment->payment_status == "finished"){
                $user = User::find(Auth::id());
                $user->account_balance = round($user->account_balance + $deposit->amount, 4);
                $user->save();
                $deposit->status = $payment->payment_status;
                $deposit->save();
            }
        }
    }
}
