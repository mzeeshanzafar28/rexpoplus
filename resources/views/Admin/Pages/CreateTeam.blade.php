@extends('Admin.Layout.AdminLayout')
@section('title', 'Add Team')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Team</h4>
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
                            <h4 class="card-title mb-0 flex-grow-1">Add Team Member</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ URL::to('admin/save-team') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{isset($team) ? $team->id : ''}}" id="">
                                <div class="row">
                                    <div class="col-6 mt-2">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{isset($team) ? $team->name  : ''}}" class="form-control">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{isset($team) ? $team->email  : ''}}" class="form-control">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{isset($team) ? $team->phone  : ''}}" class="form-control">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="form-group">
                                            <label>Role</label>
                                            {{-- <input type="email" name="email" value="" class="form-control"> --}}
                                            <select name="user_role" class="form-control" id="">
                                                <option selected disabled>Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}" {{isset($team) && $team->user_role == $role->id ? 'Selected'  : ''}}>{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('user_role')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" value="" class="form-control">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary">Save Details</button>
                                    </div>
                                </div>
                            </form>
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