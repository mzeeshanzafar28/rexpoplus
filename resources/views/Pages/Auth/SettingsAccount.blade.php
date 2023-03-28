@extends('Layouts.UserLayout')
@section('title', 'Account Settings')
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
        <li>Account</li>
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
              Account Setting
            </h2>
            <div class="flex justify-center space-x-2">
              <button
                id="saveProfileBtn"
                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              >
                Save
              </button>
            </div>
          </div>
          
          <div class="p-4 sm:p-5">
            <form action="{{ URL::to('user/update-profile') }}" id="profile-form" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="flex flex-col">
                <span
                  class="text-base font-medium text-slate-600 dark:text-navy-100"
                  >Profile Pic</span
                >
                <div class="avatar mt-1.5 h-20 w-20">
                  <img
                    class="mask is-squircle"
                    id="preview_img"
                    src="{{ asset('uploads/'. Auth::user()->profile_pic) }}"
                    alt="avatar"
                  />
                  <div
                    class="absolute bottom-0 right-0 flex items-center justify-center rounded-full bg-white dark:bg-navy-700"
                  >
                    <span
                      class="btn h-6 w-6 rounded-full border border-slate-200 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <label for="profile_pic"><ion-icon name="camera-outline" class="h-3.5 w-3.5" style="cursor:pointer"></ion-icon></label>
                    </span>
                    <input type="file" name="profile_pic" id="profile_pic" style="display: none">
                  </div>
                </div>
              </div>
              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Full Name </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter full name"
                      type="text"
                      value="{{ Auth::user()->name }}"
                      name="name"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="fa-regular fa-user text-base"></i>
                    </span>
                  </span>
                  @error('name')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
                <label class="block">
                  <span>Phone Number</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter phone number"
                      type="text"
                      name="phone"
                      value="{{ Auth::user()->phone }}"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="fa fa-phone"></i>
                    </span>
                  </span>
                  @error('phone')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </label>
                <label class="block">
                  <span>Email Address </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Enter email address"
                      type="text"
                      disabled
                      value="{{ Auth::user()->email }}"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="fa-regular fa-envelope text-base"></i>
                    </span>
                  </span>
                </label>
                <label class="block">
                  <span>Reference Code </span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Reference Code"
                      disabled
                      type="text"
                      value="{{ Auth::user()->reference_code }}"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="fa-regular fa-user text-base"></i>
                    </span>
                  </span>
                </label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection
@section('script')
  <script>
    $(function(){
      $("#profile_pic").change(function (e) { 
        e.preventDefault();
        const file = e.target.files[0];
        if (file) {
          let reader = new FileReader();
          reader.onload = function (event) {
            $('#preview_img').attr('src', event.target.result);
          }
            reader.readAsDataURL(file);
          }
      });
      $("#saveProfileBtn").click(function(){
        $("#saveProfileBtn").attr('disabled', true);
        $("#saveProfileBtn").text('Please Wait...');
        $("#profile-form").submit();
      });
    });
  </script>  
@endsection