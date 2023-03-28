@extends('Layouts.UserLayout')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full pb-8">

        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                @if (Session::has('success'))
                    <div x-data="{ isShow: true }" :class="!isShow && 'opacity-0 transition-opacity duration-300'"
                        class="alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-success">
                        <div class="flex">
                            <div class="px-4 py-3 sm:px-5">{{ Session::get('success') }}</div>
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
                        class="alert flex items-center justify-between overflow-hidden rounded-lg border border-error text-error">
                        <div class="flex">
                            <div class="px-4 py-3 sm:px-5">{{ Session::get('error') }}</div>
                        </div>
                        <div class="px-2">
                            <button
                                class="btn h-7 w-7 rounded-full p-0 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25"
                                @click="isShow = false; setTimeout(()=>$root.remove(),300)">
                                <ion-icon name="close-outline" class="h-4 w-4"></ion-icon>
                            </button>
                        </div>
                    </div>
                @endif
                @if ($user_balance == 0)
                    <div class="flex items-center justify-between space-x-2">
                        <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
                            Wallet Overview
                        </h2>
                    </div>
                    <div class="text-center">
                        <lottie-player src="{{ asset('assets/animations/digital-wallet.json') }}" background="transparent"
                            speed="1" style="height: 250px; display:block; margin-left:auto; margin-right:auto;" loop
                            autoplay>
                        </lottie-player>
                        <div class="m-1">
                          <h5>Deposit Amount in Rexpoplus Wallet and Earn Rewards</h5>
                        </div>
                    </div>
                @else
                    <div class="flex items-center justify-between space-x-2">
                        <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
                            Wallet Overview
                        </h2>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:space-x-7">

                        <div class="ax-transparent-gridline grid w-full grid-cols-1">
                            <div id="columnchart_material"></div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-5 lg:grid-cols-2">
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between space-x-1">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                ${{ round($user_balance, 4) }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Amount in Wallet</p>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                ${{ $totalInvested }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Invested Amount</p>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                ${{ round($totalProfit, 4) }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Total Profit</p>
                        @if ($totalProfit > 0)
                            <a href="{{ URL::to('user/wallet/profit/main') }}" class="btn btn-sm btn-success"
                                style="font-size: 10px;padding: 5px 10px;">Transfer to Main Wallet</a>
                        @endif
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                {{ count($active_packages) }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Active Packages</p>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between space-x-1">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                ${{ Auth::user()->reward_balance }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Reward Amount</p>
                    </div>
                    <div class="rounded-lg bg-slate-150 p-4 dark:bg-navy-700">
                        <div class="flex justify-between">
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                {{ $totalInvites }}
                            </p>
                        </div>
                        <p class="mt-1 text-xs+">Invited Users</p>
                    </div>
                </div>
            </div>
            <div class="card col-span-12 lg:col-span-8" style="min-height: 250px">
                <div class="flex items-center justify-between py-3 px-4">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Active Packages
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-y-4 pb-3 sm:grid-cols-3">
                    @if (count($active_packages) == 0)
                        <div class="flex flex-col justify-between border-4 border-transparent border-l-info px-4">
                            <p class="text-base font-medium text-slate-600 dark:text-navy-100">
                                No Active Packages
                            </p>
                        </div>
                    @endif
                    @foreach ($active_packages as $package)
                        <div class="flex flex-col justify-between border-4 border-transparent border-l-info px-4">
                            <div>
                                <p class="text-base font-medium text-slate-600 dark:text-navy-100">
                                    {{ $package->package->name }}
                                </p>
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    ${{ round($package->to_give, 4) }} / {{ $package->package->update_after }}
                                    @if ($package->package->update_after == 1)
                                        Minute
                                    @elseif($package->package->update_after == 24)
                                        Hours
                                    @else
                                        Days
                                    @endif Update
                                </p>
                                <p class="font-inter">
                                    <span class="text-2xl font-medium text-slate-600 dark:text-navy-100">
                                    @if ($package->package->type == 'Time')
                                        @if ($package->give_after == 1 || $package->give_after == 24)
                                            ${{ round($package->to_give * $package->last_updated, 4) }}
                                        @else
                                            ${{ round($package->to_give * ($package->last_updated / $package->give_after), 4) }}
                                        @endif
                                    </span><span class="text-xs">Profit</span>
                                    @else
                                    ${{ $package->given }}
                                    </span><span class="text-xs">/ ${{ $package->total_return }}</span>
                                @endif
                                </p>
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    @if ($package->package->update_after == 1)
                                    {{ $package->last_updated }} Minute(s)
                                    @elseif($package->package->update_after == 24)
                                    {{ $package->last_updated }} Day(s)
                                    @elseif($package->package->update_after == 7)
                                    {{ round($package->last_updated / $package->give_after) }} Week(s)
                                    @elseif($package->package->update_after == 30)
                                    {{ round($package->last_updated / $package->give_after) }} Month(s)
                                    @elseif($package->package->update_after == 90)
                                    {{ round($package->last_updated / $package->give_after) }} Quarter Year(s)
                                    @endif 
                                    Passed
                                </p>
                            </div>
                            <div>
                                <div class="mt-8">

                                    <p class="font-inter">
                                        <span class="text-2xl font-medium text-slate-600 dark:text-navy-100">${{ $package->amount }}
                                        </span><span class="text-xs">{{ $package->package->percentage }}%</span>
                                    </p>
                                    <p class="mt-1 text-xs"><span class="text-success">Subscribed on</span>
                                        {{ \Carbon\Carbon::parse($package->created_at)->format('M j, Y, g:i a') }}</p>
                                    @if ($package->package->type == 'Time')
                                        <p class="mt-1 text-xs"><span class="text-danger">Expire on</span>
                                            {{ \Carbon\Carbon::parse($package->expires_on)->format('M j, Y, g:i a') }}</p>
                                    @endif
                                    <button class="btn btn-sm btn-danger btnCancelPackage"
                                        data-url="{{ URL::to('user/cancel-package/' . $package->id) }}"
                                        style="padding: 3px 6px;font-size: 12px;margin-top: 5px;">Cancel Package</button>
                                </div>
                            </div>
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-span-12 lg:col-span-4" style="height: 250px;">
            <div class="flex items-center justify-between">
                <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                    Invite Others
                </h2>
            </div>
            <div class="mt-3">
                <p>
                    <span class="text-3xl text-slate-700 dark:text-navy-100">{{ $totalInvites }}</span>
                </p>
                <p class="text-xs+">Invited Users</p>
            </div>
            <div class="mt-4 flex h-2 space-x-1">
                <div class="container text-center">
                    <p><b>Reference Link</b></p>
                    <p id="referLink">{{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}
                    </p>
                    <br>
                    <p>Share this Link with other to invite them</p>
                    <br>
                    <button class="btn btn-primary btn-sm" id="btnCopy">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </button>
                    <a href="https://api.whatsapp.com/send?text={{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}"
                        data-action="share/whatsapp/share" class="btn btn-primary btn-sm">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::getSchemeAndHttpHost() }}/register/{{ Auth::user()->reference_code }}"
                        class="btn btn-primary btn-sm">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="mt-4 grid grid-cols-12 gap-4 bg-slate-150 py-5 dark:bg-navy-800 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div
                class="col-span-12 flex flex-col px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-3 lg:pr-0">
                <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl">
                    Rexpoplus Rewards
                </h2>

                <p class="mt-3 grow">
                    Earn rewards by inviting users to rexpoplus
                </p>
            </div>
            <div {{-- is-scrollbar-hidden --}}
                class=" col-span-12 flex space-x-4 overflow-x-auto px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-9 lg:pl-0">
                @foreach ($rewards as $reward)
                    <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                        <div class="flex items-center justify-between space-x-2">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        {{ $reward->type == 'amount' ? "$$reward->reward Reward" : $reward->reward }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between space-x-2">
                            <div>
                                <p class="text-xs+">Days to Complete</p>
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    {{ $reward->days_required }} Days
                                </p>
                            </div>
                        </div>
                        <div class="grow">
                            <img src="{{ asset('uploads/' . $reward->reward_image) }}"
                                style="height: 150px;margin-left: auto;margin-right: auto" alt="">
                        </div>
                        <div class="flex justify-between">
                            @if (isset($active_reward))
                                @if ($active_reward->reward_id == $reward->id)
                                    <span class="btn btn-primary w-100 countdown"></span>
                                @else
                                    <p class="text-center">Complete the selected reward to select other</p>
                                @endif
                            @else
                                <form  method="POST"
                                    style="width: 100%;" action="{{ URL::to('/user/activate-reward') }}" id="activate-reward-form">
                                    @csrf
                                    <input type="hidden" name="reward_id" value="{{ $reward->id }}">
                                    <div class="text-center w-100">
                                        <button class="btn btn-primary w-100" id="btnActivate">Select Reward</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
                @isset($active_reward)
                    <form id="rewardForm" action="{{ URL::to('user/expire-reward') }}" method="POST">
                        @csrf
                        <input type="hidden" name="reward_id" value="{{ $active_reward->reward_id }}">
                    </form>
                @endisset
            </div>
        </div>
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="card col-span-12 pb-4 sm:col-span-6">
                <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Recent Transaction History
                    </h2>
                </div>
                <ol class="timeline line-space px-4 [--size:1.5rem] sm:px-5">
                    @foreach ($transactions as $transaction)
                        <li class="timeline-item">
                            <div
                                class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                @if ($transaction->inout == 1)
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                @else
                                    <ion-icon name="remove-circle-outline"></ion-icon>
                                @endif
                            </div>
                            <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                    <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                        {{ $transaction->reason }} <br> {{ $transaction->inout == 0 ? '-' : '' }}
                                        ${{ $transaction->amount }}
                                    </p>
                                    <span
                                        class="text-xs text-slate-400 dark:text-navy-300">{{ $transaction->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="card col-span-12 pb-4 sm:col-span-6">
                <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Recent Withdraws
                    </h2>
                </div>
                <ol class="timeline line-space px-4 [--size:1.5rem] sm:px-5">
                    @foreach ($withdraws as $withdraw)
                        <li class="timeline-item">
                            <div
                                class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                <ion-icon name="remove-circle-outline"></ion-icon>
                            </div>
                            <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                    <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                        Withdraw for ${{ $withdraw->amount }} <br> <span
                                            class="text-{{ $withdraw->status == 1 ? 'success' : 'danger' }}">{{ $withdraw->status == 1 ? 'Completed' : 'Pending' }}</span>
                                    </p>
                                    <span
                                        class="text-xs text-slate-400 dark:text-navy-300">{{ $withdraw->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        // setInterval(() => {
        //     window.location.reload();
        // }, 300000);
        $(function() {
            $("#btnCopy").click(function() {
                const toCopy = $("#referLink").html();
                navigator.clipboard.writeText(toCopy);
                notyf.success('Invitation link copied!');
            });
        });
    </script>
    @isset($active_reward)
        <script>
            // var now = new Date().getTime();
            // alert(new Date());
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
                document.getElementsByClassName('countdown')[0].innerHTML = days + "d " + hours + "h " + minutes +
                    "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementsByClassName('countdown')[0].innerHTML = "Expired"
                    $("#rewardForm").submit();
                }
            }, 1000);

            function expireReward() {
                // alert();
                $("#rewardForm").submit();
            }
        </script>
    @endisset
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['bar']
        });

        function drawChart(tableData) {
            var data = google.visualization.arrayToDataTable(tableData);
            var options = {
                height: 300,
                chart: {
                    title: 'Wallet Activity',
                    subtitle: 'Last 30 Days Transfers In and Out',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        $(function() {
            axios.get('/user/get-chart-data').then(response => {
                google.charts.setOnLoadCallback(drawChart(response.data));
            });
            $(document).on('click', '.btnCancelPackage', function() {
                let url = $(this).attr('data-url');
                let self = $(this);
                iziToast.question({
                    timeout: 20000,
                    close: false,
                    overlay: true,
                    displayMode: 'once',
                    id: 'question',
                    zindex: 999,
                    title: 'Hey',
                    message: 'You will lose 30% of your investment. Are you cancel this package?',
                    position: 'center',
                    buttons: [
                        ['<button><b>YES</b></button>', function(instance, toast) {
                            self.attr('disabled', true);
                            self.text('Please wait...');
                            window.location.href = url;
                            instance.hide({
                                transitionOut: 'fadeOut'
                            }, toast, 'button');
                        }, true],
                        ['<button>NO</button>', function(instance, toast) {
                            instance.hide({
                                transitionOut: 'fadeOut'
                            }, toast, 'button');
                        }],
                    ],
                    onClosing: function(instance, toast, closedBy) {
                        console.info('Closing | closedBy: ' + closedBy);
                    },
                    onClosed: function(instance, toast, closedBy) {
                        console.info('Closed | closedBy: ' + closedBy);
                    }
                });
            });
        });
    </script>
    <script>
        $("#btnActivate").click(function(e){
            e.preventDefault();
            $("#btnActivate").attr('disabled', true);
            $("#btnActivate").text("Please Wait...");
            $("#activate-reward-form").submit();
        });
    </script>
@endsection
