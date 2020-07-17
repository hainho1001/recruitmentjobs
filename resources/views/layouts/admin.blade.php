<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="{{asset('admin_asset/css/styles.css')}}" rel="stylesheet" />
        <link href="{{ asset('client/css/main.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin_asset/css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
        <script src="{{asset('admin_asset/js/fontawesome.min.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div class="navbar-brand">ADMIN</div><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-item">{{ Auth::user()->name }}</div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            @include('admin.sidebar')
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
        
    </body>
    <script src="{{asset('admin_asset/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/scripts.js')}}"></script>
    @yield('script')
    
</html>


