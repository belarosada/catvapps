<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/images/favicon-.png')}}">
    <title>Aplikasi Laporan CATV HeadEnd dan Field</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('assets/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{url('assets/css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/css/lib/owl.theme.default.min.cs')}}s" rel="stylesheet" />
    <link href="{{url('assets/css/helper.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <!-- Logo icon -->
                        <b><img src="{{url('assets/images/b.png')}}"  /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{url('assets/images/a.png')}}"  /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0"> </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('assets/images/users/1.png')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Master</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-database "></i><span class="hide-menu">Master Data </span></a>
                            <ul aria-expanded="false" class="collapse">
                                {{-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="index.html">Ecommerce </a></li>
                                        <li><a href="index1.html">Analytics </a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ url('masterdata/catv_channel') }}">CATV Channel </a></li>
                                <li><a href="{{ url('masterdata/program') }}">Program TV </a></li>
                                <li><a href="#">Lokasi Lapangan </a></li>
                                <li><a href="#">Material </a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Transaksi</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-desktop"></i><span class="hide-menu">CATV HEADEND</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah Data</a></li>
                                <li><a href="#">Lihat Data</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map"></i><span class="hide-menu">CATV FIELD</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah Data</a></li>
                                <li><a href="#">Lihat Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <section>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">@yield('title')</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('link1')</a></li>
                        <li class="breadcrumb-item active">@yield('link2')</li>
                    </ol>
                </div>
            </div>
        </section>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->

            <section class="content">
                <div class="container-fluid">
                    <!-- Start Page Content -->

                    <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                        @yield('content')
                    </div>

                    <!-- End PAge Content -->
                </div>
            </section>

            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{url('assets/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('assets/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.j')}}s"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="{{url('assets/js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{url('assets/js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{url('assets/js/lib/morris-chart/dashboard1-init.js')}}"></script>


	<script src="{{url('assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{url('assets/js/lib/calendar-2/semantic.ui.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{url('assets/js/lib/calendar-2/prism.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{url('assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <!-- scripit init-->
    <script src="{{url('assets/js/lib/calendar-2/pignose.init.js')}}"></script>

    <script src="{{url('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{url('assets/js/scripts.js')}}"></script>
    <!-- scripit init-->

    <script src="{{url('assets/js/custom.min.js')}}"></script>

    <!-- dataTable -->
    <script src="{{url('assets/js/lib/datatables/datatables.min.js')}}"></script>
    <script src="{{url('assets/js/lib/datatables/datatables-init.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{url('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

    <!-- Dropzone -->
    <script src="{{url('assets/plugins/dropzone/dropzone.js')}}"></script>

    <!-- Sweetalert -->
    <script src="{{url('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    {{-- <script src="{{url('assets/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
    @include('sweetalert::alert') --}}
    @stack('scripts')
</body>

</html>
