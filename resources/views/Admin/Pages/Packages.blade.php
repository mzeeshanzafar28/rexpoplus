@extends('Admin.Layout.AdminLayout')
@section('title', 'All Packages')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Packages</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">All Packages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Updates In</th>
                                            <th>Multiplier</th>
                                            <th>Min Amount</th>
                                            <th>Max Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->id }}</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->type }}</td>
                                            <td>
                                                {{ $package->update_after }}
                                                @if($package->update_after == 1)
                                                Minute
                                                @elseif ($package->update_after == 24)
                                                Hours
                                                @else
                                                Days
                                                @endif
                                            </td>
                                            <td>{{ $package->multiplier ? $package->multiplier . "x" : null }}</td>
                                            <td>${{ round($package->min_amount, 4) }}</td>
                                            <td>${{ round($package->max_amount, 4) }}</td>
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