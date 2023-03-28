@extends('Admin.Layout.AdminLayout')
@section('title', 'Rejected Withdraw List')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Rejected Withdraw Requests</h4>
                        <div>
                            <a href="{{URL::to('admin/withdraws')}}" class="btn btn-primary m-1">Pending Withdraws</a>
                            <a href="{{URL::to('admin/withdraws/approved')}}" class="btn btn-success m-1">Approved Withdraws</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible shadow fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible shadow fade show" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">Rejected Withdraw Requests</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Withdraw To</th>
                                            <th>Account Details</th>: 
                                            <th>Amount</th>
                                            <th>Withdraw As</th>
                                            <th>Date & Time</th>
                                            <th>Rejection Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withs as $with)
                                        <tr>
                                            <td>{{ $with->id }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$with->user->id)}}">{{ $with->user->name }}</a></td>
                                            <td>{{ $with->withdraw_to }}</td>
                                            <td>
                                                @if ($with->withdraw_to == 'Bank')
                                                    <span><strong>Bank Name: </strong> {{$with->user->bank->bank_name}}</span> <br>
                                                    <span><strong>Account Name: </strong>{{$with->user->bank->account_name}}</span><br>
                                                    <span><strong>IBAN: </strong>{{$with->user->bank->iban}}</span>
                                                  
                                                @elseif ($with->withdraw_to == 'MartinPay')
                                                    <span><strong>Account Name: </strong> {{$with->user->bank->martinpay_name}}</span> <br>
                                                    <span><strong>Account Email: </strong>{{$with->user->bank->martinpay_email}}</span><br>
                                                    <span><strong>Payment Id: </strong>{{$with->user->bank->payment_id}}</span>
                                                
                                                @elseif ($with->withdraw_to == 'Binance')
                                                    <span><strong>Account Name: </strong> {{$with->user->bank->binance_name}}</span> <br>
                                                    <span><strong>Account Email: </strong>{{$with->user->bank->binance_email}}</span><br>
                                                    <span><strong>Wallet Address: </strong>{{$with->user->bank->wallet_address}}</span>
                                                @endif
                                            </td>
                                            
                                            <td>${{ $with->amount }}</td>
                                            <td>{{ $with->withdraw_as ?? 'Dollars' }}</td>
                                        
                                            <td>{{ \Carbon\Carbon::parse($with->created_at)->format('M j, Y, g:i a') }}</td>
                                            <td>
                                                {{$with->reject_reason}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    $(function(){
        $("#userTable").DataTable({
            "order": [
                [0, "desc"]
            ]
        });
    });

</script>
@endsection