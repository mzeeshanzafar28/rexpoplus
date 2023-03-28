@extends('Layouts.UserLayout')
@section('title', 'My Wallet')
@section('style')
    <style>
        .coin-container {
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

        .active-coin {
            background: #871A8F;
            color: white;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }
    </style>
@endsection
@section('content')
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">


            <div class="col-span-12 lg:col-span-8">
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
                <div class="card bg-gradient-to-br from-purple-500 to-indigo-600 px-4 pb-4 sm:px-5">
                    <div class="flex items-center justify-between py-3 text-white">
                        <h2 class="text-sm+ font-medium tracking-wide">Your Balance</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                        <div>
                            <div class="flex w-9/12 items-center space-x-1">
                                <p class="text-xs text-indigo-100 line-clamp-1">
                                    {{ $user->wallet_id }}
                                </p>
                                <button
                                    onclick="copyWalletID()"
                                    class="btn h-5 w-5 shrink-0 rounded-full p-0 text-white hover:bg-white/20 focus:bg-white/20 active:bg-white/25">
                                    <ion-icon name="copy-outline" class="h-3.5 w-3.5"></ion-icon>
                                </button>
                            </div>
                            <div class="mt-3 text-3xl font-semibold text-white">
                                ${{ $user->account_balance }}
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 sm:gap-5 lg:gap-6">
                            <div>
                                <p class="text-indigo-100">In</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                        <ion-icon name="arrow-up-outline" class="h-4 w-4"></ion-icon>
                                    </div>
                                    <p class="text-base font-medium text-white">${{ $totalIn }}</p>
                                </div>

                                <a href="{{ URL::to('user/wallet/withdraw') }}"
                                    class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                                    Withdraw
                                </a>
                            </div>
                            <div>
                                <p class="text-indigo-100">Out</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20 text-white">
                                        <ion-icon name="arrow-down-outline" class="h-4 w-4"></ion-icon>
                                    </div>
                                    <p class="text-base font-medium text-white">${{ $totalOut }}</p>
                                </div>
                                <a href="{{ URL::to('user/wallet/send') }}"
                                    class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                                    Send
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 sm:mt-5 lg:mt-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Recent Deposits
                        </h2>
                    </div>
                    <div class="card mt-3">
                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-hoverable w-full text-left" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th
                                            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Order ID
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Payment Type
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Amount
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Date
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Status
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $deposit)
                                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <div class="flex items-center space-x-4">

                                                    <div>
                                                        <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                            {{ $deposit->order_id }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>{{ $deposit->type }}</p>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>${{ round($deposit->amount, 4) }}</p>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>{{ date('M j, Y, g:i a', strtotime($deposit->created_at)) }}</p>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>
                                                    @if ($deposit->type == 'Crypto')
                                                        {{ $deposit->status }}
                                                    @else
                                                        <span
                                                            class="text-{{ $deposit->status == 1 ? 'success' : 'danger' }}">{{ $deposit->status == 1 ? 'Completed' : 'Pending' }}</span>
                                                    @endif
                                                </p>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                @if ($deposit->type == 'Crypto')
                                                    <a href="{{ URL::to('user/wallet/crypto-payment/' . $deposit->payment_id) }}"
                                                        class="btn btn-primary">View</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:mt-5 lg:mt-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Recent Withdraws
                        </h2>
                    </div>
                    <div class="card mt-3">
                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-hoverable w-full text-left" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th
                                            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Withdraw To
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Amount
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Date
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Status
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($withdraws as $withdraw)
                                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <div class="flex items-center space-x-4">
                                                    <div>
                                                        <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                            {{ $withdraw->withdraw_to }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <div class="flex items-center space-x-4">
                                                    <div>
                                                        <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                            ${{ $withdraw->amount }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>{{ date('M j, Y, g:i a', strtotime($withdraw->created_at)) }}</p>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p>
                                                    @if ($withdraw->status == 0)
                                                        <span class="text-warning">Pending</span>
                                                    @elseif($withdraw->status == 1)
                                                        <span class="text-success">Completed</span>
                                                    @elseif($withdraw->status == 2)
                                                        <span class="text-danger">Rejected</span>
                                                    @endif
                                                </p>
                                            </td>

                                            <td>
                                                <div class="flex justify-between">
                                                    <div class="w-30" x-data="{ showModal: false }">
                                                        <button @click="showModal = true"
                                                            class="btn rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 w-30">
                                                            View
                                                        </button>
                                                        <template x-teleport="#x-teleport-target">
                                                            <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                                                x-show="showModal" role="dialog"
                                                                @keydown.window.escape="showModal = false">
                                                                <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                                                    @click="showModal = false" x-show="showModal"
                                                                    x-transition:enter="ease-out"
                                                                    x-transition:enter-start="opacity-0"
                                                                    x-transition:enter-end="opacity-100"
                                                                    x-transition:leave="ease-in"
                                                                    x-transition:leave-start="opacity-100"
                                                                    x-transition:leave-end="opacity-0"></div>
                                                                <div class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                                                                    x-show="showModal" x-transition:enter="easy-out"
                                                                    x-transition:enter-start="opacity-0 scale-95"
                                                                    x-transition:enter-end="opacity-100 scale-100"
                                                                    x-transition:leave="easy-in"
                                                                    x-transition:leave-start="opacity-100 scale-100"
                                                                    x-transition:leave-end="opacity-0 scale-95">
                                                                    <div
                                                                        class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                                                                        <h3
                                                                            class="text-base font-medium text-slate-700 dark:text-navy-100">
                                                                            {{-- {{ $package->name }} --}}
                                                                            Withdraw Details
                                                                        </h3>
                                                                        <button @click="showModal = !showModal"
                                                                            class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                                            <ion-icon name="close-outline"
                                                                                class="h-4.5 w-4.5"></ion-icon>

                                                                        </button>
                                                                    </div>
                                                                    <div class="px-4 py-4 sm:px-5">
                                                                        <table class="table">
                                                                            <tr>
                                                                                <th>Withdraw To:</th>
                                                                                <td>{{ $withdraw->withdraw_to }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Amount:</th>
                                                                                <td>${{ $withdraw->amount }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Withdraw As:</th>
                                                                                <td>{{ $withdraw->withdraw_as ?? 'Dolllars' }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Withdraw Date:</th>
                                                                                <td>{{ date('M j, Y, g:i a', strtotime($withdraw->created_at)) }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th> Status:</th>
                                                                                <td>
                                                                                    @if ($withdraw->status == 0)
                                                                                        Pending
                                                                                    @elseif($withdraw->status == 1)
                                                                                        Completed
                                                                                    @elseif($withdraw->status == 2)
                                                                                        Rejected
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @if ($withdraw->status == 1)
                                                                                <tr>
                                                                                    <th> Transaction Id:</th>
                                                                                    <td>{{ $withdraw->transaction_id }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                            @if ($withdraw->status == 2)
                                                                                <tr>
                                                                                    <th>
                                                                                        Reason of Rejection:
                                                                                    </th>
                                                                                    <td>
                                                                                        {{ $withdraw->reject_reason }}</td>
                                                                                </tr>
                                                                                </p>
                                                                            @endif

                                                                        </table>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Recent Transactions
                    </h2>
                </div>
                <div class="card mt-3">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-hoverable w-full text-left" style="font-size: 12px">
                            <thead>
                                <tr>
                                    <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Reason
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Amount
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Amount After
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    @php
                                        $class = $transaction->inout == 1 ? 'success' : 'danger';
                                    @endphp
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex h-5 w-5 shrink-0 items-center justify-center rounded-lg bg-{{ $class }}/10 text-{{ $class }} dark:bg-accent dark:text-white">
                                                    <ion-icon
                                                        name="arrow-{{ $transaction->inout == 1 ? 'up' : 'down' }}-outline"
                                                        class="h-4 w-4"></ion-icon>
                                                </div>
                                                <div>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        {{ $transaction->reason }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>{{ date('M j, Y, g:i a', strtotime($transaction->created_at)) }}</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-{{ $class }}" style="text-align: right">
                                                {{ $transaction->inout == 0 ? '-' : '' }} ${{ $transaction->amount }}</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p style="text-align: right">${{ $transaction->after_amount }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:gap-5 lg:col-span-4 lg:gap-6">
            <div class="card pb-4" style="height: fit-content;">
                <div class="flex items-center justify-between px-4 py-3 sm:px-5">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Deposit Balance
                    </h2>
                </div>

                <div class="px-4 sm:px-5">
                    <div x-data="{ activeTab: 'tabCrypto' }" class="tabs mt-3 flex flex-col">
                        <div
                            class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-150 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                            <div class="tabs-list flex px-1.5 py-1">
                                <button @click="activeTab = 'tabCrypto';showCrypto()"
                                    :class="activeTab === 'tabCrypto' ? 'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                        'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn flex-1 space-x-2 px-3 py-2 font-medium" id="btnCrypto">
                                    <span>Using Crypto</span>
                                </button>
                                <button @click="activeTab = 'tabDoshthru';showDoshthru()"
                                    :class="activeTab === 'tabDoshthru' ?
                                        'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                        'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn flex-1 space-x-2 px-3 py-2 font-medium" id="btnDoshthru">
                                    <span>MartinPay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="cryptoForm">
                        {{--  --}}
                        {{--  --}}
                        <form  id="depositForm" action="{{ URL::to('user/wallet/deposit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="select_coin" value="" id="selected">
                            <label class="block">
                                <span>Amount to Deposit </span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Enter Amount to Deposit" type="text" name="amount" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        $
                                    </span>
                                </span>
                                @error('amount')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </label>
                            <br>
                            <label class="block">
                                <span>Select or Search Coin </span>
                                <span class="relative mt-1.5 flex">
                                    <input
                                        class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search Coin" onkeyup="searchCoin()" type="text"
                                        id="searchQuery" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <ion-icon name="search-outline"></ion-icon>
                                    </span>
                                </span>
                                @error('select_coin')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </label>
                            <br>
                            <div class="relative" style="overflow-y: auto;height: 250px;overflow-x: hidden;">
                                <div class="row" id="coins"></div>
                            </div>
                            <button id="depositBtn"
                                class="btn mt-6 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 depositBtn">
                                Deposit
                            </button>
                        </form>
                    </div>
                    <div id="doshthruForm" style="display: none">
                        <label class="block">
                            <span>Amount to Deposit </span>
                            <span class="relative mt-1.5 flex">
                                <input
                                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="Enter Amount to Deposit" type="text" name="amount"
                                    id="amountToPay" />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    $
                                </span>
                            </span>
                            @error('amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </label>
                        <br>
                        <a href="http://martinpay.com/"
                            class="btn mt-6 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            Pay With MartinPay
                        </a>
                    </div>
                </div>
                <div class="mx-4 my-3 h-px bg-slate-200 dark:bg-navy-500 sm:mx-5"></div>
            </div>
        </div>
        </div>
    </main>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let coins = [];
    let filtered = [];
    axios.get(`https://api.nowpayments.io/v1/full-currencies`, {
        headers: {
            'x-api-key': "{{ env('COIN_API') }}",
        }
    }).then(response => {
        coins = response.data.currencies;
        filtered = coins;
        print_coins(filtered);
    });

    function copyWalletID() {
        navigator.clipboard.writeText('{{ $user->wallet_id }}');
        notyf.success('Wallet ID Copied!');
    };

    function print_coins(coins) {
        let data = ``;
        coins.forEach(coin => {
            data += `<div class="col-md-4">
                        <div class="coin-container" id="${coin.id}">
                            <img src="https://nowpayments.io${ coin.logo_url }" style="height: 40px;width: 40px;">
                            <br>
                            ${ coin.code }
                        </div>
                    </div>`;
        });
        $("#coins").html(data);
    }

    $(document).on('click', '.coin-container', function() {
        let current = $(this);
        $(".coin-container").removeClass('active-coin');
        current.addClass('active-coin');
        let id = current.attr('id');
        let selected = coins.find(coin => coin.id == id);
        $("#selected").val(selected.code);
    });

    function searchCoin() {
        let search_query = $("#searchQuery").val();
        filtered = coins.filter(coin => {
            if (coin.code.toLowerCase().includes(search_query) || coin.name.toLowerCase().includes(
                search_query)) {
                return true;
            }
        });
        print_coins(filtered);
    }

    function showCrypto() {
        $("#cryptoForm").show();
        $("#doshthruForm").hide();
    }

    function showDoshthru() {
        $("#cryptoForm").hide();
        $("#doshthruForm").show();
    };

    function payWithDoshthru(amount, currency, success_url, cancel_url, api_key, order_id) {
        let data = {
            amount_from: amount, //amount to charge user
            currency_from: currency, //currency of charging amount
            success_url: success_url, //URL to redirect customer after successful payment
            cancel_url: cancel_url, //URL to redirect cutomer after cancel the amount
            api_key: api_key, //your accounts api key in which you want to recieve 
            order_id: order_id, //id given by you for order 
        };

        let stringData = JSON.stringify(data);

        const encodedData = window.btoa(stringData);

        window.location.href = `https://doshthru.com/pay-with-crypto/${encodedData}`;
    }

    const genRand = (len) => {
        return Math.random().toString(36).substring(2, len + 2);
    }

    function btnDoshthruPay() {
        let amount = document.getElementById('amountToPay').value;
        if (amount == '' || amount == null || amount <= 0) {
            notyf.error('Please enter amount to continue!');
        } else {
            payWithDoshthru(
                amount,
                'usd',
                'https://rexpoplus.com/user/wallet/doshthru/success',
                'https://rexpoplus.com/user/wallet/doshthru/cancel',
                '0BWFRODEPXF7AYBR1669987836',
                genRand(10).toUpperCase()
            );
        }
    };

    $(document).on('click', '.depositBtn', function(e){
        e.preventDefault();
        $("#depositBtn").attr('disabled', true);
        $("#depositBtn").text('Please Wait...');
        $("#depositForm").submit();
    });
</script>
