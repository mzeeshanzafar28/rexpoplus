<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Tab;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('Admin.Pages.Roles', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        if ($request->id) {
            $role = Role::find($request->id);
        }else {
            $role = new Role();
        }

        $role->name = $request->name;
        $role->save();

        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        session()->flash('success', 'Role Saved Successfully');
        return redirect()->back();
    }

    public function removeRole($id)
    {
        $users = User::where('user_role', $id)->get();
        if ($users) {
            session()->flash('error', 'Please Change Roles of Team member with this role and then delete');
            return redirect()->back();
        }
        Role::find($id)->delete();
        session()->flash('success', 'Role Deleted Successfully');
        return redirect()->back();
    }

    public function getPermissions($role_id)
    {
        $role = Role::find($role_id);
        $tabs = Tab::all();
        $permissions = Permission::where('role_id', $role_id)->get();

        return view('Admin.Pages.Permissions', get_defined_vars());
    }

    public function savePermissions(Request $request)
    {
        $old_permissions = Permission::where('role_id', $request->role_id)->delete();
        foreach ($request->checked_tabs as $tab) {
            
            $perm = new Permission();
            $perm->role_id = $request->role_id;
            $perm->tab_link = $tab;
            if ($request->checked_permissions) {
                foreach ($request->checked_permissions as $tabs => $perms) {
                    
                    if ($tabs == $tab.'-add') {
                        $perm->can_create = 1;
                    }
                    if ($tabs == $tab.'-update') {
                        $perm->can_update = 1;
                    }
                    if ($tabs == $tab.'-delete') {
                        $perm->can_delete = 1;
                    }
                }
            }

            $perm->save();
        }

        session()->flash('success', 'Permissions have been updated successfully');

        return redirect('admin/roles');
    }
}
