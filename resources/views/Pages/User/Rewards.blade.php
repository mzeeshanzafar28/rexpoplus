@extends('Layouts.UserLayout')
@section('title', 'Rewards')
@section('content')
<main class="main-content w-full pb-8">
    <div class="py-5 text-center lg:py-6">
        <p class="text-sm uppercase">Earn rewards by inviting users to Rexpoplus</p>
        <h3
            class="mt-1 text-xl font-semibold text-slate-600 dark:text-navy-100"
        >
        Rexpoplus Rewards
        </h3>
    </div>
    <div class="text-center">
      <lottie-player src="{{asset('assets/animations/rewards.json')}}" background="transparent"  speed="1" style="height: 250px; display:block; margin-left:auto; margin-right:auto;"   loop autoplay></lottie-player>
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
            @foreach ($rewards as $reward)
            <div class="col-md-3">
              <div class="card shrink-0 space-y-9 rounded-xl p-4 sm:px-5" style="margin: 10px;">
                  <div class="flex items-center justify-between space-x-2">
                    <div class="flex items-center space-x-3">
                      <div>
                        <p
                          class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100"
                        >
                          {{ $reward->type == "amount" ? "$$reward->reward Reward" : $reward->reward }}
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between space-x-2">
                    <div>
                      <p class="text-xs+">Days to Complete</p>
                      <p
                        class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                      >
                        {{ $reward->days_required }} Days
                      </p>
                    </div>
                  </div>
                  <div class="grow">
                    <img src="{{ asset('uploads/' . $reward->reward_image) }}" style="height: 150px;margin-left: auto;margin-right: auto" alt="">
                  </div>
                  <div class="flex justify-between">
                      @if(isset($active_reward))
                          @if($active_reward->reward_id == $reward->id)
                          <span class="btn btn-primary w-100 countdown"></span>
                          @else
                          <p class="text-center">Complete the selected reward to select other</p>
                          @endif
                      @else
                      <form action="{{ URL::to('/user/activate-reward') }}" method="POST" style="width: 100%;" id="activate-reward-form">
                          @csrf
                          <input type="hidden" name="reward_id" value="{{ $reward->id }}">
                          <div class="text-center w-100">
                              <button class="btn btn-primary w-100" id="btnActivate">Select Reward</button>
                          </div>
                      </form>
                      @endif
                  </div>
              </div>
            </div>
            @endforeach
        </div>
        @isset($active_reward)
        <form id="rewardForm" action="{{ URL::to('user/expire-reward') }}" method="POST">
            @csrf
            <input type="hidden" name="reward_id" value="{{ $active_reward->reward_id }}">
        </form>
        @endisset
    </div>
</main>
@endsection
@section('script')
@isset($active_reward)
<script>
    let expiry = "{{ $active_reward->expiry_date }}";
    var countDownDate = new Date(expiry).getTime();
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementsByClassName('countdown')[0].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementsByClassName('countdown')[0].innerHTML = "Expired"
            $("#rewardForm").submit();
        }
    }, 1000);

    function expireReward(){
        // alert();
        $("#rewardForm").submit();
    }

    
</script>

<script>
  $("#btnActivate").click(function(e){
      e.preventDefault();
      $("#btnActivate").attr('disabled', true);
      $("#btnActivate").text("Please Wait...");
      $("#activate-reward-form").submit();
  });
</script>
@endisset
@endsection