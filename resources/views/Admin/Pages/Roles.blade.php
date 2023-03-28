@extends('Admin.Layout.AdminLayout')
@section('title', 'Roles')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Roles</h4>
                    </div>
                </div>
            </div>
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
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1"><span id="isUpdating">Create</span>  Role</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ URL::to('admin/save-roles') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" id="role-id">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Role Name</label>
                                            <input type="text" id="role-name" name="name" value="" class="form-control">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 mt-4">
                                        @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_add == 1))
                                            <button class="btn btn-primary">Save Role</button>
                                        @endif
                                        <button class="btn btn-secondary" type="button" onclick="cancelEdit()" id="cancelBtn" style="display: none">Cancel Edit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1"><i data-feather="clipboard"></i> All Roles</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="roleTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Role Name</th>
                                            <th></th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                    <a href="{{URL::to('admin/manage-permissions/' . $role->id)}}" class="btn btn-warning">Manage Permissions</a>
                                                    
                                                @endif
                                                </td>
                                            <td>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_update == 1))
                                                <a type="button" onclick="editRole({{json_encode($role)}})" class="btn btn-sm btn-success btn">Edit</a>
                                                    
                                                @endif
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_delete == 1))
                                                <a href="{{ URL::to('admin/delete-role/' . $role->id) }}" type="button" class="btn btn-sm btn-danger btn">Delete</a>
                                                    
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
        $("#roleTable").DataTable({
            "order": [
                [0, "desc"]
            ]
        });
    })

    function editRole(role) {
        $('#isUpdating').text('Update')
        $('#role-id').val(role.id);
        $('#role-name').val(role.name);
        $('#cancelBtn').show();
    }

    function cancelEdit() {
        $('#isUpdating').text('Create')
        $('#role-id').val('');
        $('#role-name').val('');
        $('#cancelBtn').hide();

    }
</script>
@endsection