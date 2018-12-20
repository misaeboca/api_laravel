<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Control Coin, Sistema de control de Equipos Minadores de Bitcoin">
    <meta name="author" content="Darwin Salinas">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/emblema_coincoin_control.png') }}">
    <title>
    	@section('title', 'Coincoin | Admin')
        @yield('title')
    </title>

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/w3.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mi.css')}}" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Anton');
        .move{ margin-left: 225px; }

        .switch { position: relative; display: inline-block; width: 60px; height: 34px; }
        .switch input {display:none;}
        .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ff3333; -webkit-transition: .4s; transition: .4s; }
        .slider:before { position: absolute; content: ""; height: 26px; width: 26px; left: 4px; bottom: 4px; background-color: white; -webkit-transition: .4s; transition: .4s; }

        input:checked + .slider { background-color: #4dff4d; }
        input:focus + .slider { box-shadow: 0 0 1px #2196F3; }
        input:checked + .slider:before { -webkit-transform: translateX(26px); -ms-transform: translateX(26px); transform: translateX(26px); }

        .slider.round { border-radius: 34px; }
        .slider.round:before { border-radius: 50%; }
    </style>
    
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}" ></script>
</head> 

<body class="card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand">
                        <img aria-expanded="false" src="{{ asset('assets/images/logo_inicio_tope.png') }}" style=" display: inline-block; width: 100%;"/>
                    </a>
                </div>
    
                <div class="navbar-collapse" style="clear: fixed;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" style="" >
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" onclick="$('.page-wrapper').toggleClass('move'); $('#mini,#no-mini').toggle()" >
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)" onclick="$('.page-wrapper').toggleClass('move');$('#mini,#no-mini').toggle()">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav my-lg-0">       
                        <li id="chip">
                            <h5  style="border-bottom:1px solid; font-size:12px;" id="usuario">{{Auth::user()->username }}
                            </h5>
                            <h6 class="text-right">
                                <a href="{{ route('logout') }}">
                                    <sup> Cerrar Sesión</sup>
                                </a>
                            </h6> 
                        </li>
   

                        <li class="nav-item ">
                            <a class="nav-link text-muted waves-effect waves-dark">
                                <span class="w3-text-orange">
                                    <i class="w3-xxlarge mdi mdi-account-circle"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar">
            <div class="">
                <div class="user-profile" style="margin-top: 5px;">
                    <img src="{{ asset('assets/images/antminer.png') }}" style="width: 100%;">
                    <div class="profile-text">
                        <a href="#" class="">
                            <dt class="text-warning">
                                {{Auth::user()->useroles->display_name}}
                            </dt>
                        </a>
                    </div>
                </div>
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @if( Auth::user()->roles_id ==1 && Auth::user()->group_id == 1 )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-account"></i>
                                    <span class="hide-menu">Control Usuarios</span>
                                </a>

                                <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href=" {{ route('personal') }} " aria-expanded="false">
                                            <i class="mdi mdi-settings"></i>
                                            Personal
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if( strtolower( Auth::user()->departamento->departamento) == 'almacen' or strtolower( Auth::user()->departamento->departamento) == 'todos' )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-archive"></i>
                                    <span class="hide-menu">Control Deposito</span>
                                </a>

                                <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href="{{route('proveedores')}}" class="w3-small"><i class="mdi mdi-settings"></i> Proveedores
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('ingresos')}}" class="w3-small"><i class="mdi mdi-settings"></i> Ingresos
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{route('productos')}}" class="w3-small"><i class="mdi mdi-settings"></i> Productos
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('productos.categorias')}}" class="w3-small">
                                            <i class="mdi mdi-settings"></i> Categorías Productos
                                        </a>
                                    </li>
                                    
                                    <!--<li>
                                        <a href="{{-- route('equipos.fuentes') --}}" class="w3-small"><i class="mdi mdi-settings"></i> Relacionar Equipos y Fuentes
                                        </a>
                                    </li>-->
                                </ul>
                            </li>
                        @endif
                            
                        @if( strtolower( Auth::user()->departamento->departamento) == 'ventas' or strtolower( Auth::user()->departamento->departamento) == 'todos' )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-assistant"></i>
                                    <span class="hide-menu">Control Ventas</span>
                                </a>

                                <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href="{{ route('ventas') }}" aria-expanded="false">
                                            <i class="mdi mdi-settings"></i>
                                            Clientes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('alquilar.espacio')}}">
                                            <i class="mdi mdi-settings"></i> Alquiler
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('facturas.contrato')}}" class="w3-small">
                                            <i class="mdi mdi-settings"></i> Facturas & Contratos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if( strtolower( Auth::user()->departamento->departamento) == 'instalador' or strtolower( Auth::user()->departamento->departamento) == 'todos' )
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-dns"></i>
                                    <span class="hide-menu">Control Instaladores</span>
                                </a>
                            
                           
                                <ul aria-expanded="false" class="collapse"> 
                                    <li>
                                        @if( strtolower( Auth::user()->departamento->departamento) == 'todos' )
                                        <a href="{{route('instalador')}}" class="w3-small"> <i class="mdi mdi-settings"></i> Instalaciones Pendientes</a>
                                        @elseif( strtolower( Auth::user()->departamento->departamento) == 'instalador' )
                                        <a href="{{route(strtolower(Auth::user()->departamento->departamento) )}}"><i class="mdi mdi-settings"></i> Instalaciones Pendientes </a>
                                        @endif
                                    </li>

                                    <li>
                                        <a href="{{route('activar.usuario')}}" aria-expanded="false" class="w3-small"><i class="mdi mdi-settings"></i> Usuario Cliente </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{route('historial.instalaciones')}}" class="w3-small"><i class="mdi mdi-settings"></i> Historial Instalaciones
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('rendimiento')}}" class="w3-small"><i class="mdi mdi-settings"></i> Rendimiento </a>
                                    </li>

                                    <li>
                                        <a href="{{route('salas')}}" class="w3-small"><i class="mdi mdi-settings"></i> Salas</a>
                                    </li>

                                    <li>
                                        <a href="{{route('areas')}}" class="w3-small"><i class="mdi mdi-settings"></i> Areas</a>
                                    </li>

                                    <li>
                                        <a href="{{route('racks')}}" class="w3-small"><i class="mdi mdi-settings"></i> Racks</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
        
        <div class="page-wrapper w3-light-grey" >
            <div id="_url_pagina" class="row page-titles" style="background-color: #bfbfbf;">
                @section('breadcrum')
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-default font-bold">Escritorio</h3>
                    </div>
                        
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}" class="text-warning font-bold">Inicio</a>
                            </li>
                            <li class="breadcrumb-item font-bold active">Escritorio</li>
                        </ol>
                    </div>
                @stop
                @yield('breadcrum')
            </div>
            @include('layouts.alerts')
            <div class="w3-container">
                @yield('content')
            </div>
            <footer class="w3-container w3-center m-t-15" style="bottom: 0px; margin-bottom: 0px; padding-bottom: 0px;">
                <img class="" src="{{asset('assets/images/logo_inicio_footer.png')}}">
            </footer>
        </div>
    </div>
    
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    @yield('scripts')
</body>

</html>