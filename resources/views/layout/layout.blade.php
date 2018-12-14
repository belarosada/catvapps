<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Datasheet CATV Apps</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css-->
    <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- sweetalert2 Css-->
    <link href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets/css/themes/all-themes.css')}}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/datatables/datatables.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('assets/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrator</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="{{ route('index') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">storage</i>
                            <span>Master Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{ url('masterdata/catv_channel') }}">CATV Channel </a></li>
                            <li><a href="{{ url('masterdata/program') }}">Program TV </a></li>
                            <li><a href="{{ url('masterdata/lokasi_area') }}">Lokasi Area </a></li>
                            <li><a href="{{ url('masterdata/box') }}">Box </a></li>
                            <li><a href="{{ url('masterdata/material') }}">Material </a></li>
                            <li><a href="{{ url('masterdata/jenis_material') }}">Jenis Material </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>DataSheet HeadEnd</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{ url('transaksi/catv_headend/test_result') }}">Main Splitter (A)</a></li>
                            <li><a href="{{ url('transaksi/catv_headend/falcom_tx') }}">Falcom TX (B)</a></li>
                            <li><a href="{{ url('transaksi/catv_headend/foxcom_tx') }}">Foxcom TX (C)</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ url('transaksi/catv_field/field') }}" class="toggled waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>Field</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ url('transaksi/gmaps') }}" class="toggled waves-effect waves-block">
                            <i class="material-icons">place</i>
                            <span>Maps</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">All rights reserved</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix ">
                    <ol class="breadcrumb breadcrumb-bg-cyan ">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('title')</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('link1')</a></li>
                        <li class="active">@yield('link2')</li>
                    </ol>
                    {{-- <div class="col-xs-12 col-sm-6">
                        <h2>@yield('title')</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('link1')</a></li>
                            <li class="breadcrumb-item active">@yield('link2')</li>
                        </ol>
                    </div> --}}
                </div>
            </div>

            <!-- Content -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>@yield('link3')</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div>
                                        <span class="m-r-10 font-12">@yield('link4')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('assets/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('assets/plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('assets/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets/js/admin.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('assets/js/demo.js')}}"></script>

<!-- dataTable -->
<script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/datatables.js')}}"></script>

<!-- Sweetalert -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>

<!-- Gmaps -->
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH9jhowu7WmOVsJ_naXXUDjjThv9tIJec"></script> --}}
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyCH9jhowu7WmOVsJ_naXXUDjjThv9tIJec"></script>
<script type="text/javascript" src="{{asset('assets/plugins/maplacejs/maplace.js')}}"></script>

@include('sweetalert::alert')
@stack('scripts')
</body>

</html>
