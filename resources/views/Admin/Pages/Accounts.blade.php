@extends('Admin.Layout.AdminLayout')
@section('title', 'Users Accounts Balances')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Account Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">Account Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Account Balance</th>
                                            <th>Reward Balance</th>
                                            <th>Wallet ID</th>
                                            <th>Total In</th>
                                            <th>Total Out</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($accounts as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$user->id)}}">{{ $user->name }}</a></td>
                                            <td>{{ $user->email }}</td>
                                            <td>${{ $user->account_balance }}</td>
                                            <td>${{ $user->reward_balance }}</td>
                                            <td>{{ $user->wallet_id }}</td>
                                            <td>${{ $inouts[$user->id]['totalIn'] }}</td>
                                            <td>${{ $inouts[$user->id]['totalOut'] }}</td>
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
    })
</script>
@endsection