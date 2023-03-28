@extends('Layouts.UserLayout')
@section('title', 'Packages')
@section('content')
<main class="main-content w-full pb-8">
    <div class="py-5 text-center lg:py-6">
        <p class="text-sm uppercase">Are you new here?</p>
        <h3
            class="mt-1 text-xl font-semibold text-slate-600 dark:text-navy-100"
        >
            Welcome. Where do you like to Start?
        </h3>
    </div>
    <div class="text-center">
      <lottie-player src="{{asset('assets/animations/packages.json')}}" background="transparent"  speed="1" style="height: 250px; display:block; margin-left:auto; margin-right:auto;"   loop autoplay></lottie-player>
    </div>
    <div class="container">
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
        @if($errors->any())
        <div
          x-data="{isShow:true}"
          :class="!isShow && 'opacity-0 transition-opacity duration-300'"
          class="alert flex items-center justify-between overflow-hidden rounded-lg border border-danger text-danger"
        >
          <div class="flex">
            <div class="px-4 py-3 sm:px-5"><ul>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </ul></div>
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
    </div>
    <div class="container">
        <div class="row">
            @foreach ($packages as $package)
            <div class="col-md-3">
              <div class="card shrink-0 space-y-9 rounded-xl p-4 sm:px-5" style="margin: 10px;">
              <div class="flex items-center justify-between space-x-2">
                <div class="flex items-center space-x-3">
                  <div>
                    <p
                      class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                    >
                    {{ $package->name }}
                    </p>
                    @if($package->type == "Time")
                      <span class="text-4xl tracking-tight text-secondary dark:text-secondary-light" >{{ $package->update_after }}</span>@if($package->update_after == 1) Minute @elseif($package->update_after == 24) Hours @else Days @endif Update
                    @else
                      <span class="text-4xl tracking-tight text-secondary dark:text-secondary-light" >{{ $package->multiplier }}x</span> Return
                    @endif
                  </div>
                </div>
              </div>
              <div class="flex justify-between space-x-2">
                <div>
                  <p class="text-xs+">
                    @if($package->type == "Time")
                    Profit of Total Investment
                    @else
                    Return Monthly
                    @endif
                  </p>
                  <p
                    class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                  >
                  {{ $package->percentage }}% 
                  </p>
                </div>
              </div>
              <div class="grow">
                @if($package->type == "Multiplier")
                <div class="mt-8 space-y-4 text-left">
                    <div class="text-center">
                      <span class="font-medium">
                        ${{ $package->min_amount }} - ${{ $package->max_amount }} Investment Required
                      </span>
                    </div>
                </div>
                @endif
              </div>
              <div class="flex justify-between">
                <div class="w-100" x-data="{showModal:false}">
                    <button
                      @click="showModal = true"
                      class="btn rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 w-100"
                    >
                      Choose Plan
                    </button>
                    <template x-teleport="#x-teleport-target">
                      <div
                        class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                        x-show="showModal"
                        role="dialog"
                        @keydown.window.escape="showModal = false"
                      >
                        <div
                          class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                          @click="showModal = false"
                          x-show="showModal"
                          x-transition:enter="ease-out"
                          x-transition:enter-start="opacity-0"
                          x-transition:enter-end="opacity-100"
                          x-transition:leave="ease-in"
                          x-transition:leave-start="opacity-100"
                          x-transition:leave-end="opacity-0"
                        ></div>
                        <div
                          class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                          x-show="showModal"
                          x-transition:enter="easy-out"
                          x-transition:enter-start="opacity-0 scale-95"
                          x-transition:enter-end="opacity-100 scale-100"
                          x-transition:leave="easy-in"
                          x-transition:leave-start="opacity-100 scale-100"
                          x-transition:leave-end="opacity-0 scale-95"
                        >
                          <div
                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5"
                          >
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                              {{ $package->name }}
                            </h3>
                            <button
                              @click="showModal = !showModal"
                              class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            >
                            <ion-icon name="close-outline" class="h-4.5 w-4.5"></ion-icon>
                              
                            </button>
                          </div>
                          <div class="px-4 py-4 sm:px-5">
                            <p>
                              Amount in your wallet: <b>{{ Auth::user()->account_balance }} USD</b>
                            </p>
                            @if($package->type == "Multiplier")
                            <div class="mt-8 space-y-4 text-left">
                                <div class="text-center">
                                  <span class="font-medium">
                                    ${{ $package->min_amount }} - ${{ $package->max_amount }} Investment Required
                                  </span>
                                </div>
                            </div>
                            @endif
                            <div class="mt-4 space-y-4">
                              {{--  --}}
                                <form action="{{ URL::to('users/activate-package') }}" id="activatePackageForm-{{ $package->id }}" method="POST" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                                    <input type="hidden" name="type" value="{{ $package->type }}">
                                    <label class="block">
                                        <span>Enter Amount:</span>
                                        <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Amount"
                                        type="text"
                                        name="amount"
                                        value="{{ Auth::user()->account_balance }}"
                                        />
                                    </label>
                                    <br>
                                    <label class="block">
                                        <span>Enter Security Code:</span>
                                        <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Security Code"
                                        type="password"
                                        name="security_code"
                                        value=""
                                        />
                                    </label>
                                    <br>
                                    <button class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 btnContinue" id="{{ $package->id }}">Continue</button>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
@section('script')
  <script>
    $(document).on('click', '.btnContinue', function(e){
      e.preventDefault();
      $(this).attr('disabled', true);
      $(this).text('Please Wait...');
      let id = $(this).attr('id');
      $(`#activatePackageForm-${id}`).submit();
    });
  </script>
@endsection