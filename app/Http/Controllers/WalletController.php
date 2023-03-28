<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Withdraw;
use App\Models\Deposit;
use App\Models\Bank;
use App\Models\Permission;
use App\Models\Setting;
use Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class WalletController extends Controller
{
    public function walletPage(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        } 
        $user = User::find(Auth::id());
        $ins = Transaction::where('user_id', Auth::id())->where('inout', 1)->get();
        $outs = Transaction::where('user_id', Auth::id())->where('inout', 0)->get();
        $transactions = Transaction::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $withdraws = Withdraw::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $totalIn = 0;
        $totalOut = 0;
        foreach($ins as $in){
            $totalIn += $in->amount;
        }
        foreach($outs as $out){
            $totalOut += $out->amount;
        }
        $deposits = Deposit::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $coins = json_decode(Http::withHeaders([
            'x-api-key' => env('COIN_API'),
        ])->get( env('COIN_BASE') . 'full-currencies')->body())->currencies;
        return view('Pages.Wallet.Wallet', get_defined_vars());
    }

    public function deposit(Request $request){
        $request->validate([
            'amount' => 'required|numeric|between:1,9999999999.99',
            'select_coin' => 'required',
        ]);
        if($request->amount > 0){
            $order_id = strtoupper(Str::random(8));
            $data = [
                'price_amount' => $request->amount,
                'price_currency' => 'usd',
                'pay_currency' => strtolower($request->select_coin),
                "ipn_callback_url" => "https://nowpayments.io",
                "order_id" => $order_id,
                "order_description" => "Deposit amount to rexpoplus",
            ];
            $payment = json_decode(Http::withHeaders([
                'x-api-key' => env('COIN_API'),
                'Content-Type' => 'application/json'
            ])->post(env('COIN_BASE') . 'payment', $data)->body());
            if(isset($payment->status) && !$payment->status){
                $request->session()->flash('error', $payment->message);
                return redirect()->back();
            }else{
                $deposit = new Deposit();
                $deposit->payment_id = $payment->payment_id;
                $deposit->order_id = $payment->order_id;
                $deposit->type = "Crypto";
                $deposit->payment_amount = $payment->price_amount;
                $deposit->tax_amount = $payment->price_amount - $payment->amount_received;
                $deposit->amount = $payment->amount_received;
                $deposit->coin = $payment->pay_currency;
                $deposit->pay_amount = $payment->pay_amount;
                $deposit->status = $payment->payment_status;
                $deposit->user_id = Auth::id();
                $deposit->save();
                return redirect('user/wallet/crypto-payment/' . $deposit->payment_id);
            }          
        }else{
            $request->session()->flash('error', "Invalid deposit amount. Amount must be greater than 0!");
            return redirect()->back();
        }
        
    }

    public function cryptoPayment($payment_id){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $deposit = Deposit::where('payment_id', $payment_id)->first();
        $payment = json_decode(Http::withHeaders([
            'x-api-key' => env('COIN_API'),
        ])->get(env('COIN_BASE') . 'payment/' . $deposit->payment_id,)->body());
        return view('Pages.Wallet.CryptoPayment', get_defined_vars());
    }

    public function doshthruSuccess(Request $request){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $deposit = new Deposit();
        $deposit->payment_id = $request->transction_id;
        $deposit->order_id = $request->order_id;
        $deposit->type = "Doshthru";
        $deposit->amount = $request->amount;
        $deposit->status = $request->status_code;
        $deposit->user_id = Auth::id();
        $deposit->save();
        $user = User::find(Auth::id());
        $user->account_balance = $user->account_balance + $deposit->amount;
        $user->save();
        $this->transaction(Auth::id(), "$$deposit->amount deposited to wallet using Doshthru", $deposit->amount, 1);
        $request->session()->flash('message', "$$deposit->amount deposited to wallet using Doshthru");
        return redirect('user/my-wallet');
    }

    public function doshthruCancel(Request $request){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $request->session()->flash('message', "$$deposit->amount payment cancelled by user");
        return redirect('user/my-wallet')->back();
    }

    public function sendPayment(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        return view('Pages.Wallet.Send');
    }

    public function confirmPayment(Request $request)
    {
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $request->validate(['email_or_wallet' => 'required', 'amount'=>'required|numeric|between:0,9999999999.99']);
        if($request->amount > 0){
            $amount = $request->amount;
            $feePercentage = Setting::find(1)->value('transfer_fee');
            $toPay = $amount + ( ($feePercentage * $amount) / 100);
            if(Auth::user()->account_balance >= $toPay){
                $toEmail = User::where('email', $request->email_or_wallet)->first();
                $date = Carbon::now()->format('d-m-Y');
                if($toEmail){
                    $to = $toEmail;
                }else{
                    $toWalletId = User::where('wallet_id', $request->email_or_wallet)->first();
                    if($toWalletId) {
                        $to = $toWalletId;
                    }else{
                        $request->session()->flash('error', "Invalid Email or Wallet ID");
                        return redirect()->back();
                    }
                }
        
                return view('Pages.Wallet.Confirm', get_defined_vars());
            }else{
                $request->session()->flash('error', "Not enough account balance");
                return redirect()->back();
            }
        }else{
            $request->session()->flash('error', "Invalid transfer amount. Amount must be greater than 0!");
            return redirect()->back();
        }
        
    }

    public function transferFunds(Request $request){
        $request->validate([
            'security_code' => 'required|min:6'
        ]);
        $from = User::find(Auth::id());
        $to = User::find($request->transferring_to);
        if ($request->security_code == $from->security_code) {
            $feePercentage = Setting::find(1)->value('transfer_fee');
            $toPay = $request->amount + ( ($feePercentage * $request->amount) / 100);
            if($from->account_balance >= $toPay){
                $from->account_balance = $from->account_balance - $toPay;
                $from->save();
                $this->transaction($from->id, "$$toPay sent to $to->name", $toPay, 0);
                
                $to->account_balance = $to->account_balance + $request->amount;
                $to->save();
                $this->transaction($to->id, "$$request->amount received from $from->name", $request->amount, 1);
                
                $request->session()->flash('message', "$$request->amount sent to $to->name");
                return redirect('user/my-wallet');
            }else{
                $request->session()->flash('error', "Not enough balance to send.");
                return redirect()->back();    
            }
        }else {
            $request->session()->flash('error', "Invalid security code.");
            return redirect()->back();
        }
        
    }

    public function withdrawFunds(){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $coins = json_decode(Http::withHeaders([
            'x-api-key' => env('COIN_API'),
        ])->get( env('COIN_BASE') . 'full-currencies')->body())->currencies;
        // dd($coins);
        $bank = Bank::where('user_id', Auth::id())->first();
        return view('Pages.Wallet.Withdraw', get_defined_vars());
    }

    public function withdraw(Request $request){
        $request->validate([
            'amount' => 'required|numeric|between:1,9999999999.99',
            'security_code' => 'required',
            'withdraw_to' => 'required',
            'withdraw_as' => 'exclude_if:withdraw_to,Bank|required',
        ]);
        if($request->amount >= 20){
            $bank = Bank::where('user_id', Auth::id())->first();
            $user = User::find(Auth::id());
            if ($user->security_code == $request->security_code) {
                if($bank){
                    if ($request->withdraw_to == 'Bank' && $bank->iban == null) {
                        $request->session()->flash('error', 'Please add your bank details to withdraw funds');
                        return redirect()->back();
                    }
                    if ($request->withdraw_to == 'MartinPay' && $bank->payment_id == null) {
                        $request->session()->flash('error', 'Please add your MartinPay Wallet details to withdraw funds');
                        return redirect()->back();
                    }
                    if ($request->withdraw_to == 'Binance' && $bank->wallet_address == null) {
                        $request->session()->flash('error', 'Please add your Binance Wallet details to withdraw funds');
                        return redirect()->back();
                    }
                    if($request->amount > 0){
                        if($user->account_balance > $request->amount){
                            $withdraw = new Withdraw();
                            $withdraw->user_id = Auth::id();
                            $withdraw->amount = $request->amount;
                            $withdraw->withdraw_to = $request->withdraw_to;
                            $withdraw->withdraw_as = $request->withdraw_as;
                            $withdraw->save();
                            // dd($request->all());
                
                            
                            $user->account_balance = $user->account_balance - $request->amount;
                            $user->save();
                
                            $this->transaction(Auth::id(), "Request for $$request->amount withdraw to $request->withdraw_to initiated", $request->amount, 0);
                
                            $request->session()->flash('message', "Request for $$request->amount withdraw sent");
                            return redirect('user/my-wallet');
                        }else{
                            $request->session()->flash('error', "Not enough balance to withdraw");
                            return redirect()->back();
                        }
                        
                    }else{
                        $request->session()->flash('error', "Invalid withdraw amount. Amount must be greater than 0!");
                        return redirect()->back();
                    }
                }else{
    
                    $request->session()->flash('error', "Please add your $request->withdraw_to details to withdraw funds");
                    return redirect()->back();
                }
            } else {
                $request->session()->flash('error', 'Invalid Security Code');
                return redirect()->back();
            }
        }else{
            $request->session()->flash('error', 'Minimum withdraw limit is $20.');
            return redirect()->back();
        }
    }

    public function toMainWallet(Request $request){
        if(Auth::user()->user_type == 1){
            return redirect('/admin/dashboard');
        }
        $this->updateBalance();
        $user = User::find(Auth::id());
        if($user->profit_balance > 0){
            // dd($user->toArray());
            $balance = $user->profit_balance;
            $user->profit_balance = 0;
            $user->account_balance = round($user->account_balance + $balance, 4);
            $user->save();
            // dd($user->toArray());
            $this->transaction(Auth::id(), "$$balance transferred to main wallet successfully", $balance, 1);
            $request->session()->flash('success', "$$balance transferred to main wallet successfully");
            return redirect()->back();    
        }else{
            $request->session()->flash('error', "Cannot transfer $" . 0);
            return redirect()->back();    
        }
        
    }

    public function saveBankDetails(Request $request){
        $request->validate([
            'bank_name' => 'required',
            'account_name' => 'required',
            'iban' => 'required',
        ]);
        $bankExist = Bank::where('user_id', Auth::id())->first();
        if ($bankExist) {
            $bank = $bankExist;
        }else {
            $bank = new Bank();            
        }

        $bank->user_id = Auth::id();
        $bank->bank_name = $request->bank_name;
        $bank->account_name = $request->account_name;
        $bank->iban = $request->iban;
        $bank->save();
        $request->session()->flash('message', 'Bank Details saved successfully');
        return redirect()->back();
    }
    public function saveMartinpayDetails(Request $request){
        $request->validate([
            'martinpay_email' => 'required',
            'payment_id' => 'required',
            'martinpay_name' => 'required',
        ]);
        $bankExist = Bank::where('user_id', Auth::id())->first();
        if ($bankExist) {
            $bank = $bankExist;
        }else {
            $bank = new Bank();            
        }
        $bank->user_id = Auth::id();
        $bank->martinpay_email = $request->martinpay_email;
        $bank->payment_id = $request->payment_id;
        $bank->martinpay_name = $request->martinpay_name;
        $bank->save();
        $request->session()->flash('message', 'MartingPay Details saved successfully');
        return redirect()->back();
    }
    public function saveBinanceDetails(Request $request){
        $request->validate([
            'binance_email' => 'required',
            'wallet_address' => 'required',
            'binance_name' => 'required',
        ]);
        $bankExist = Bank::where('user_id', Auth::id())->first();
        if ($bankExist) {
            $bank = $bankExist;
        }else {
            $bank = new Bank();            
        }
        $bank->user_id = Auth::id();
        $bank->binance_email = $request->binance_email;
        $bank->wallet_address = $request->wallet_address;
        $bank->binance_name = $request->binance_name;
        $bank->save();
        $request->session()->flash('message', 'Binance Details saved successfully');
        return redirect()->back();
    }

    public function approveWithdraw(Request $request){
        $request->validate(['transaction_id'=>'required']);
        $with_id = $request->id;
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $withdraw = Withdraw::find($with_id);
        $withdraw->status = 1;
        $withdraw->transaction_id = $request->transaction_id;
        $withdraw->save();
        $request->session()->flash('success', 'Withdraw request approved');
        return redirect()->back();
    }

    public function rejectWithdraw(Request $request){
        $request->validate(['reject_reason'=>'required']);
        $with_id = $request->id;
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $withdraw = Withdraw::find($with_id);
        $withdraw->status = 2;
        $withdraw->reject_reason = $request->reject_reason;
        $withdraw->save();
        $user = User::find($withdraw->user_id);
        $user->account_balance = $user->account_balance + $withdraw->amount;
        $user->save();
        $this->transaction($withdraw->user_id, "Withdraw request for $$withdraw->amount rejected by Admin", $withdraw->amount, 1);
        $request->session()->flash('success', 'Withdraw request rejected');
        return redirect()->back();
    }

    public function all_withs(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $withs = Withdraw::with('user.bank')->where('status', 0)->orderBy('id', 'DESC')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Withdraws', get_defined_vars());
    }

    public function approved_withs()
    {
        $withs = Withdraw::with('user.bank')->where('status', 1)->orderBy('id', 'DESC')->get();

        return view('Admin.Pages.ApprovedWithdraws', get_defined_vars());
    }

    public function rejected_withs()
    {
        $withs = Withdraw::with('user.bank')->where('status', 2)->orderBy('id', 'DESC')->get();

        return view('Admin.Pages.RejectedWithdraws', get_defined_vars());
    }

    public function transactionsAll(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $transactions = Transaction::with('user')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Transactions', get_defined_vars());
    }

    public function depositsAll(){
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $deposits = Deposit::with('user')->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();

        return view('Admin.Pages.Deposits', get_defined_vars());
    }

    public function sendBalancePage()
    {
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $users = User::where('user_type', 0)->get();
        $perm = Permission::where('role_id', Auth::user()->user_role)->where('tab_link', request()->path())->first();
        
        return view('Admin.Pages.SendBalance', get_defined_vars());
    }

    public function sendBalace(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'balance' => 'required|numeric',
            'password' => 'required',
        ]);
        
        $admin = User::find(Auth::id());
        if(Hash::check($request->password, $admin->password)){
            $user = User::find($request->user);
            $user->account_balance += $request->balance;
            $user->save();
    
            $this->transaction($user->id, "$$request->balance received from Rexoplus", $request->balance, 1);
    
            session()->flash('success', "$$request->balance has been sent to $user->name successfully");
    
            return redirect()->back();
        }else{
            session()->flash('error', 'Invalid Password');
            return redirect()->back();
        }
        
    }

    public function singleUserTransactions($id)
    {
        if(Auth::user()->user_type == 0){
            return redirect('/user/dashboard');
        }
        $transactions = Transaction::where('user_id', $id)->orderBy('id', 'DESC')->get();
        $user = User::find($id);
        return view('Admin.Pages.UserTransactions', get_defined_vars());
    }
    
}
