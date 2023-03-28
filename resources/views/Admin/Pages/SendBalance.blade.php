@extends('Admin.Layout.AdminLayout')
@section('title', 'Send Balance')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Send Balance</h4>
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
                 @if ($errors->any())
                 <div class="alert alert-danger" role="alert">
                     <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                     @endforeach
                     </ul>
                     </div>
                 @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 flex-grow-1">Send Balance to Users</h4>
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
                                            <th>Current Balance</th>
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
                                            <td>${{ $user->account_balance }}</td>
                                            <td>
                                                @if (auth()->user()->user_role == 0 || (isset($perm) && $perm->can_create == 1))
                                                    <a onclick="sendBalance({{json_encode($user)}})" type="button" class="btn btn-sm btn-success">Send Balance</a>
                                                @endif
                                                <a href="{{ URL::to('admin/transactions/' . $user->id) }}" type="button" class="btn btn-sm btn-light">View Transactions</a>
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

<!-- Grids in modals -->
    <div class="modal fade" id="sendBalanceModal" tabindex="-1" aria-labelledby="sendBalanceModalLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendBalanceModalLabel">Send Balance to <span id="user-name"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{URL::to('/admin/send-balance')}}" id="sendBalanceForm" method="POST">
                        @csrf
                        <input type="hidden" name="user" id="user-id">
                        <div class="row g-3">
                            <div class="col-xxl-12">
                                <div>
                                    <label for="balance" class="form-label">Enter Balance</label>
                                    <input type="text" class="form-control" id="balance" name="balance" placeholder="Enter balance">
                                </div>
                                @error('balance')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div><!--end col-->
                             <div class="col-xxl-12">
                                <div>
                                    <label for="password" class="form-label">Enter Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                     @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" id="btnSendBalance" class="btn btn-primary">Send</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    <!--@if (count($errors) > 0)-->
    <!--<script type="text/javascript">-->
    <!--    $('#sendBalanceModal').modal('show');-->
    <!--</script>-->
    <!--@endif-->
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

    <script>
        function sendBalance(user) {
            $('#user-name').text(user.name);
            $('#user-id').val(user.id);
            $('#sendBalanceModal').modal('show');
        }
        $("#btnSendBalance").click(function(e){
            e.preventDefault();
            $("#btnSendBalance").text('Please wait...');
            $("#btnSendBalance").attr('disabled', 'true');
            $("#sendBalanceForm").submit();
        });
    </script>
@endsection