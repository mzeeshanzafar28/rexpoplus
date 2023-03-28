@extends('Admin.Layout.AdminLayout')
@section('title', 'All Deposits')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Deposits</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">All Deposits</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Payment ID</th>
                                            <th>Type</th>
                                            <th>Payment Amount</th>
                                            <th>Tax Amount</th>
                                            <th>Amount</th>
                                            <th>Coin</th>
                                            <th>Pay Amount</th>
                                            <th>Status</th>
                                            <th>Date & Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposits as $deposit)
                                        <tr>
                                            <td>{{ $deposit->id }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$deposit->user->id)}}">{{ $deposit->user->name }}</a></td>
                                            <td>{{ $deposit->payment_id }}</td>
                                            <td>{{ $deposit->type }}</td>
                                            <td>${{ round($deposit->payment_amount, 4) }}</td>
                                            <td>${{ round($deposit->tax_amount, 4) }}</td>
                                            <td>${{ round($deposit->amount, 4) }}</td>
                                            <td>{{ $deposit->coin }}</td>
                                            <td>${{ round($deposit->pay_amount, 4) . $deposit->coin }}</td>
                                            <td>
                                                @if($deposit->type == "Doshthru")
                                                <span class="badge bg-{{ $deposit->status == 1 ? 'success' : 'danger' }}">{{ $deposit->status == 1 ? 'Completed' : 'Pending' }}</span>
                                                @else
                                                <span class="badge bg-warning">{{ $deposit->status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('M j, Y, g:i a') }}</td>
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