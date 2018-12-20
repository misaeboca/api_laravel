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
                        <h4 class="card-title">Listados de los 10 primeros Post</h4>
                        <hr> 
                        <div class="row p-l-10 p-r-10 ">
                            <div class=" table-responsive m-t-20 col-12">
                                <table id="_post" class="display nowrap table table-hover table-striped  table-b color-bordered-table  
                                primary-bordered-coin " cellspacing="0" width="100%">
                                    <thead class="head-table-c text-white">
                                        <tr>
                                            <th>Id</th>
                                            <th>Titulo</th>
                                            <th> Contenido </th>
                                            <th> Autor </th>
                                            <th width="20%"> Fecha Publicacion </th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody id="_post_cuerpo">
                                        @foreach($post as $p)
                                            <tr>
                                                    <input type="hidden" name="id" value="{{ $p->id }}">
                                                    <td >{{$p->id}}</td>
                                                    <td width="20%">{{$p->titulo}}</td>
                                                    <td width="30%">{{$p->contenido}}</td>
                                                    <td>{{$p->autor}}</td>
                                                    <td width="20%">
                                                        <form action="{{ url('post_mostrar') }}">
                                                            <input type="hidden" name="id" value="{{$p->id}}">
                                                            {{$p->created_at}}
                                                            <button class="btn btn-primary"><i class="fa fa-edit" style="cursor:pointer"  idpost="{{$p->id}}"></i></button>
                                                        </form>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                  </div>

              </div>
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

});
</script>
@endsection
