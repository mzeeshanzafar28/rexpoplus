@extends('Admin.Layout.AdminLayout')
@section('title', 'Team Management')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Team Management</h4>
                        @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_add == 1))
                            <a href="add-team-member" class="btn btn-primary"><span data-feather="plus"></span> Add Team Member</a>
                        @endif
                    </div>

                </div>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible shadow fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1"><i data-feather="users"></i> All Team Members</h4>
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
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ $team->id }}</td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->email }}</td>
                                            <td>{{ $team->phone }}</td>
                                            <td>{{$team->role ? $team->role->name : ''}}</td>
                                            <td>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{ URL::to('admin/teams/edit/' . $team->id) }}" type="button" class="btn btn-sm btn-success">Edit</a>
                                                @endif
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_delete == 1))
                                                <a href="{{ URL::to('admin/teams/delete/' . $team->id) }}" type="button" class="btn btn-sm btn-danger">Delete</a>
                                                    
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