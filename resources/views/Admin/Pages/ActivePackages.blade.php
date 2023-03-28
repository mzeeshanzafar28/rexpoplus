@extends('Admin.Layout.AdminLayout')
@section('title', 'All Active Packages')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Active Packages</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">All Active Packages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            <th>Update After</th>
                                            <th>Last Updated</th>
                                            <th>Profit</th>
                                            <th>Started On</th>
                                            <th>Expires On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($active as $package)
                                        <tr>
                                            <td>{{ $package->id }}</td>
                                            <td><a href="{{URL::to('admin/users/profile/'.$package->user->id)}}">{{ $package->user->name }}</a></td>
                                            <td>{{ $package->package->name }}</td>
                                            <td>${{ $package->amount }}</td>
                                            <td>{{ $package->give_after }}
                                            @if($package->give_after == 1)
                                            Minute
                                            @elseif($package->give_after == 24)
                                            Hours
                                            @else
                                            Days
                                            @endif
                                            </td>
                                            <td>
                                                @if ($package->package->update_after == 1)
                                                {{ $package->last_updated }} Minute(s)
                                                @elseif($package->package->update_after == 24)
                                                {{ $package->last_updated }} Day(s)
                                                @elseif($package->package->update_after == 7)
                                                {{ round($package->last_updated / $package->give_after) }} Week(s)
                                                @elseif($package->package->update_after == 30)
                                                {{ round($package->last_updated / $package->give_after) }} Month(s)
                                                @elseif($package->package->update_after == 90)
                                                {{ round($package->last_updated / $package->give_after) }} Quarter Year(s)
                                                @endif 
                                                Passed
                                            </td>
                                            <td>
                                                @if ($package->package->type == 'Time')
                                                    @if ($package->give_after == 1 || $package->give_after == 24)
                                                        ${{ round($package->to_give * $package->last_updated, 4) }}
                                                    @else
                                                        ${{ round($package->to_give * ($package->last_updated / $package->give_after), 4) }}
                                                    @endif
                                                </span><span>Profit</span>
                                                @else
                                                ${{ $package->given }}
                                                    </span><span>/ ${{ $package->total_return }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $package->created_at }}</td>
                                            <td>{{ $package->expires_on }}</td>
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