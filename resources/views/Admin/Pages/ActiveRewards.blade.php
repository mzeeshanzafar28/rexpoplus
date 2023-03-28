@extends('Admin.Layout.AdminLayout')
@section('title', 'All Active Rewards')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Active Rewards</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">All Active Rewards</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Reward</th>
                                            <th>Username</th>
                                            <th>Started Date</th>
                                            <th>Expiry Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($active as $reward)
                                        <tr>
                                            <td>{{ $reward->id }}</td>
                                            <td>{{ $reward->reward->reward }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$reward->user->id)}}">{{ $reward->user->name }}</a></td>
                                            <td>{{ $reward->created_at }} Days</td>
                                            <td>{{ $reward->expiry_date }} Days</td>
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
        $("#userTable").DataTable();
    })
</script>
@endsection