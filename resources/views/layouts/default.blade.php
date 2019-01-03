<<<<<<< HEAD
<?php
$url = request()->path();
$porciones = explode("/", $url );
$ruta = $porciones[0];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="base_url" content="{{ url('/') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo_login.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
        | Api
        @show
    </title>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_client/css/colors/purple.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet">

    <link href="{{ asset('assets_client/css/colors/coin.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets_client/css/coin_style.css') }}" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
</head>


<body class="fix-header fix-sidebar card-no-border logo-center">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @if( $ruta != 'changePassword')

            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                        
                    <div class="">
                        <a class="navbar-brand" href="{{url('/user')}}">
                            <b>
                               
                            </b>
                        </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto mt-md-0">
                                <li class="nav-item hidden-sm-down">
                                    <h4 id="ganado" precio="" class="p-t-10 m-r-20 nav-link  text-info font-bold font-18"></h4>
                                </li>
                                <li class="nav-item hidden-sm-down">
                                    <h4 id="_apagar" precio="" class="p-t-10 m-r-20 nav-link  text-danger font-bold font-18"></h4>
                                </li>
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item dropdown">
                            </li>
                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item hidden-sm-down">
                                <h4 id="_btc_price" class="p-t-10 m-r-20 nav-link  font-bold font-18"></h4>
                            </li>
                            
                            <li style="padding-top:8px">
                                
                                <h6 class="text-right">
                                    <a href="javascript:void(0)" id="_cerrar_session">
                                          
                                            
                                    </a>
                                </h6> 
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/usuario_tope.png') }}" alt="user" class="" height="30" width="30" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user font-14">
                                       
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0)" id="_btn_cerrar_session">
                                             <form id="logout-form" action="url('/logout')" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                            <a href="{{ route('logout') }}">
                                                Cerrar Sesión</a>
                                            </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>

                </nav>     
            </header>
         @endif
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            @if( $ruta != 'changePassword' )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('/index_usuarios')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('/post')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Post</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('busqueda')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Individual</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('mostrar')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Todos</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('paginas')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Paginas</span></a>
                            </li>
                                @if( Auth::user()->tipo == 1)
                                    <li>
                                        <a class="has-arrow waves-effect waves-dark" href="{{url('usuarios')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Usuarios</span></a>
                                    </li>
                                 @endif
                            @endif
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
       
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                @if( $ruta != 'changePassword' )
                    <div class="col-md-5 align-self-center">
                        <h3 id="_url_pagina" class="text-default font-bold">Escritorio</h3>
                    </div>
                    <div class="col-md-7 align-self-center" >
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                             <a href="javascript:void(0)" class="text-warning font-bold">Inicio</a></li>
                            <li class="breadcrumb-item active font-bold" id="_titulo">Escritorio</li>
                        </ol>
                    </div>
                @endif
                <!--<div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>-->

               
           
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @include('layouts.alerts')
            <div class="container-fluid">
                @yield('content')
            </div>

            <div class="container-fluid text-center">
                <b>
                 
                </b>
            </div>
            
            <footer class="footer text-white"> © 2018  </footer>
        </div>

    </div>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_client/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets_client/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets_client/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/modules/series-label.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}" ></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script src="{{ asset('assets/js/general.js') }}" ></script>
    <script>
    const url = $("meta[name=base_url]").attr('content');

    
    $(".fa-power-off").on("click", function(){
        $("#logout-form").submit();
    });

    </script>
    @yield('scripts')
</body>

</html>
=======
<?php
$url = request()->path();
$porciones = explode("/", $url );
$ruta = $porciones[0];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="base_url" content="{{ url('/') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo_login.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
        | Api
        @show
    </title>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_client/css/colors/purple.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet">

    <link href="{{ asset('assets_client/css/colors/coin.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets_client/css/coin_style.css') }}" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
</head>


<body class="fix-header fix-sidebar card-no-border logo-center">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @if( $ruta != 'changePassword')

            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                        
                    <div class="">
                        <a class="navbar-brand" href="{{url('/user')}}">
                            <b>
                               
                            </b>
                        </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto mt-md-0">
                                <li class="nav-item hidden-sm-down">
                                    <h4 id="ganado" precio="" class="p-t-10 m-r-20 nav-link  text-info font-bold font-18"></h4>
                                </li>
                                <li class="nav-item hidden-sm-down">
                                    <h4 id="_apagar" precio="" class="p-t-10 m-r-20 nav-link  text-danger font-bold font-18"></h4>
                                </li>
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item dropdown">
                            </li>
                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item hidden-sm-down">
                                <h4 id="_btc_price" class="p-t-10 m-r-20 nav-link  font-bold font-18"></h4>
                            </li>
                            
                            <li style="padding-top:8px">
                                
                                <h6 class="text-right">
                                    <a href="javascript:void(0)" id="_cerrar_session">
                                          
                                            
                                    </a>
                                </h6> 
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/usuario_tope.png') }}" alt="user" class="" height="30" width="30" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user font-14">
                                       
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0)" id="_btn_cerrar_session">
                                             <form id="logout-form" action="url('/logout')" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                            <a href="{{ route('logout') }}">
                                                Cerrar Sesión</a>
                                            </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>

                </nav>     
            </header>
         @endif
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            @if( $ruta != 'changePassword' )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('/index_usuarios')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('/post')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Post</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('busqueda')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Individual</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('mostrar')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Todos</span></a>
                            </li>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="{{url('paginas')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Paginas</span></a>
                            </li>
                                @if( Auth::user()->tipo == 1)
                                    <li>
                                        <a class="has-arrow waves-effect waves-dark" href="{{url('usuarios')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Usuarios</span></a>
                                    </li>
                                 @endif
                            @endif
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
       
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                @if( $ruta != 'changePassword' )
                    <div class="col-md-5 align-self-center">
                        <h3 id="_url_pagina" class="text-default font-bold">Escritorio</h3>
                    </div>
                    <div class="col-md-7 align-self-center" >
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                             <a href="javascript:void(0)" class="text-warning font-bold">Inicio</a></li>
                            <li class="breadcrumb-item active font-bold" id="_titulo">Escritorio</li>
                        </ol>
                    </div>
                @endif
                <!--<div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>-->

               
           
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @include('layouts.alerts')
            <div class="container-fluid">
                @yield('content')
            </div>

            <div class="container-fluid text-center">
                <b>
                 
                </b>
            </div>
            
            <footer class="footer text-white"> © 2018  </footer>
        </div>

    </div>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_client/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets_client/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets_client/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/highcharts/js/modules/series-label.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}" ></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script src="{{ asset('assets/js/general.js') }}" ></script>
    <script>
    const url = $("meta[name=base_url]").attr('content');

    
    $(".fa-power-off").on("click", function(){
        $("#logout-form").submit();
    });

    </script>
    @yield('scripts')
</body>

</html>
>>>>>>> cc4bb5d81543455d25d4c9f486e4c06423b413dc
