<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivePackage;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Withdraw;
use App\Models\Reward;
use App\Models\ActiveReward;
use Carbon\Carbon;
use Auth;

class MainController extends Controller
{
    public function index(){
        return view('Home');
    }
    
    public function about(){
        return view('About');
    }

    public function services(){
        return view('Services');
    }

    public function privacyPolicy(){
        return view('PrivacyPolicy');
    }

    public function dashboard(Request $request){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        } 
        $check = ActiveReward::where('user_id', Auth::id())->where('is_completed', 0)->first();
        $reward_balance = User::find(Auth::id())->reward_balance;
        if(!$check && intval($reward_balance) > 0){
            $request->session()->flash('message', "Please select a reward to continue. You cannot change the reward until it expires or completed");
            return redirect('user/rewards');
        }
        $this->checkRewards();
        $this->checkCryptoDeposits();
        $totalProfit = $this->updateBalance();
        $active_reward = ActiveReward::where('user_id', Auth::id())->where('is_completed', 0)->first();
        $user_balance = Auth::user()->account_balance;
        $active_packages = ActivePackage::with('package')->where('user_id', Auth::id())->get();
        $totalInvested = 0;
        $totalInvites = 0;
        $level1 = $this->level1Users(Auth::id());
        $level2 = $this->level2Users(Auth::id());
        $level3 = $this->level3Users(Auth::id());
        $totalInvites = count($level1) + count($level2) + count($level3);
        $transactions = Transaction::where('user_id', Auth::id())->orderBy('id', 'DESC')->limit(10)->get();
        $withdraws = Withdraw::where('user_id', Auth::id())->orderBy('id', 'DESC')->limit(10)->get();
        $rewards = Reward::all();
        foreach($active_packages as $package){
            $totalInvested += $package->amount;
            // if($package->package->type == "Time"){
            //     if($package->give_after == 1 || $package->give_after == 24){
            //         $totalProfit += $package->to_give * $package->last_updated; 
            //     }else{
            //         $totalProfit += $package->to_give * ($package->last_updated / $package->give_after);
            //     }
            // }else{
            //     $totalProfit += $package->given;
            // }
        }
        return view('Pages.User.Dashboard', get_defined_vars());
    }

    public function accountSettings(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        return view('Pages.Auth.SettingsAccount');
    }
    
    public function securitySettings(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        return view('Pages.Auth.SettingsSecurity');
    }

    public function inviteUsersPage(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        } 
        $userId = Auth::id();
        $user = User::find($userId);
        return view('Pages.User.Refer', get_defined_vars());
    }

    public function chartData(){
        $data = [
            ['Days', 'In', 'Out'],
        ];
        for($i = 0; $i < 30; $i++){
            $date = Carbon::now()->subDay($i);
            $transactions = Transaction::where('user_id', Auth::id())->whereDate('created_at', $date)->get();
            $totalIn = 0;
            $totalOut = 0;
            foreach($transactions as $transaction){
                if($transaction->inout == 1){
                    $totalIn += $transaction->amount;
                }else{
                    $totalOut += $transaction->amount;
                }
            }
            array_push($data, [
                $date->format('M j'), $totalIn, $totalOut,
            ]);
        }
        return response()->json($data);
    }
}
