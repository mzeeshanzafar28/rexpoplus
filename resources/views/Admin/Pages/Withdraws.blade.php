@extends('Admin.Layout.AdminLayout')
@section('title', 'Pending Withdraw List')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Pending Withdraw Requests</h4>
                        <div>
                            <a href="{{URL::to('admin/withdraws/approved')}}" class="btn btn-success m-1">Approved Withdraws</a>
                            <a href="{{URL::to('admin/withdraws/rejected')}}" class="btn btn-danger m-1">Rejected Withdraws</a>
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
                            <h4 class="card-title mb-0 flex-grow-1">Pending Withdraw Requests</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Withdraw To</th>
                                            <th>Account Deatils</th>
                                            <th>Amount</th>
                                            <th>Withdraw As</th>
                                            <th>Status</th>
                                            <th>Date & Time</th>
                                            <th>Actions</th>
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
                                                    <span><strong>IBAN: </strong>{{$with->user->bank->iban}} &emsp; <button class="btn btn-success btnCopy" style="padding: 2px 6px;font-size: 11px;" data-copy="{{ $with->user->bank->iban }}">Copy</button></span>
                                                  
                                                @elseif ($with->withdraw_to == 'MartinPay')
                                                    <span><strong>Account Name: </strong> {{$with->user->bank->martinpay_name}}</span> <br>
                                                    <span><strong>Account Email: </strong>{{$with->user->bank->martinpay_email}}</span><br>
                                                    <span><strong>Payment Id: </strong>{{$with->user->bank->payment_id}} &emsp; <button class="btn btn-success btnCopy" style="padding: 2px 6px;font-size: 11px;" data-copy="{{ $with->user->bank->payment_id }}">Copy</button></span>
                                                
                                                @elseif ($with->withdraw_to == 'Binance')
                                                    <span><strong>Account Name: </strong> {{$with->user->bank->binance_name}}</span> <br>
                                                    <span><strong>Account Email: </strong>{{$with->user->bank->binance_email}}</span><br>
                                                    <span><strong>Wallet Address: </strong>{{$with->user->bank->wallet_address}} &emsp; <button class="btn btn-success btnCopy" style="padding: 2px 6px;font-size: 11px;" data-copy="{{ $with->user->bank->wallet_address }}">Copy</button></span>
                                                @endif
                                            </td>
                                            
                                            
                                            <td>${{ $with->amount }}</td>
                                            <td>{{ $with->withdraw_as ?? 'Dollars' }}</td>
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
                                            <td>{{ \Carbon\Carbon::parse($with->created_at)->format('M j, Y, g:i a') }}</td>
                                            <td>
                                                @if($with->status == 0)
                                                    @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                        <a onclick="openApproveModal({{$with->id}})" class="btn btn-sm btn-success">Approve</a>
                                                        <a onclick="openRejectModal({{$with->id}})" class="btn btn-sm btn-danger">Reject</a>
                                                    @endif
                                                @endif
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
        $("#userTable").DataTable({
            "order": [
                [0, "desc"]
            ]
        });
        @if (count($errors) > 0)
            @if ($errors->has('transaction_id')) 
                $('#withdrawApproveModal').modal('show');
            
            @elseif ($errors->has('reject_reason')) 
                $('#withdrawRejectModal').modal('show');
            @else
            @endif
        @endif
    });

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