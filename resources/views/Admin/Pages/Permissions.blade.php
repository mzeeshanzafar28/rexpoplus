@extends('Admin.Layout.AdminLayout')
@section('title', 'Manage Permissions')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Manage Permissions</h4>
                        </div>
                    </div>
                </div>
                @if (Session::has('success'))
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
                                <h4 class="card-title mb-0 flex-grow-1">Manage Permissions for {{ $role->name }}</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ URL::to('admin/save-permissions') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="role_id" value="{{ isset($role) ? $role->id : '' }}"
                                        id="role-id">
                                <input type="hidden" id="permissions" name="permissions" value="{{ isset($permissions) ? $permissions : '' }}">

                                    <div class="row">
                                        @foreach ($tabs as $tab)
                                            <div class="col-4">
                                                <div class="card border-info">
                                                    <div class="card-header bg-primary">
                                                        <div class="">
                                                            <input type="checkbox" style="zoom: 1.5; margin:0px;"
                                                                class=" mr-1" name="checked_tabs[]"
                                                                id="{{ $tab->tab_link }}" value="{{ $tab->tab_link }}" />
                                                            <label class=""
                                                                style="margin: 0px; margin-bottom:2px;"
                                                                for="{{ $tab->tab_link }}">
                                                                <h5 class="text-white">Allow
                                                                    {{ $tab->tab_name }}</h5>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class=" mb-3">
                                                                    <input type="checkbox" class=""
                                                                        name="checked_permissions[{{ $tab->tab_link . '-add' }}]"
                                                                        style="zoom: 1.5; margin:0px;"
                                                                        id="{{ $tab->tab_link . '-add' }}">
                                                                    <label class=""
                                                                        style="margin: 0px"
                                                                        for="{{ $tab->tab_link . '-add' }}">Add</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class=" mb-3">
                                                                    <input type="checkbox" class=""
                                                                        name="checked_permissions[{{ $tab->tab_link . '-update' }}]"
                                                                        style="zoom: 1.5; margin:0px;"
                                                                        id="{{ $tab->tab_link . '-update' }}">
                                                                    <label class=""
                                                                        style="margin: 0px"
                                                                        for="{{ $tab->tab_link . '-update' }}">Update</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class=" mb-3">
                                                                    <input type="checkbox" class=""
                                                                        name="checked_permissions[{{ $tab->tab_link . '-delete' }}]"
                                                                        style="zoom: 1.5; margin:0px;"
                                                                        id="{{ $tab->tab_link . '-delete' }}">
                                                                    <label class=""
                                                                        style="margin: 0px"
                                                                        for="{{ $tab->tab_link . '-delete' }}">Delete</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary ">Save Permissions</button>
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
    $(document).ready(function(){
        const permissions = $('#permissions').val();
        let perms = JSON.parse(permissions);
        console.log(perms);
        for(let perm in perms){
            document.getElementById(perms[perm].tab_link).checked =true;
            if(perms[perm].can_create == 1){
                document.getElementById(perms[perm].tab_link+'-add').checked =true;
            }
            if(perms[perm].can_update == 1){
                document.getElementById(perms[perm].tab_link+'-update').checked =true;
            }
            if(perms[perm].can_delete == 1){
                document.getElementById(perms[perm].tab_link+'-delete').checked =true;
            }
        }
    })
</script>
@endsection
