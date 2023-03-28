@extends('Admin.Layout.AdminLayout')
@section('title', 'System Settings')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">System Settings</h4>
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
                            <h4 class="card-title mb-0 flex-grow-1">System Settings</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ URL::to('admin/save-transfer-fee') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{isset($setting) ? $setting->id : ''}}">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Transfer Fee <small>(in %)</small></label>
                                            <input type="number" name="transfer_fee" value="{{isset($setting) ? $setting->transfer_fee : ''}}" class="form-control">
                                            @error('transfer_fee')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary">Save Settings</button>
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