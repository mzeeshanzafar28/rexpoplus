<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\ActivePackage;
use App\Models\ActiveReward;
use App\Models\Bank;
use App\Models\Deposit;
use App\Models\Permission;
use App\Models\Setting;
use App\Models\Withdraw;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginPage(){
        if(Auth::check() && Auth::user()->user_type == 1){
            return redirect('admin/dashboard');
        }
        return view('Admin.Pages.Auth.Login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $check = User::where('email', $request->email)->first();
        if($check && $check->user_type == 1){
            if(Auth::attempt($data)){
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error', 'Invalid email or password');
                return redirect()->back();
            }
        }else{
            $request->session()->flash('error', 'Invalid email for admin login');
            return redirect()->back();
        }
    }
    public function dashboard(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $total_users = User::where('user_type', 0)->get()->count();
        $active_packages = ActivePackage::all();
        $total_active_packages = $active_packages->count();
        $total_active_rewards = ActiveReward::where('is_completed', 0)->get()->count();
        $total_invested = 0;
        foreach($active_packages as $package){
            $total_invested += $package->amount;
        }
        $withs = Withdraw::with('user.bank')->orderBy('id', 'DESC')->limit(10)->get();
        $active = ActivePackage::with('user')->with('package')->orderBy('id', 'DESC')->limit(10)->get();
        $transactions = Transaction::with('user')->orderBy('id', 'DESC')->limit(10)->get();
        $active_rewards = ActiveReward::with('user')->with('reward')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();
        // dd($withs->toArray());
        return view('Admin.Pages.Dashboard', get_defined_vars());
    }
    public function users(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $users = User::where('user_type', 0)->orderBy('id', 'DESC')->get();
        $levels = [];
        foreach($users as $user){
            $lvl1 = $this->level1Users($user->id);
            $lvl2 = $this->level2Users($user->id);
            $lvl3 = $this->level3Users($user->id);
            $levels[$user->id] = [
                'total' => count($lvl1) + count($lvl2) + count($lvl3),
                'level1' => count($lvl1),
                'level2' => count($lvl2),
                'level3' => count($lvl3),
            ];
        }

        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Users', get_defined_vars());
    }

    public function userProfile($user_id){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $user = User::find($user_id);
        $lvl1 = $this->level1Users($user->id);
        $lvl2 = $this->level2Users($user->id);
        $lvl3 = $this->level3Users($user->id);
        $totalInvites = count($lvl1) + count($lvl2) + count($lvl3);
        $transactions = Transaction::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
        $deposits = Deposit::where('user_id', $user_id)->orderBy('id', 'DESC')->get();
        $withdraws = Withdraw::where('user_id', $user_id)->orderBy('id', 'DESC')->get();
        $bank = Bank::where('user_id', $user_id);
        return view('Admin.Pages.UserProfile', get_defined_vars());
    }

    public function accounts(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $accounts = User::where('user_type', 0)->orderBy('id', 'DESC')->get();
        $inouts = [];
        foreach($accounts as $user){
            $transactions = Transaction::where('user_id', $user->id)->get();
            $totalIn = 0;
            $totalOut = 0;
            foreach($transactions as $transaction){
                if($transaction->inout == 1){
                    $totalIn += $transaction->amount;
                }else{
                    $totalOut += $transaction->amount;
                }
            }
            $inouts[$user->id] = [
                'totalIn' => $totalIn,
                'totalOut' => $totalOut,
            ];
        }

        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Accounts', get_defined_vars());
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }

    public function settings(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $user = User::find(Auth::id());
        $setting = Setting::find(1);
        return view('Admin.Pages.Settings', get_defined_vars());
    }

    public function saveDetails(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $request->session()->flash('success', 'Account details saved successfully');
        return redirect()->back();
    }

    public function savePassword(Request $request){
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->flash('success', 'Password updated successfully');
        return redirect()->back();
    }

}
