<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;
use App\Models\ActiveReward;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DateTime;

class RewardController extends Controller
{
    public function rewardsPage(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        } 
        $rewards = Reward::all();
        $active_reward = ActiveReward::where('user_id', Auth::id())->where('is_completed', 0)->first();
        return view('Pages.User.Rewards', get_defined_vars());
    }

    public function activateReward(Request $request){
        $check = ActiveReward::where('reward_id', $request->reward_id)->where('user_id', Auth::id())->where('is_completed', 0)->first();
        if(!$check){
            $reward = Reward::find($request->reward_id);
            $active = new ActiveReward();
            $active->user_id = Auth::id();
            $active->reward_id = $request->reward_id;
            $active->expiry_date = Carbon::now()->addDays($reward->days_required);
            $active->save();
            $message = $reward->type == "amount" ? "$$reward->reward" : $reward->reward;
            $request->session()->flash('message', "You activated the reward for $message");
            return redirect()->back();
        }else{
            $request->session()->flash('error', "Reward already active");
            return redirect()->back();
        }
    }

    public function expireReward(Request $request){
        $active_reward = ActiveReward::with('reward')->where('reward_id', $request->reward_id)->where('is_completed', 0)->first();
        $user = User::find(Auth::id());
        $now_date = new DateTime();
        $due_date = new DateTime($active_reward->expiry_date);
        if($now_date > $due_date){
            if($user->reward_balance >= $active_reward->reward->amount){
                $user->reward_balance = $user->reward_balance - $active_reward->reward->amount;
                if($active_reward->reward->type == "amount"){
                    $user->account_balance = $user->account_balance + $active_reward->reward->amount;
                    $this->transaction(Auth::id(), "You earned a reward of $" . $active_reward->reward->reward, $active_reward->reward->amount, 1);
                }
                $active_reward->is_completed = 1;
                $active_reward->save();
                $user->save();
            }else{
                $user->reward_balance = $user->reward_balance - $active_reward->reward->amount;
                ActiveReward::find($active_reward->id)->delete();
            }
        }
        return redirect('/user/dashboard');
    }

    public function allRewards(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $rewards = Reward::all();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Rewards', get_defined_vars());
    }

    public function activeRewards(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $active = ActiveReward::with('user')->with('reward')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.ActiveRewards', get_defined_vars());
    }
}
