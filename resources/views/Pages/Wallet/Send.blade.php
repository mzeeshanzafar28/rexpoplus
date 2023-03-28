@extends('Layouts.UserLayout')
@section('title', 'Send Funds')
@section('content')
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2
          class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
        >
          Send
        </h2>
        <div class="hidden h-full py-1 sm:flex">
          <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
        </div>
        <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
          <li class="flex items-center space-x-2">
            <a
              class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
              href="{{ URL::to('user/my-wallet') }}"
              >Wallet</a
            >
            <ion-icon name="chevron-forward-outline" class="h-4 w-4"></ion-icon>
          </li>
          <li>Send Funds</li>
        </ul>
    </div>
    @if(Session::has('message'))
    <div
      x-data="{isShow:true}"
      :class="!isShow && 'opacity-0 transition-opacity duration-300'"
      class="alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-success"
    >
      <div class="flex">
        <div class="px-4 py-3 sm:px-5">{{ Session::get('message') }}</div>
      </div>
      <div class="px-2">
        <button
          class="btn h-7 w-7 rounded-full p-0 font-medium text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25"
          @click="isShow = false; setTimeout(()=>$root.remove(),300)"
        >
        <ion-icon name="close-outline" class="h-4 w-4"></ion-icon>
        </button>
      </div>
    </div>
    @endif
    @if(Session::has('error'))
    <div
      x-data="{isShow:true}"
      :class="!isShow && 'opacity-0 transition-opacity duration-300'"
      class="alert flex items-center justify-between overflow-hidden rounded-lg border border-danger text-danger"
    >
      <div class="flex">
        <div class="px-4 py-3 sm:px-5">{{ Session::get('error') }}</div>
      </div>
      <div class="px-2">
        <button
          class="btn h-7 w-7 rounded-full p-0 font-medium text-danger hover:bg-danger/20 focus:bg-danger/20 active:bg-danger/25"
          @click="isShow = false; setTimeout(()=>$root.remove(),300)"
        >
        <ion-icon name="close-outline" class="h-4 w-4"></ion-icon>
        </button>
      </div>
    </div>
    @endif
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12">
        <div class="card">
          <div
            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5"
          >
            <h2
              class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100"
            >
              Send Funds
            </h2>
          </div>
          
          <div class="p-4 sm:p-5">
            <form action="{{URl::to('/user/wallet/send/confirm')}}" id="sendForm" method="GET">
              {{-- @csrf --}}
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Enter User Email or Wallet ID </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Email or Wallet ID"
                      id="email_or_wallet"
                      type="text"
                      value=""
                      name="email_or_wallet"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="fa-regular fa-user"></i>
                    </span>
                  </span>
                  <small class="text-danger" id="email-error"></small>
                  @error('email_or_wallet')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
                <label class="block">
                  <span>Enter Amount to Send </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Amount to Send"
                      type="text"
                      id="amount"
                      value=""
                      name="amount"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="fa-solid fa-dollar-sign"></i>
                    </span>
                  </span>
                  <small class="text-danger" id="amount-error"></small>
                  @error('amount')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
            </div>
            <br>

            <button
                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnSend"
                {{-- onclick="getTransferDetails()" --}}
                {{-- type="button" --}}
            >
                Continue
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
</main>

{{-- <script>
   function getTransferDetails() {
    const email = $('#email_or_wallet').val();
    const amount = $('#amount').val();
    if(email == ''){
      $('#email-error').text('Please enter email or wallet id');
    }if (amount == '') {
      $('#amount-error').text('Please enter amount');
    }if (email == '' || amount == '') {
      return
    }

  
  }
</script> --}}
@endsection
@section('script')
  <script>
    $(document).on('click', '.btnSend', function(e){
      e.preventDefault();
      $(this).attr('disabled', true);
      $(this).text('Please wait...');
      $("#sendForm").submit();
    });
  </script>
@endsection