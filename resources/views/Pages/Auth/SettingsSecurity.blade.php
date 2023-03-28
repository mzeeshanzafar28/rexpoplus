@extends('Layouts.UserLayout')
@section('title', 'Security Settings')
@section('style')
<style>
  .checkmark{
      color: rgb(173, 173, 173);
  }
  .checkmark-active{
      color: black
  }
  .checkmark-active ion-icon{
      color: green;
  }
</style>
@endsection
@section('content')
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
      <h2
        class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
      >
        Settings
      </h2>
      <div class="hidden h-full py-1 sm:flex">
        <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
      </div>
      <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
        <li class="flex items-center space-x-2">
          <a
            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
            href="#"
            >Settings</a
          >
          <ion-icon name="chevron-forward-outline" class="h-4 w-4"></ion-icon>
        </li>
        <li>Security</li>
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
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      @include('Components.SettingsNav')
      <div class="col-span-12 lg:col-span-8">
        <div class="card">
          <div
            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5"
          >
            <h2
              class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100"
            >
              Security Setting
            </h2>
          </div>
          
          <div class="p-4 sm:p-5">
            <form action="{{ URL::to('user/update-password') }}" id="passwordUpdateForm" method="POST">
              @csrf
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>New Password </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="New Password"
                      type="password"
                      value=""
                      name="password"
                      id="password_input"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="fas fa-lock text-base"></i>
                    </span>
                  </span>
                  @error('password')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
                <label class="block">
                  <span>Confirm New Password </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Confirm New Password"
                      type="password"
                      value=""
                      name="password_confirmation"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="fas fa-lock text-base"></i>
                    </span>
                  </span>
                  @error('password_confirmation')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
            </div>
            <br>
            <div class="col-sm-12" style="font-size: 14px;">
                <span class="checkmark" id="capital_check"><ion-icon name="checkmark-outline"></ion-icon> A capital(uppercase) letter</span> &emsp;
                <span class="checkmark" id="lowercase_check"><ion-icon name="checkmark-outline"></ion-icon> A lowercase letter</span> &emsp;
                <span class="checkmark" id="number_check"><ion-icon name="checkmark-outline"></ion-icon> A number</span> &emsp;
                <span class="checkmark" id="length_check"><ion-icon name="checkmark-outline"></ion-icon> Minimum 8 characters</span> &emsp;
            </div>
            <div class="col-sm-12" id="password_error" style="display: none">
                <br>
                <small class="text-danger">Please complete all the password requirements to continue</small>
            </div>
            <br>
            <button
                id="savePasswordUpdate"
                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
                Save New Password
            </button>
            </form>
          </div>
          <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
          <div class="p-4 sm:p-5">
            <form action="{{ URL::to('user/update-security-code') }}" id="securityForm" method="POST">
              @csrf
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Security Code </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Security Code"
                      type="password"
                      value=""
                      name="security_code"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="fas fa-lock text-base"></i>
                    </span>
                  </span>
                  @error('security_code')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
            </div>
            <br>
            <button
                id="saveSecurityCode"
                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
                Update Security Code
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
    let number_check = false;
    let capital_check = false;
    let lowercase_check = false;
    let length_check = false;
    $("#password_input").keyup(function (e) { 
        var password = e.target.value;

        if(password.search(/[A-Z]/) >= 0){
            $("#capital_check").removeClass('checkmark');
            $("#capital_check").addClass('checkmark-active');
            capital_check = true;
        }else{
            $("#capital_check").addClass('checkmark');
            $("#capital_check").removeClass('checkmark-active');
            capital_check = false;
        }
        
        if(password.search(/[a-z]/) >= 0){
            $("#lowercase_check").removeClass('checkmark');
            $("#lowercase_check").addClass('checkmark-active');
            lowercase_check = true;
        }else{
            $("#lowercase_check").addClass('checkmark');
            $("#lowercase_check").removeClass('checkmark-active');
            lowercase_check = false;
        }
        
        if(password.search(/[0-9]/) >= 0){
            $("#number_check").removeClass('checkmark');
            $("#number_check").addClass('checkmark-active');
            number_check = true;
        }else{
            $("#number_check").addClass('checkmark');
            $("#number_check").removeClass('checkmark-active');
            number_check = false;
        }

        if(password.length >= 8){
            $("#length_check").removeClass('checkmark');
            $("#length_check").addClass('checkmark-active');
            length_check = true;
        }else{
            $("#length_check").addClass('checkmark');
            $("#length_check").removeClass('checkmark-active');
            length_check = false;
        }
    });
    $("#savePasswordUpdate").click(function(e){
      e.preventDefault();
      $("#password_error").hide();
      if(number_check && length_check && lowercase_check && capital_check){
        $("#savePasswordUpdate").attr('disabled', true);
        $("#savePasswordUpdate").text('Please wait...');
        $("#passwordUpdateForm").submit();
      }else{
        $("#password_error").show();
      }
    })
    $("#saveSecurityCode").click(function(e){
      e.preventDefault();
      $("#saveSecurityCode").attr('disabled', true);
        $("#saveSecurityCode").text('Please wait...');
        $("#securityForm").submit();
    });
  </script>  
@endsection