<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function packages(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        } 
        $this->updateBalance();
        $packages = Package::all();
        return view('Pages.User.Packages', get_defined_vars());
    }
}
