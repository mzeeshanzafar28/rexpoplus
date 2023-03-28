@extends('Admin.Layout.AdminLayout')
@section('title', 'Users List')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Users</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1"><i data-feather="users"></i> All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Total Invites</th>
                                            <th>Level 1</th>
                                            <th>Level 2</th>
                                            <th>Level 3</th>
                                            <th>Joining Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$user->id)}}">{{ $user->name }}</a></td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $levels[$user->id]['total'] }}</td>
                                            <td>{{ $levels[$user->id]['level1'] }}</td>
                                            <td>{{ $levels[$user->id]['level2'] }}</td>
                                            <td>{{ $levels[$user->id]['level3'] }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->created_at)->format('M j, Y, g:i a') }}</td>
                                            <td>
                                                <a href="{{ URL::to('admin/users/profile/' . $user->id) }}" type="button" class="btn btn-sm btn-light">View Profile</a>
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
    })
</script>
@endsection