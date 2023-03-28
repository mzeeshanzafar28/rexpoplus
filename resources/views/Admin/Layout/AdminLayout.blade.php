<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Rexpoplus Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('main/assets/images/admin/favicon.png') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('main/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('main/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('main/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('main/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('main/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('main/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('main/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('main/assets/cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{ asset('main/assets/cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('main/assets/cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css') }}">

    @yield('style')

</head>

<body>
    @php
    use App\Models\Tab;
    use App\Models\Permission;

        $tabs = Tab::all();
        $permissions = Permission::with('tab')->where('role_id', auth()->user()->user_role)->get();
    @endphp
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ URL::to('admin/dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('main/assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('main/assets/images/admin/logo.png') }}" alt="" height="17">
                                </span>
                            </a>

                            <a href="{{ URL::to('admin/dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('main/assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('main/assets/images/logo-light.png') }}" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('uploads/' . Auth::user()->profile_pic) }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin/account-settings"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="/admin/logout"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ URL::to('admin/dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('main/assets/images/admin/logo.png') }}" alt="" height="20">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('main/assets/images/admin/logo.png') }}" alt="" height="60">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ URL::to('admin/dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('main/assets/images/admin/logo.png') }}" alt="" height="20">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('main/assets/images/admin/logo.png') }}" alt="" height="60">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    @if (auth()->user()->user_role == 0)
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/dashboard') }}">
                                    <i class="mdi mdi-speedometer"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/users') }}">
                                    <i data-feather="users"></i> <span>Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/send-balance') }}">
                                    <i data-feather="send"></i> <span>Send Balance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/withdraws') }}">
                                    <i data-feather="minus-circle"></i> <span>Withdraws</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/account-balances') }}">
                                    <i data-feather="dollar-sign"></i> <span>Account Balances</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/transactions') }}">
                                    <i data-feather="file-text"></i> <span>Transactions</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/deposits') }}">
                                    <i data-feather="plus-circle"></i> <span>Deposits</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/active-rewards') }}">
                                    <i data-feather="gift"></i> <span>Active Rewards</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/rewards') }}">
                                    <i data-feather="gift"></i> <span>Rewards</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/active-packages') }}">
                                    <i data-feather="package"></i> <span>Active Packages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/packages') }}">
                                    <i data-feather="package"></i> <span>Packages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/roles') }}">
                                    <i data-feather="book"></i> <span>Roles and Permissions</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/team-management') }}">
                                    <i data-feather="user-plus"></i> <span>Team Management</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/system-settings') }}">
                                    <i data-feather="settings"></i> <span>System Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/account-settings') }}">
                                    <i data-feather="settings"></i> <span>Account Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/logout') }}">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                        </ul>
                    @else
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            @foreach ($permissions as $perm)
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="{{ URL::to($perm->tab->tab_link) }}">
                                        <i data-feather="{{$perm->tab->tab_icon}}"></i> <span>{{$perm->tab->tab_name}}</span>
                                    </a>
                                </li>                                
                            @endforeach
                            
                            
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/account-settings') }}">
                                    <i data-feather="settings"></i> <span>Account Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ URL::to('admin/logout') }}">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                        </ul>
                    @endif
                    
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('main/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('main/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('main/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('main/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('main/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('main/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('main/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('main/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('main/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('main/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('main/assets/js/app.js') }}"></script>

    <!--datatable js-->
    <script src="{{ asset('main/assets/cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ asset('main/assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ asset('main/assets/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    @yield('script')
</body>
</html>