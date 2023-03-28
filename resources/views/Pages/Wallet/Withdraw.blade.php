@extends('Layouts.UserLayout')
@section('title', 'Withdraw Funds')
@section('content')
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Withdraw
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="{{ URL::to('user/my-wallet') }}">Wallet</a>
                    <ion-icon name="chevron-forward-outline" class="h-4 w-4"></ion-icon>
                </li>
                <li>Withdraw Funds</li>
            </ul>
        </div>
        @if (Session::has('message'))
            <div x-data="{ isShow: true }" :class="!isShow && 'opacity-0 transition-opacity duration-300'"
                class="alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-success">
                <div class="flex">
                    <div class="px-4 py-3 sm:px-5">{{ Session::get('message') }}</div>
                </div>
                <div class="px-2">
                    <button
                        class="btn h-7 w-7 rounded-full p-0 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
                        @click="isShow = false; setTimeout(()=>$root.remove(),300)">
                        <ion-icon name="close-outline" class="h-4 w-4"></ion-icon>
                    </button>
                </div>
            </div>
        @endif
        @if (Session::has('error'))
            <div x-data="{ isShow: true }" :class="!isShow && 'opacity-0 transition-opacity duration-300'"
                class="alert flex items-center justify-between overflow-hidden rounded-lg border border-danger text-danger">
                <div class="flex">
                    <div class="px-4 py-3 sm:px-5">{{ Session::get('error') }}</div>
                </div>
                <div class="px-2">
                    <button
                        class="btn h-7 w-7 rounded-full p-0 font-medium text-danger hover:bg-danger/20 focus:bg-danger/20 active:bg-danger/25"
                        @click="isShow = false; setTimeout(()=>$root.remove(),300)">
                        <ion-icon name="close-outline" class="h-4 w-4"></ion-icon>
                    </button>
                </div>
            </div>
        @endif
        <!--class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6"-->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div
                            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Withdraw Funds
                            </h2>
                        </div>
                        <div class="p-4 sm:p-5">
                            <form action="{{ URL::to('user/wallet/withdraw') }}" id="withdrawForm" method="POST">
                                @csrf
                                <div class="">
                                    <label class="block">
                                        <span>Enter Amount to Withdraw </span>
                                        <small class="text-danger" style="float: right">You can withdraw minimum of $20</small>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Amount to Withdraw" type="text" value=""
                                                name="amount" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-dollar-sign"></i>
                                            </span>
                                        </span>
                                        @error('amount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>Withdraw To <small>(If Account details are not saved add these first to withdraw)</small> </span>
                                        <span class="relative mt-1.5 flex">
                                            <select
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                name="withdraw_to" id="withdrawOption"
                                                onchange="checkOptions()">
                                                <option disabled>Select Where you want to withdraw funds</option>
                                                <option selected value="Bank" {{ (old("withdraw_to") == "Bank" ? "selected" : "") }}>Bank</option>
                                                <option value="MartinPay" {{ (old("withdraw_to") == "MartinPay" ? "selected" : "") }}>MartinPay</option>
                                                <option value="Binance" {{ (old("withdraw_to") == "Binance" ? "selected" : "") }}>Binance</option>
                                            </select>
                                            <span
                                              class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                              <i class="fa-solid fa-wallet"></i>
                                          </span>
                                        </span>
                                        </span>
                                        @error('withdraw_to')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="" id="assetsOptions" style="display: none;">
                                    <label class="block">
                                        <span>Select Asset to recieve</span>
                                        <span class="relative mt-1.5 flex">
                                            <select
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                name="withdraw_as">
                                                <option selected disabled>Select asset as which you want to withdraw funds</option>
                                                @foreach ($coins as $coin)
                                                  <option value="{{$coin->name}}">{{$coin->name}}</option>  
                                                @endforeach

                                            </select>
                                            <span
                                              class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                              <i class="fa-solid fa-coins"></i>
                                          </span>
                                        </span>
                                        </span>
                                        @error('withdraw_as')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br style="display: none" id="coin-break">
                                <div class="">
                                  <label class="block">
                                      <span>Enter Security Code </span>
                                      <span class="relative mt-1.5 flex">
                                          <input
                                              class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                              placeholder="Security Code" type="password" value=""
                                              name="security_code" />
                                          <span
                                              class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                              <i class="fa-solid fa-lock"></i>
                                          </span>
                                      </span>
                                      @error('security_code')
                                          <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </label>
                              </div>
                              <br>
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnWithdraw">
                                    Withdraw Funds
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2" id="bank-info">
                    <div class="card">
                        <div
                            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Bank Details
                            </h2>
                        </div>
                        <div class="p-4 sm:p-5">
                            <form action="{{ URL::to('user/wallet/save-bank-details') }}" id="bankForm" method="POST">
                                @csrf
                                <div class="">
                                    <label class="block">
                                        <span>Bank Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Bank Name" type="text" value="{{ $bank->bank_name ?? '' }}"
                                                name="bank_name" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-building-columns"></i>
                                            </span>
                                        </span>
                                        @error('bank_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>Account Holder Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Account Holder Name" type="text"
                                                value="{{ $bank->account_name ?? '' }}" name="account_name" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-user"></i>
                                            </span>
                                        </span>
                                        @error('account_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>IBAN Number</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="IBAN Number" type="text" value="{{ $bank->iban ?? '' }}"
                                                name="iban" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-credit-card"></i>
                                            </span>
                                        </span>
                                        @error('iban')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnSaveBank">
                                    Save Bank Details
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2" id="martinpay-info" style="display: none">
                    <div class="card">
                        <div
                            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                MartinPay Details
                            </h2>
                        </div>
                        <div class="p-4 sm:p-5">
                            <form action="{{ URL::to('user/wallet/save-martinpay-details') }}" id="martinForm" method="POST">
                                @csrf
                                <div class="">
                                    <label class="block">
                                        <span>Account Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Account Name" type="text" value="{{ $bank->martinpay_name ?? '' }}"
                                                name="martinpay_name" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-user"></i>
                                            </span>
                                        </span>
                                        @error('martinpay_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>MartinPay Email</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="MartinPay Email" type="text" value="{{ $bank->martinpay_email ?? '' }}"
                                                name="martinpay_email" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-envelope"></i>
                                            </span>
                                        </span>
                                        @error('martinpay_email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>Payment Id</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Payment Id" type="text"
                                                value="{{ $bank->payment_id ?? '' }}" name="payment_id" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-id-card"></i>
                                            </span>
                                        </span>
                                        @error('payment_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnSaveMartin">
                                    Save MartinPay Details
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2" id="binance-info" style="display: none">
                    <div class="card">
                        <div
                            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
                            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Binance Details
                            </h2>
                        </div>
                        <div class="p-4 sm:p-5">
                            <form action="{{ URL::to('user/wallet/save-binance-details') }}" id="binanceForm" method="POST">
                                @csrf
                                <div class="">
                                    <label class="block">
                                        <span>Binance Account Name</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Binance Account Name" type="text" value="{{ $bank->binance_name ?? '' }}"
                                                name="binance_name" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-user"></i>
                                            </span>
                                        </span>
                                        @error('binance_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>Binance Email</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Binance Email" type="text" value="{{ $bank->binance_email ?? '' }}"
                                                name="binance_email" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </span>
                                        @error('binance_email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                <div class="">
                                    <label class="block">
                                        <span>Binance Wallet Address</span>
                                        <span class="relative mt-1.5 flex">
                                            <input
                                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Wallet Address" type="text"
                                                value="{{ $bank->wallet_address ?? '' }}" name="wallet_address" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                <i class="fa-regular fa-id-card"></i>
                                            </span>
                                        </span>
                                        @error('wallet_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </label>
                                </div>
                                <br>
                                
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnSaveBinance">
                                    Save Binance Details
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
@section('script')
    <script>
        function checkOptions(){
        const option = $('#withdrawOption').val();
        if (option == 'Bank') {
            $('#martinpay-info').hide();
            $('#binance-info').hide();
            $('#bank-info').show();
            $('#assetsOptions').hide();
            $('#coin-break').hide();

        }
        if (option == 'MartinPay') {
            $('#martinpay-info').show();
            $('#assetsOptions').show();
            $('#binance-info').hide();
            $('#bank-info').hide();
            $('#coin-break').show();
        }
        if (option == 'Binance') {
            $('#assetsOptions').show();
            $('#martinpay-info').hide();
            $('#binance-info').show();
            $('#bank-info').hide();
            $('#coin-break').show();
            
        }
        }
        checkOptions();
    </script>
    <script>
        $(document).on('click', '.btnSaveBank', function(e){
            e.preventDefault();
            $(this).attr('disabled', true);
            $(this).text('Please wait...');
            $("#bankForm").submit();
        });
        $(document).on('click', '.btnSaveMartin', function(e){
            e.preventDefault();
            $(this).attr('disabled', true);
            $(this).text('Please wait...');
            $("#martinForm").submit();
        });
        $(document).on('click', '.btnSaveBinance', function(e){
            e.preventDefault();
            $(this).attr('disabled', true);
            $(this).text('Please wait...');
            $("#binanceForm").submit();
        });
        $(document).on('click', '.btnWithdraw', function(e){
            e.preventDefault();
            $(this).attr('disabled', true);
            $(this).text('Please wait...');
            $("#withdrawForm").submit();
        });
    </script>
@endsection
