<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\ActivePackage;
use App\Models\Permission;
use App\Models\Transaction;
use App\Models\Profit;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationEmail;

class ActivePackageController extends Controller
{
    public function activatePackage(Request $request){
        if($request->amount > 0){
            $package = Package::find($request->package_id);
            // dd($request->all());
            if($request->type == "Time"){
                $request->validate([
                    'amount' => 'required|min:1|numeric|regex:/^\d+(\.\d{1,2})?$/|between:1,999999.99',
                    'security_code' => 'required|min:6',
                ]);
            }else{
                $request->validate([
                    'amount' => "required|numeric|regex:/^\d+(\.\d{1,4})?$/|between:1,999999.99",
                    'security_code' => 'required|min:6',
                ]);
            }
            if($request->amount > 0){
                $months = 0;
                $percentage = 0;
                for($i = $package->percentage; $i <= 100; $i = $i + $package->percentage){
                    if($percentage < 30){
                        $months++;
                        $percentage += $package->percentage;
                    }
                }
                $user_balance = Auth::user()->account_balance;
                if($user_balance < $request->amount){
                    $request->session()->flash('error', "You don't have enough amount.");
                    return redirect()->back();
                }
                $user = User::find(Auth::id());
                if($request->security_code == $user->security_code){
                    if($package->type == "Time"){
                        $amountByPer = ($request->amount * $package->percentage) / 100;
                        $toGive = ($amountByPer / 30) * $package->no_days; 
                        $active = new ActivePackage();
                        $active->user_id = Auth::id();
                        $active->package_id = $package->id;
                        $active->amount = $request->amount;
                        $active->to_give = $toGive;
                        $active->give_after = $package->update_after;
                        $active->timestamp = Carbon::now()->timestamp;
                        $active->last_updated = 0;
                        $active->expires_on = date('Y-m-d H:i:s', strtotime(" +$months months"));
                        $active->save();
                        $user->account_balance -= $request->amount;
                        $user->save();
                        $this->transaction(Auth::id(), $package->name . " subscribed with $$request->amount", $request->amount, 0);
                        $this->distributeProfits(Auth::id(), $request->amount);
                        $data = [
                            'subject' => "$package->name Subscribed",
                            'message' => "You have successfully subscribed to $package->name with $$request->amount",
                        ];
                        Mail::to($user->email)->send(new NotificationEmail($data));
                        $request->session()->flash('message', "You have successfully subscribed to $package->name with $$request->amount");
                        return redirect()->back();
                    }else{
                        if($request->amount < $package->min_amount || $request->amount > $package->max_amount){
                            $request->session()->flash('error', "Amount must be between $$package->min_amount to $$package->max_amount");
                            return redirect()->back();
                        }else{
                            $toGive = ($request->amount * $package->percentage) / 100;
                            $active = new ActivePackage();
                            $active->user_id = Auth::id();
                            $active->package_id = $package->id;
                            $active->amount = $request->amount;
                            $active->to_give = $toGive;
                            $active->give_after = $package->update_after;
                            $active->timestamp = Carbon::now()->timestamp;
                            $active->last_updated = 0;
                            $active->expires_on = "";
                            $active->total_return = $package->multiplier * $request->amount;
                            $active->remaining = $package->multiplier * $request->amount;
                            $active->given = 0;
                            $active->save();
                            $user->account_balance -= $request->amount;
                            $user->save();
                            $this->transaction(Auth::id(), $package->name . " subscribed with $$request->amount", $request->amount, 0);
                            $this->distributeProfits(Auth::id(), $request->amount);
                            $data = [
                                'subject' => "$package->name Subscribed",
                                'message' => "You have successfully subscribed to $package->name with $$request->amount",
                            ];
                            Mail::to($user->email)->send(new NotificationEmail($data));
                            $request->session()->flash('message', "You have successfully subscribed to $package->name with $$request->amount");
                            return redirect()->back();
                        }
                    }
                }else{
                    $request->session()->flash('error', "Invalid security code.");
                    return redirect()->back();
                }
            }else{
                $request->session()->flash('error', "Amount must be greater than 0");
                return redirect()->back();
            }
        }else{
            $request->session()->flash('error', "Amount must be greater than 0");
            return redirect()->back();
        }
    }

