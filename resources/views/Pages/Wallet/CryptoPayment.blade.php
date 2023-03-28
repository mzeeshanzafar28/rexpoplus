@extends('Layouts.UserLayout')
@section('title', 'My Wallet')
@section('style')
<style>
    .coin-container{
        margin: 5px;
        border: 2px solid #871A8F;
        border-radius: 10px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: pointer;
    }
    .active-coin{
        background: #871A8F;
        color: white;
    }
</style>
@endsection
@section('content')
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl" >
          Complete Your Payment
        </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 md:text-2xl">How to Pay</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <p><b>1.</b> Copy the below wallet addess and pay through your application of the selected currency wallet. After payment, the transfer process will be started. It will take 30 minutes to 2 hours depending upon the currency used for transfer.</p>
                <br>
            </div>
            <div class="col-md-12">
                <p><b>2.</b> The payment will be automatically transferred back to your account.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>Amount to Pay</b></p>
                                <br>
                                <img src="https://nowpayments.io/images/coins/{{ $deposit->coin }}.svg" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>{{ round($deposit->pay_amount, 4) }} {{ strtoupper($deposit->coin) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>Payment ID</b></p>
                                <br>
                                <img src="{{ asset('assets/images/all/payment-method.png') }}" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>{{ $deposit->payment_id }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>You Will Receive</b></p>
                                <br>
                                <img src="{{ asset('assets/images/all/wallet.png') }}" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>${{ round($deposit->amount, 4) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>Tax Amount</b></p>
                                <br>
                                <img src="{{ asset('assets/images/all/tax.png') }}" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>${{ round($deposit->tax_amount, 4) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>Deposit Amount</b></p>
                                <br>
                                <img src="{{ asset('assets/images/all/dollar-coin.png') }}" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>${{ $deposit->payment_amount }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="margin: 10px;">
                            <div class="card-body text-center">
                                <p><b>Payment Status</b></p>
                                <br>
                                <img src="{{ asset('assets/images/all/waiting.png') }}" style="height: 50px;margin-left: auto;margin-right: auto">
                                <br>
                                <p>{{ $deposit->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><b>Payment QR</b></p>
                                <br>
                                <div style="display: flex;justify-content: center;cursor: pointer;" title="Click to enlarge" >
                                    {!! QrCode::size(250)->generate($payment->pay_address); !!}
                                </div>
                                <br>
                                <p>{{ $payment->pay_address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    
</script>