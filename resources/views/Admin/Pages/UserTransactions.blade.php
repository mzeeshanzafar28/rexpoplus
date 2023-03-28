@extends('Admin.Layout.AdminLayout')
@section('title', 'All Transactions')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Transactions of {{$user->name}}</h4>
                        <a href="/admin/send-balance" class="btn btn-primary btn-sm"><span class="las la-arrow-left"></span> Go Back</a>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">All Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Transaction ID</th>
                                            <th>Reason</th>
                                            <th>Amount</th>
                                            <th>Amount After</th>
                                            <th>Date & Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $trans)
                                        <tr>
                                            <td>{{ $trans->id }}</td>
                                            <td>{{ $trans->transaction_id }}</td>
                                            <td>{{ $trans->reason }}</td>
                                            <td>{{ $trans->inout == 0 ? '-' : '' }} ${{ $trans->amount }}</td>
                                            <td>${{ $trans->after_amount }}</td>
                                            <td>{{ \Carbon\Carbon::parse($trans->created_at)->format('M j, Y, g:i a') }}</td>
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