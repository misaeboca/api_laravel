@extends('layouts/default')
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
        <div class="col-lg-12">
        <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                        <hr> 
                        <div class="row p-l-10 p-r-10 ">
                            <div class=" table-responsive m-t-20 col-12">
                                <div class="row">
                  
                    <div class="col-lg-12">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">{{ $datos->titulo}}</h2>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets m-b-20">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="comment-text w-100">
                                        <div class="comment-footer">
       
                                        </div>
                                        <p class="m-b-5 m-t-10">{{ $datos->contenido}}.</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row comment-row ">
                                    @foreach($cate as $p)
                                        @if($p->id_categoria == 1)
                                            <span class="label label-info">Tecnologia</span> <span class="action-icons" style="padding-right: 10px;"></span>
                                        @endif
                                        @if($p->id_categoria == 2)
                                            <span class="label label-info">Artes</span> <span class="action-icons" style="padding-right: 10px;"></span>
                                        @endif
                                        @if($p->id_categoria == 3)
                                            <span class="label label-info">Musica</span> <span class="action-icons" style="padding-right: 10px;"></span>
                                        @endif
                                        @if($p->id_categoria == 4)
                                            <span class="label label-info">Deporte</span> <span class="action-icons" style="padding-right: 10px;"></span>
                                        @endif
                                        @if($p->id_categoria == 5)
                                            <span class="label label-info">Economia</span> <span class="action-icons" style="padding-right: 10px;"></span>
                                        @endif
                                     @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                    </div>
                </div>
                            </div>
                        </div>
                      </div>
                  </div>

              </div>
        </div>
      </div>
    </div> 


    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12 center">
          <a href="{{ url('/') }}">volver</a>
        </div>
      </div>
    </div>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        var categorias = Array();
          
        $('.dataTables_filter input[type="search"]').css(
           {'width':'400px', 'font-size':'14px'}
        );


        $('#_post').DataTable({
                    "language": {
                    "decimal":        "",
                    "emptyTable":     "No hay datos disponibles en la tabla",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered":   "(filtrado de _MAX_ total registros)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "searchPlaceholder": "Equipo /  Tiempo Real / Diario / Aceptado /  Estatus",
                    "zeroRecords":    "No se encontraron registros coincidentes",
                    "paginate": {
                        "first":      "Primeo",
                        "last":       "Ultimo",
                        "next":       "Proximo",
                        "previous":   "Anterior"

                    },
                    "aria": {
                        "sortAscending":  ": activar para ordenar la columna ascendente",
                        "sortDescending": ": activar para ordenar la columna descendente"
                    }
                }

    });//fin datatable
</script>
@endsection
