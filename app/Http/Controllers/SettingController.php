<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getSettings()
    {
        $setting = Setting::find(1);

        return view('Admin.Pages.SystemSettings', get_defined_vars());
    }
    public function saveSettings(Request $request)
    {
        $request->validate([
            'transfer_fee' => 'required'
        ]);

        if ($request->id) {
            $setting = Setting::find($request->id);
        }else {
            $setting = new Setting();
        }

        $setting->transfer_fee = $request->transfer_fee;
        $setting->save();

        session()->flash('success', 'Transfer Fee Saved Successfully');
        return redirect()->back();
    }
}
