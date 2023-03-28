@extends('Admin.Layout.AdminLayout')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Welcome Back, {{ Auth::user()->name }}!</h4>
                                        <p class="text-muted mb-0">Here's what's happening.</p>
                                    </div>
                                    
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Users</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $total_users }}">0</span></h4>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{ URL::to('admin/users') }}" class="text-decoration-underline">View all users</a>
                                                @endif
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success rounded fs-3">
                                                    <i data-feather="users"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Active Packages</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $total_active_packages }}">0</span></h4>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{ URL::to('admin/active-packages') }}" class="text-decoration-underline">View all active package</a>
                                                    
                                                @endif
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info rounded fs-3">
                                                    <i data-feather="package"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">All Active Rewards</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $total_active_rewards }}">0</span></h4>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{ URL::to('admin/active-rewards') }}" class="text-decoration-underline">View all active rewards</a>
                                                @endif
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning rounded fs-3">
                                                    <i data-feather="gift"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Current Investment</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="{{ $total_invested }}">0</span></h4>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{ URL::to('admin/account-balances') }}" class="text-decoration-underline">View account balances</a>
                                                @endif
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-danger rounded fs-3">
                                                    <i data-feather="dollar-sign"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div> <!-- end row-->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Withdraws</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-striped table-nowrap align-middle mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($withs as $with)
                                                    <tr>
                                                        <td>{{ $with->id }}</td>
                                                        <td>
                                                            <a href="{{URL::to('admin/users/profile/'.$with->user->id)}}">{{ $with->user->name }}</a>
                                                            
                                                        </td>
                                                        <td>${{ $with->amount }}</td>
                                                        <td>
                                                            @if($with->status == 0)
                                                            <span class="badge bg-warning">Pending</span>
                                                            @else
                                                                @if($with->status == 1)
                                                                <span class="badge bg-success">Completed</span>
                                                                @else
                                                                <span class="badge bg-danger">Rejected</span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#detailsModal-{{ $with->id }}">Details</button>
                                                            @if($with->status == 0)
                                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                                    <a onclick="openApproveModal({{$with->id}})" class="btn btn-sm btn-success">Approve</a>
                                                                    <a onclick="openRejectModal({{$with->id}})" class="btn btn-sm btn-danger">Reject</a>
                                                                @endif
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="detailsModal-{{ $with->id }}" tabindex="-1" aria-labelledby="detailsModal-{{ $with->id }}Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="detailsModal-{{ $with->id }}Label">Withdraw Details {{ $with->user->name }}</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @if($with->withdraw_to == "Bank")
                                                                <div>
                                                                    <p><strong>Account Name</strong></p>
                                                                    <p>{{ $with->user->bank->account_name }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>Bank Name</strong></p>
                                                                    <p>{{ $with->user->bank->bank_name }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>IBAN</strong></p>
                                                                    <p>{{ $with->user->bank->iban }} &emsp; <button class="btn btn-success btnCopy" data-copy="{{ $with->user->bank->iban }}">Copy</button></p>
                                                                </div>
                                                                @elseif($with->withdraw_to == "MartinPay")
                                                                <div>
                                                                    <p><strong>Account Name</strong></p>
                                                                    <p>{{ $with->user->bank->martinpay_name }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>Account Email</strong></p>
                                                                    <p>{{ $with->user->bank->martinpay_email }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>MartinPay Payment ID</strong></p>
                                                                    <p>{{ $with->user->bank->payment_id }} &emsp; <button class="btn btn-success btnCopy" data-copy="{{ $with->user->bank->payment_id }}">Copy</button></p>
                                                                </div>
                                                                @elseif($with->withdraw_to == "Binance")
                                                                <div>
                                                                    <p><strong>Account Name</strong></p>
                                                                    <p>{{ $with->user->bank->binance_name }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>Account Email</strong></p>
                                                                    <p>{{ $with->user->bank->binance_email }}</p>
                                                                </div>
                                                                <div>
                                                                    <p><strong>Binance Wallet Address</strong></p>
                                                                    <p>{{ $with->user->bank->wallet_address }} &emsp; <button class="btn btn-success btnCopy" data-copy="{{ $with->user->bank->wallet_address }}">Copy</button></p>
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="modal-footer">
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Transactions</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Reason</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $trans)
                                                    <tr>
                                                        <td>{{ $trans->id }}</td>
                                                        <td><a href="{{URL::to('admin/users/profile/'.$trans->user->id)}}">{{ $trans->user->name }}</a></td>
                                                        <td>{{ $trans->reason }}</td>
                                                        <td>{{ $trans->inout == 0 ? '-' : '' }} ${{ $trans->amount }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div>
                            
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Active Rewards</h4>
                                        
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Reward</th>
                                                    <th>Username</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($active_rewards as $reward)
                                                <tr>
                                                    <td>{{ $reward->id }}</td>
                                                    <td>{{ $reward->reward->reward }}</td>
                                                    <td><a href="{{URL::to('admin/users/profile/'.$reward->user->id)}}">{{ $reward->user->name }}</a></td>
                                                    <td>
                                                        <span class="badge bg-{{ $reward->is_completed == 1 ? 'success' : 'warning' }}">
                                                        {{ $reward->is_completed == 1 ? 'Completed' : 'In Process' }}
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->

                             <!-- .col-->
                            <div class="col-xl-12">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Active Packages</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Package</th>
                                                        <th>Amount</th>
                                                        <th>Started On</th>
                                                        <th>Expires On</th>
                                                        <th>Remaining</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($active as $package)
                                                    <tr>
                                                        <td>{{ $package->id }}</td>
                                                        <td><a href="{{URL::to('admin/users/profile/'.$package->user->id)}}">{{ $package->user->name }}</a></td>
                                                        <td>{{ $package->package->name }}</td>
                                                        <td>${{ $package->amount }}</td>
                                                        <td>{{ $package->created_at }}</td>
                                                        <td>{{ $package->expires_on }}</td>
                                                        <td>${{ round($package->remaining, 4) }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- .card-body-->
                                </div> <!-- .card-->
                            </div> 
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Rexpoplus.
                </div>
            </div>
        </div>
    </footer>
</div>
<!--Start::Approve Modal-->
<div class="modal fade" id="withdrawApproveModal" tabindex="-1" aria-labelledby="withdrawApproveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="withdrawApproveModalLabel">Approving Withdraw</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ URL::to('admin/withdraw/approve') }}" id="approveForm" method="POST">
                @csrf
                <input type="hidden" name="id" id="with-id" value="{{old('id') ?? ''}}">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="resaon">Please Enter Transaction Id</label>
                            <input class="form-control" type="text" name="transaction_id" id="reason" placeholder="Enter Transaction Id" >
                            @error('transaction_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary m-1" id="btnApprove">Approve Withdraw</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
<!--Ens::Approve Modal-->

<!--Start::Reject Modal-->
<div class="modal fade" id="withdrawRejectModal" tabindex="-1" aria-labelledby="withdrawRejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="withdrawRejectModalLabel">Rejecting Withdraw</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ URL::to('admin/withdraw/reject') }}" id="rejectForm" method="POST">
                @csrf
                <input type="hidden" name="id" id="withdraw-id" value="{{old('id') ?? ''}}">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="resaon">Please Enter reason of rejection</label>
                            <input class="form-control" type="text" name="reject_reason" id="reason" placeholder="Enter reason" >
                            @error('reject_reason')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary m-1" id="btnReject">Reject Withdraw</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
</div>
<!--Ens::Reject Modal-->
@endsection
@section('script')
    <script>
        $(function(){
            @if (count($errors) > 0)
                @if ($errors->has('transaction_id')) 
                    $('#withdrawApproveModal').modal('show');
                
                @elseif ($errors->has('reject_reason')) 
                    $('#withdrawRejectModal').modal('show');
                @else
                @endif
            @endif
        })

        function openApproveModal(withdraw_id) {
            $('#with-id').val(withdraw_id);
            $('#withdrawApproveModal').modal('show');
        }

        function openRejectModal(withdraw_id) {
            $('#withdraw-id').val(withdraw_id);
            $('#withdrawRejectModal').modal('show');
        }

        $("#btnApprove").click(function(e){
            e.preventDefault();
            
            $("#btnApprove").attr('disabled', true);
            $("#btnApprove").text('Please wait...');
            $("#approveForm").submit();
        });
        
        $("#btnReject").click(function(e){
            e.preventDefault();
            
            $("#btnReject").attr('disabled', true);
            $("#btnReject").text('Please wait...');
            $("#rejectForm").submit();
        });

        $(document).on('click', '.btnCopy', function(e){
            e.preventDefault();
            const self = $(this);
            let toCopy = self.attr('data-copy');
            navigator.clipboard.writeText(toCopy);
            self.text("Copied");
            setTimeout(() => { self.text('Copy') }, 3000);
        });
    </script>
@endsection