<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Quản lý kho</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
{{--            <div class="sidebar-brand-icon rotate-n-15">--}}
{{--                <i class="fas fa-laugh-wink"></i>--}}
{{--            </div>--}}
            <div class="sidebar-brand-text mx-3">Trang chủ</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
{{--        <li class="nav-item active">--}}
{{--            <a class="nav-link" href="">--}}
{{--                <i class="fas fa-fw fa-tachometer-alt"></i>--}}
{{--                <span>Dashboard</span></a>--}}
{{--        </li>--}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Quản lý
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Sản phẩm</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tuỳ chọn</h6>
                    <a class="collapse-item" href="{{route('product.index')}}">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="{{route('product.create')}}">Thêm sản phẩm</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Thể loại</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tuỳ chọn</h6>
                    <a class="collapse-item" href="{{route('category.index')}}">Danh sách thể loại</a>
                    <a class="collapse-item" href="{{route('category.create')}}">Thêm thể loại</a>
                    {{--                    <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
                    {{--                    <a class="collapse-item" href="utilities-other.html">Other</a>--}}
                </div>
            </div>
        </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Người dùng</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tuỳ chọn</h6>
                        <a class="collapse-item" href="{{route('admin.user.index')}}">Danh sách người dùng</a>
                        <a class="collapse-item" href="{{route('admin.user.create')}}">Thêm người dùng</a>
{{--                        <a class="collapse-item" href="">Forgot Password</a>--}}
{{--                        <div class="collapse-divider"></div>--}}
{{--                        <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                        <a class="collapse-item" href="">404 Page</a>--}}
{{--                        <a class="collapse-item" href="">Blank Page</a>--}}
                    </div>
                </div>
            </li>

        <!-- Divider -->
{{--        <hr class="sidebar-divider">--}}

{{--        <!-- Heading -->--}}
{{--        <div class="sidebar-heading">--}}
{{--            Addons--}}
{{--        </div>--}}

{{--        <!-- Nav Item - Pages Collapse Menu -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"--}}
{{--               aria-expanded="true" aria-controls="collapsePages">--}}
{{--                <i class="fas fa-fw fa-folder"></i>--}}
{{--                <span>Pages</span>--}}
{{--            </a>--}}
{{--            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                    <a class="collapse-item" href="">Login</a>--}}
{{--                    <a class="collapse-item" href="">Register</a>--}}
{{--                    <a class="collapse-item" href="">Forgot Password</a>--}}
{{--                    <div class="collapse-divider"></div>--}}
{{--                    <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                    <a class="collapse-item" href="">404 Page</a>--}}
{{--                    <a class="collapse-item" href="">Blank Page</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Charts -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="charts.html">--}}
{{--                <i class="fas fa-fw fa-chart-area"></i>--}}
{{--                <span>Charts</span></a>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Tables -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="tables.html">--}}
{{--                <i class="fas fa-fw fa-table"></i>--}}
{{--                <span>Tables</span></a>--}}
{{--        </li>--}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <a href="{{route('layouts.home')}}">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </a>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
{{--                <form--}}
{{--                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."--}}
{{--                               aria-label="Search" aria-describedby="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary" type="button">--}}
{{--                                <i class="fas fa-search fa-sm"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <!-- Dropdown - Messages -->
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('storage/' . \Illuminate\Support\Facades\Auth::user()->avatar)}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                                Thông tin--}}
                            {{--                            </a>--}}
                            <a class="dropdown-item"
                               href="{{route('admin.edit', \Illuminate\Support\Facades\Auth::user()->id)}}">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đổi thông tin
                            </a>
                            <a class="dropdown-item" href="{{route('formChangePW')}}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đổi mật khẩu
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('auth.logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Đăng xuất
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
            @yield('content')
            <!-- End of Main Content -->
                <!-- Footer -->
            {{--        <footer class="sticky-footer bg-white">--}}
            {{--            <div class="container my-auto">--}}
            {{--                <div class="copyright text-center my-auto">--}}
            {{--                    <span>Copyright &copy; Your Website 2021</span>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </footer>--}}
            <!-- End of Footer -->
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>
{{--<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>--}}
{{--<script src="{{asset('js/admin/chart-area-demo.js')}}"></script>--}}
{{--<script src="{{asset('js/admin/chart-pie-demo.js')}}}"></script>--}}
<script src="{{asset('js/my.js')}}"></script>
</body>

</html>