    public function distributeProfits($userId, $amount){
        $profits = Profit::find(1);

        $profit1 = ( $amount * $profits->level1_profit ) / 100;
        $profit2 = ( $amount * $profits->level2_profit ) / 100;
        $profit3 = ( $amount * $profits->level3_profit ) / 100;

        $reward1 = ( $amount * $profits->level1_reward ) / 100;
        $reward2 = ( $amount * $profits->level2_reward ) / 100;
        $reward3 = ( $amount * $profits->level3_reward ) / 100;

        $parents = $this->parents($userId);
        $user = User::find($userId);

        $parent1 = User::find($parents['parent1']);
       
        if($parent1){
            $p1_actives = ActivePackage::where('user_id', $parent1->id)->get();
            $amountInvested_p1 = 0;
            foreach($p1_actives as $p1_active){
                $amountInvested_p1 += $p1_active->amount;
            }
            if($amountInvested_p1 >= 100){
                $parent1->account_balance = round($parent1->account_balance + $profit1, 4);
                $parent1->reward_balance = round($parent1->reward_balance + $reward1, 4);
                $parent1->save();
                $this->transaction($parent1->id, "$$profit1 profit on $$amount Invested by $user->name", $profit1, 1);
                $this->transaction($parent1->id, "$$reward1 reward profit on $$amount Invested by $user->name", $reward1, 1);
                $active_packages = ActivePackage::with('package')->whereHas('package', function($q){
                    $q->where('type', "Multiplier");
                })->where('user_id', $parent1->id)->get();
                
                
                if(count($active_packages) > 0){
                    $per_package = count($active_packages) / $profit1;
                    foreach($active_packages as $package){
                        if($package->package->type == "Multiplier"){
                            $package->remaining = round($package->remaining - $per_package, 4);
                            $package->given = round($package->given + $per_package, 4);
                            $package->save();
                        }
                    }
                }
            }
        }

        
        $parent2 = User::find($parents['parent2']);
        
        if($parent2){
            $p2_actives = ActivePackage::where('user_id', $parent2->id)->get();
            $amountInvested_p2 = 0;
            foreach($p2_actives as $p2_active){
                $amountInvested_p2 += $p2_active->amount;
            }
            if($amountInvested_p2 >= 100){
                $parent2->account_balance = round($parent2->account_balance + $profit2, 4);
                $parent2->reward_balance = round($parent2->reward_balance + $reward2, 4);
                $parent2->save();
                $this->transaction($parent2->id, "$$profit2 profit on $$amount Invested by $user->name", $profit2, 1);
                $this->transaction($parent2->id, "$$reward2 reward profit on $$amount Invested by $user->name", $reward2, 1);
                $active_packages = ActivePackage::with('package')->whereHas('package', function($q){
                    $q->where('type', "Multiplier");
                })->where('user_id', $parent2->id)->get();
                if(count($active_packages) > 0){
                    $per_package = count($active_packages) / $profit2;
                    foreach($active_packages as $package){
                        if($package->package->type == "Multiplier"){
                            $package->remaining = round($package->remaining - $per_package, 4);
                            $package->given = round($package->given + $per_package, 4);
                            $package->save();
                        }
                    }
                }
            }
        }
        
        
        $parent3 = User::find($parents['parent3']);
        if($parent3){
            $p3_actives = ActivePackage::where('user_id', $parent3->id)->get();
            $amountInvested_p3 = 0;
            foreach($p3_actives as $p3_active){
                $amountInvested_p3 += $p3_active->amount;
            }
            if($amountInvested_p3 >= 100){
                $parent3->account_balance = round($parent3->account_balance + $profit3, 4);
                $parent3->reward_balance = round($parent3->reward_balance + $reward3, 4);
                $parent3->save();
                $this->transaction($parent3->id, "$$profit3 profit on $$amount Invested by $user->name", $profit3, 1);
                $this->transaction($parent3->id, "$$reward3 reward profit on $$amount Invested by $user->name", $reward3, 1);
                $active_packages = ActivePackage::with('package')->whereHas('package', function($q){
                    $q->where('type', "Multiplier");
                })->where('user_id', $parent3->id)->get();
                if(count($active_packages) > 0){
                    $per_package = round($profit3 / count($active_packages), 4);
                    foreach($active_packages as $package){
                        if($package->package->type == "Multiplier"){
                            $package->remaining = round($package->remaining - $per_package, 4);
                            $package->given = round($package->given + $per_package, 4);
                            $package->save();
                        }
                    }
                }
            }
        }
    }

    public function cancelPackage($package_id, Request $request){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $active = ActivePackage::with('package')->find($package_id);
        $active_package = ActivePackage::find($package_id);
        $toReturn = $active_package->amount - (($active_package->amount * 30) / 100);
        $user = User::find($active_package->user_id);
        $user->account_balance = $user->account_balance + $toReturn;
        $user->save();
        $active_package->delete();
        $this->transaction($user->id, "You cancelled the package. $$toReturn added to your wallet", $toReturn, 1);
        $data = [
            'subject' => $active->package->name . " Package Cancelled",
            'message' => "You cancelled the package " . $active->package->name . ". $$toReturn added to your wallet",
        ];
        Mail::to($user->email)->send(new NotificationEmail($data));
        $request->session()->flash('success', "You cancelled the package. $$toReturn added to your wallet");
        return redirect()->back();
    }

    public function allPackages(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $packages = Package::all();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Packages', get_defined_vars());
    }

    public function allActivePackages(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $active = ActivePackage::with('user')->with('package')->orderBy('id', 'DESC')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.ActivePackages', get_defined_vars());
    }
}
