@php
use App\Models\User;
@endphp
@extends('Admin.Layout.AdminLayout')
@section('title', $user->name . ' Profile')
@section('style')
<style>
    /*----------------genealogy-scroll----------*/
    .genealogy-scroll::-webkit-scrollbar {
        width: 5px;
        height: 8px;
    }
    .genealogy-scroll::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #e4e4e4;
    }
    .genealogy-scroll::-webkit-scrollbar-thumb {
        background: #212121;
        border-radius: 10px;
        transition: 0.5s;
    }
    .genealogy-scroll::-webkit-scrollbar-thumb:hover {
        background: #871A8F;
        transition: 0.5s;
    }


    /*----------------genealogy-tree----------*/
    .genealogy-body{
        white-space: nowrap;
        overflow-y: hidden;
        padding: 50px;
        min-height: 500px;
        padding-top: 10px;
        text-align: center;
    }
    .genealogy-tree{
    display: inline-block;
    }
    .genealogy-tree ul {
        padding-top: 20px; 
        position: relative;
        padding-left: 0px;
        display: flex;
        justify-content: center;
    }
    .genealogy-tree li {
        float: left; text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
    }
    .genealogy-tree li::before, .genealogy-tree li::after{
        content: '';
        position: absolute; 
    top: 0; 
    right: 50%;
        border-top: 2px solid #ccc;
        width: 50%; 
    height: 18px;
    }
    .genealogy-tree li::after{
        right: auto; left: 50%;
        border-left: 2px solid #ccc;
    }
    .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
        display: none;
    }
    .genealogy-tree li:only-child{ 
        padding-top: 0;
    }
    .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
        border: 0 none;
    }
    .genealogy-tree li:last-child::before{
        border-right: 2px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }
    .genealogy-tree li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }
    .genealogy-tree ul ul::before{
        content: '';
        position: absolute; top: 0; left: 50%;
        border-left: 2px solid #ccc;
        width: 0; height: 20px;
    }
    .genealogy-tree li a{
        text-decoration: none;
        color: #666;
        /* font-family: arial, verdana, tahoma; */
        font-size: 11px;
        display: inline-block;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }

    .genealogy-tree li a:hover+ul li::after, 
    .genealogy-tree li a:hover+ul li::before, 
    .genealogy-tree li a:hover+ul::before, 
    .genealogy-tree li a:hover+ul ul::before{
        border-color:  #871A8F;
    }

    /*--------------memeber-card-design----------*/
    .member-view-box{
        padding:0px 20px;
        text-align: center;
        border-radius: 4px;
        position: relative;
    }
    .member-image{
        width: 60px;
        position: relative;
    }
    .member-image img{
        width: 60px;
        height: 60px;
        border-radius: 30px;
        z-index: 1;
    }
    .member-details{
        margin-top: 5px;
    }
    .member-details h3{
        font-weight: bold;
    }
