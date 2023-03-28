<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Mail\RecoverPassword;
use App\Mail\NotificationEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function register_page($reference_link = null){
        if(Auth::check()){
            return view('Home');
        }
        return view('Pages.Auth.Register', get_defined_vars());
    }
    
    public function login_page(){
        if(Auth::check()){
            return view('Home');
        }
        return view('Pages.Auth.Login');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|starts_with:+',
            'password' => 'required|min:8',
            'security_code' => 'required|min:6'
        ]);
        $parent_id = 0;
        if($request->reference_code){
            $parent = User::where('reference_code', $request->reference_code)->first();
            if($parent){
                $parent_id = $parent->id;
            }else{
                $request->session()->flash('message', 'Invalid reference code. Enter a valid reference code to continue');
                return redirect()->back();
            }
        }else{
            $parent = User::where('email','user@rexpoplus.com')->first();
            $parent_id = $parent->id;
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->security_code = $request->security_code;
        $user->reference_code = strtoupper(Str::random(8));
        $user->parent_id = $parent_id;
        $user->wallet_id = Carbon::now()->timestamp;
        $user->save();
        $code = rand(111111, 999999);
        $request->session()->put('verification_code', $code);
        $request->session()->put('user_email', $user->email);
        $request->session()->put('user_id', $user->id);
        $data = [
            'code' => $code,
            'subject' => 'Verify Your Email',
        ];
        Mail::to($user->email)->send(new VerifyEmail($data));
        $request->session()->flash('success_message', 'You are registered successfully. Please check your email for code');
        return redirect('verify-email');
    }

    public function verifyEmailPage(Request $request){
        if($request->session()->get('verification_code') && $request->session()->get('user_id')){
            return view('Pages.Auth.VerifyEmail');
        }else{
            return redirect('/login');
        }
    }

    public function verifyEmail(Request $request){
        $request->validate([
            'code' => 'required',
        ]);
        $code = $request->session()->get('verification_code');
        if($code == $request->code){
            $userId = $request->session()->get('user_id');
            $user = User::find($userId);
            $user->verified_at = Carbon::now();
            $user->save();
            $request->session()->flush();
            $request->session()->flash('success_message', 'Verified Successfully! Login Now');
            return redirect('login');
        }else{
            $request->session()->flash('message', 'Invalid verification code.');
            return redirect('verify-email');
        }
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $check = User::where('email', $request->email)->first();
        if($check && $check->user_type == 0){
            if($check->verified_at){
                $data = [
                    'email' => $request->email,
                    'password' => $request->password,
                ];
                if(Auth::attempt($data)){
                    return redirect('/user/dashboard');
                }else{
                    $request->session()->flash('message', 'Invalid email or Password');
                    return redirect()->back();  
                }
            }else{
                $code = rand(111111, 999999);
                $request->session()->put('verification_code', $code);
                $request->session()->put('user_email', $check->email);
                $request->session()->put('user_id', $check->id);
                $data = [
                    'code' => $code,
                    'subject' => 'Verify Your Email',
                ];
                Mail::to($check->email)->send(new VerifyEmail($data));
                $request->session()->flash('message', 'Please verify your email to login');
                return redirect('verify-email');
            }
        }else{
            $request->session()->flash('message', 'This email address is not registered');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->profile_pic = $this->uploadImage($request, 'profile_pic');
        $user->save();
        $request->session()->flash('message', 'Profile updated successfully');
        return redirect()->back();
    }

    public function updatePassword(Request $request){
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        $data = [
            'subject' => 'Password Updated',
            'message' => 'You updated your password for rexpoplus account',
        ];
        Mail::to($user->email)->send(new NotificationEmail($data));
        $request->session()->flash('message', 'Password updated successfully');
        return redirect()->back();
    }
    
    public function updateSecurityCode(Request $request){
        $request->validate([
            'security_code' => 'required|min:6',
        ]);
        $user = User::find(Auth::id());
        $user->security_code = $request->security_code;
        $user->save();
        $data = [
            'subject' => 'Security Code Updated',
            'message' => 'You updated your security code for rexpoplus account',
        ];
        Mail::to($user->email)->send(new NotificationEmail($data));
        $request->session()->flash('message', 'Security code updated successfully');
        return redirect()->back();
    }

    public function forgotPasswordPage(){
        return view('Pages.Auth.ForgotPassword');
    }

    public function forgotPassword(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $verification_string = Crypt::encryptString($request->email);
        $data = [
            'subject' => 'Recover Your Password',
            'recover_password_link' => $request->getSchemeAndHttpHost() . '/recover-password/' .$verification_string,
        ];
        $request->session()->put('verification_string', $verification_string);
        Mail::to($request->email)->send(new RecoverPassword($data));
        $request->session()->flash('success_message', 'Please check your email for recover password link');
        return redirect('login');
    }

    public function recoverPasswordPage($verification_string, Request $request){
        if($verification_string == $request->session()->get('verification_string')){
            $email = Crypt::decryptString($verification_string);
            return view('Pages.Auth.RecoverPassword', get_defined_vars());
        }else{
            $request->session()->flash('message', 'Invalid recover password link');
            return redirect('login');
        }
    }

    public function recoverPassword(Request $request){
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $email = Crypt::decryptString($request->session()->get('verification_string'));
        $user = User::where('email', $email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->flush();
        $request->session()->flash('success_message', 'Password updated. Please login now');
        return redirect('login');
    }
    
    public function userInfo(Request $request){
        $to = "hello@tyimccray.co";
        // $to = "mzubairkhan.official@gmail.com";
        $subject = "New User Subscribed";
        
        $message = "
        <html>
        <head>
        <title>New User Subscribed</title>
        </head>
        <body>
        <p>A new user has subscribed</p>
        <table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        </tr>
        <tr>
        <td>". $request->Name ."</td>
        <td>". $request->Email ."</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <tyimccray@tyimccray.co>' . "\r\n";
        $headers .= 'Cc: hello@tyimccray.co' . "\r\n";
        
        mail($to,$subject,$message,$headers);
        
        return redirect()->back();
    }
}
