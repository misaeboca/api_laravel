<<<<<<< HEAD
@extends('layouts/default_index')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection
@section('content')
<script>
    function modal_nuevo(){
        $("#new").modal("show");
    } 
</script>
<br><br>

     <div class="col-lg-12">
        
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="fix-width">
                    <div class="row banner-text justify-content-center">
                        <div class="col-md-10 m-t-20 text-center">
                            <h1>Su pagina de Bloc <span class="text-info">de usuarios</span> de Practica</h1>
                            <p class="subtext">
                                <br><br><span class="font-medium">Esta pagina</span> esta dedicada, <span class="font-medium">al desarrollo</span> de la practica, <span class="font-medium">del curso</span> de programacion, <span class="font-medium">y a la</span> puesta en practica, del framework laravel, y sus conceptos y fromas de desarrollo...</p>
                        </div>  
                        <br><br>     
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Featured Section -->
                <!-- ============================================================== -->
                <br><br><br>
                <div class="row m-t-20">
                    <div class="col-md-12">
                    <b>Desarrollo back-end con PHP</b>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Feature with Icons -->
                <!-- ============================================================== -->
                <br><br>
                <div class="row white-space">
                    <div class="col-md-12 ">
                        <div class="fix-width icon-section"> 
                                <div class="text-center m-b-20">
                                <h2 class="display-7">Topicos</h2>
                                </div>
                                <br><br>
                            <!-- Row -->
                            <div class="row m-t-40">
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6"> <i class="ti-paint-bucket display-5 text-info"></i>
                                    <h4 class="font-500">Instalacion de Laravel</h4>
                                    <p>Aqui se instalara y explicara la forma de hacerlo .
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6"> <i class="ti-layout-sidebar-right display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Modelos</h4>
                                    <p>Creacion del modelo Post y Pagina y sus metodos.</p>
                                </div>
                                <br><br>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6 m-t-20"><i class="ti-layers-alt display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Tinker</h4>
                                    <p>Compobrar la base datos con tinker.</p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6 m-t-20"><i class="ti-paint-roller display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Faker</h4>
                                    <p>Insercion automatica de datos.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6  m-t-20"><i class="ti-widget display-5 text-info"></i>
                                    <h4 class="font-500">Admin de Blog</h4>
                                    <p>Herramienta para publicar y administrar blogs.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6  m-t-20"> <i class="ti-target display-5 text-info"></i>
                                    <h4 class="font-500">Web</h4>
                                    <p>Vistas, modelos y presentacion del listado de post.</p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Testimonial -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Call to action bar -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
    </div> 
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection
=======
@extends('layouts/default_index')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection
@section('content')
<script>
    function modal_nuevo(){
        $("#new").modal("show");
    } 
</script>
<br><br>

     <div class="col-lg-12">
        
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="fix-width">
                    <div class="row banner-text justify-content-center">
                        <div class="col-md-10 m-t-20 text-center">
                            <h1>Su pagina de Bloc <span class="text-info">de usuarios</span> de Practica</h1>
                            <p class="subtext">
                                <br><br><span class="font-medium">Esta pagina</span> esta dedicada, <span class="font-medium">al desarrollo</span> de la practica, <span class="font-medium">del curso</span> de programacion, <span class="font-medium">y a la</span> puesta en practica, del framework laravel, y sus conceptos y fromas de desarrollo...</p>
                        </div>  
                        <br><br>     
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Featured Section -->
                <!-- ============================================================== -->
                <br><br><br>
                <div class="row m-t-20">
                    <div class="col-md-12">
                    <b>Desarrollo back-end con PHP</b>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Feature with Icons -->
                <!-- ============================================================== -->
                <br><br>
                <div class="row white-space">
                    <div class="col-md-12 ">
                        <div class="fix-width icon-section"> 
                                <div class="text-center m-b-20">
                                <h2 class="display-7">Topicos</h2>
                                </div>
                                <br><br>
                            <!-- Row -->
                            <div class="row m-t-40">
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6"> <i class="ti-paint-bucket display-5 text-info"></i>
                                    <h4 class="font-500">Instalacion de Laravel</h4>
                                    <p>Aqui se instalara y explicara la forma de hacerlo .
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6"> <i class="ti-layout-sidebar-right display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Modelos</h4>
                                    <p>Creacion del modelo Post y Pagina y sus metodos.</p>
                                </div>
                                <br><br>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6 m-t-20"><i class="ti-layers-alt display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Tinker</h4>
                                    <p>Compobrar la base datos con tinker.</p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6 m-t-20"><i class="ti-paint-roller display-5 text-info"></i>
                                    <h4 class="font-500">Uso de Faker</h4>
                                    <p>Insercion automatica de datos.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6  m-t-20"><i class="ti-widget display-5 text-info"></i>
                                    <h4 class="font-500">Admin de Blog</h4>
                                    <p>Herramienta para publicar y administrar blogs.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                                <div class="col-lg-6 col-md-6  m-t-20"> <i class="ti-target display-5 text-info"></i>
                                    <h4 class="font-500">Web</h4>
                                    <p>Vistas, modelos y presentacion del listado de post.</p>
                                </div>
                                <!-- /.col -->
                                <!-- .col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Testimonial -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Call to action bar -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
    </div> 
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection
>>>>>>> cc4bb5d81543455d25d4c9f486e4c06423b413dc