</style>
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ $user->name }} Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ URL::to('admin/users') }}">Users</a></li>
                                <li class="breadcrumb-item active">{{ $user->name }} Profile</li>
                            </ol>
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

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Info</h5>
                            <img src="{{ asset('uploads/' . $user->profile_pic) }}" style="height: 100px;width: 100px;border-radius: 50px;margin-left: 130px" alt="">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="ps-0" scope="row">Full Name</th>
                                            <td class="text-muted">{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Mobile</th>
                                            <td class="text-muted">{{ $user->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">E-mail</th>
                                            <td class="text-muted">{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Total Invites</th>
                                            <td class="text-muted">{{ $totalInvites }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Joining Date</th>
                                            <td class="text-muted">{{ \Carbon\Carbon::parse($user->created_at)->format('M j, Y, g:i a') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Bank Details</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="ps-0" scope="row">Bank Name</th>
                                            <td class="text-muted">{{ isset($bank->bank_name) ? $bank->bank_name : 'Not Set' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Account Name</th>
                                            <td class="text-muted">{{ isset($bank->account_name) ? $bank->account_name : 'Not Set' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">IBAN</th>
                                            <td class="text-muted">{{ isset($bank->iban) ? $bank->iban : 'Not Set' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Deposits</h5>
                                </div>
                                
                            </div>
                            <div>
                                @foreach ($deposits as $deposit)
                                <div class="d-flex align-items-center py-3">
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-14 mb-1">${{ round($deposit->amount, 4) }}</h5>
                                            <p class="fs-13 text-muted mb-0">{{ $deposit->type }}</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        @if($deposit->type == "Doshthru")
                                        <span class="text-{{ $deposit->status == 1 ? 'success' : 'danger' }}">{{ $deposit->status == 1 ? 'Completed' : 'Pending' }}</span>
                                        @else
                                        <span class="">{{ $deposit->status }}</span>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div><!-- end card body -->
                    </div>
                    <!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Withdraw</h5>
                                </div>
                                
                            </div>
                            <div>
                                @foreach ($withdraws as $withdraw)
                                <div class="d-flex align-items-center py-3">
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-14 mb-1">${{ round($withdraw->amount, 4) }}</h5>
                                            <p class="fs-13 text-muted mb-0">{{ $withdraw->created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        @if($withdraw->status == 0)
                                        <a href="{{ URL::to('admin/withdraw/approve/' . $withdraw->id) }}" class="btn btn-sm btn-success">Approve</a>
                                        <a href="{{ URL::to('admin/withdraw/reject/' . $withdraw->id) }}" class="btn btn-sm btn-danger">Reject</a>
                                        @else
                                            @if($withdraw->status == 1)
                                            <span class="text-success">Completed</span>
                                            @else
                                            <span class="text-danger">Rejected</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div><!-- end card body -->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="body genealogy-body genealogy-scroll">
                                <div class="genealogy-tree">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="{{ asset('uploads/'. $user->profile_pic) }}" alt="Member">
                                                        <div class="member-details">
                                                            <p>{{ $user->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @php
                                                $level1Users = User::where('parent_id', $user->id)->get();
                                            @endphp
                                            <ul @if(count($level1Users) > 0) class="active" @endif>
                                                @foreach ($level1Users as $level1user)
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="{{ asset('uploads/'. $level1user->profile_pic) }}" alt="Member">
                                                                <div class="member-details">
                                                                    <p>{{ $level1user->name }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @php
                                                        $level2Users = User::where('parent_id', $level1user->id)->get();
                                                    @endphp
                                                    <ul @if(count($level2Users) > 0 ) class="active" @endif>
                                                        @foreach($level2Users as $level2user)
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image">
                                                                        <img src="{{ asset('uploads/'. $level2user->profile_pic) }}" alt="Member">
                                                                        <div class="member-details">
                                                                            <p>{{ $level2user->name }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            @php
                                                                $level3Users = User::where('parent_id', $level2user->id)->get();
                                                            @endphp
                                                            <ul @if(count($level3Users) > 0) class="active" @endif>
                                                                @foreach($level3Users as $level3user)
                                                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image">
                                                                                <img src="{{ asset('uploads/' . $level3user->profile_pic) }}" alt="Member">
                                                                                <div class="member-details">
                                                                                    <p>{{ $level3user->name }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        <!--end card-body-->
                    </div><!-- end card -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0  me-2">Recent Transactions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="today" role="tabpanel">
                                            <div class="profile-timeline">
                                                <div class="accordion accordion-flush" id="todayExample">
                                                    @foreach ($transactions as $transaction)
                                                    <div class="accordion-item border-0">
                                                        <div class="accordion-header" id="headingThree">
                                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapsethree" aria-expanded="false">
                                                                <div class="d-flex">
                                                                    @php
                                                                        $class = $transaction->inout == 1 ? 'success' : 'danger';
                                                                    @endphp
                                                                    <div class="flex-shrink-0">
                                                                        <i data-feather="{{ $transaction->inout == 1 ? 'plus' : 'minus' }}-circle" class="avatar-xs rounded-circle shadow text-{{ $class }}"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <h6 class="fs-14 mb-1 text-{{ $class }}"> {{ $transaction->inout == 0 ? '-' : '' }} ${{ $transaction->amount }}</h6>
                                                                        <small class="text-muted mb-2">{{ $transaction->reason }}</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!--end accordion-->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!--end col-->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
@endsection
@section('script')
<script>
    $(function () {
        $('.genealogy-tree ul').hide();
        $('.genealogy-tree>ul').show();
        $('.genealogy-tree ul.active').show();
        $('.genealogy-tree li').on('click', function (e) {
            var children = $(this).find('> ul');
            if (children.is(":visible")) children.hide('fast').removeClass('active');
            else children.show('fast').addClass('active');
            e.stopPropagation();
        });
        $("#btnCopy").click(function(){
            const toCopy = $("#referLink").html();
            navigator.clipboard.writeText(toCopy);
            notyf.success('Invitation link copied!');
        });
    });
</script>
@endsection