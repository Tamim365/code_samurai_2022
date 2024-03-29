<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title> Dashboard</title> --}}
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">
    <!-- Bootstrap CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="{{URL::asset('assets/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    
    @yield('header')
</head>

<body class="adminbody">
    <div id="main">
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span> Admin</span>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->


                            <!-- item-->
                            <a href="" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('auth.logout')}}" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">
            <div class="sidebar-inner leftscroll">
                <div id="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a href="{{ url('/') }}">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/pending') }}">
                                <i class="fas fa-bars"></i>
                                <span> Pending Users </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/active') }}">
                                <i class="fas fa-bars"></i>
                                <span> Active Users </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/proposals') }}">
                                <i class="fas fa-bars"></i>
                                <span> Project Proposals </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/projects') }}">
                                <i class="fas fa-bars"></i>
                                <span> Running Projects </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url('/') }}">
                                <i class="fas fa-bars"></i>
                                <span> Constraints </span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End Sidebar -->

        @yield('content')
        
        <!-- END content-page -->
        
    </div>
    <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/moment.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/detect.js')}}"></script>
    <script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>

    <!-- App js -->
    <script src="{{URL::asset('assets/js/admin.js')}}"></script>
    <!-- END main -->
    @yield('js')
</body>

</html>
