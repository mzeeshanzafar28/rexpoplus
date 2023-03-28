<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function index()
    {
        $teams = User::with('role')->where('user_type', 1)->where('user_role', '>', 0)->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Teams', get_defined_vars());
    }

    public function addTeam()
    {
        $roles = Role::all();

        return view('Admin.Pages.CreateTeam', get_defined_vars());
    }

    public function editTeam($id)
    {
        $team = User::find($id);
        $roles = Role::all();

        return view('Admin.Pages.CreateTeam', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$request->id,
            'phone' => 'required',
            'password' => 'required_without:id',
            'user_role' => 'required'
        ]);

        if ($request->id) {
            $user = User::find($request->id);
        }else {
            $user = new User();    
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_type = 1;
        $user->user_role = $request->user_role;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        session()->flash('success', 'Team Member Saved Successfully');
        return redirect('admin/team-management');
    }
}
