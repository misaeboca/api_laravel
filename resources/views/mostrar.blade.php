@extends('layouts/default')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection

@section('content')
<br><br>
   <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h3 class="card-title">Mostrar Todos los Articulos</h3>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form class="input-form">
                            <label class="control-label m-t-20" for="example-input1-group2"><b>Cantidad de Páginas</b></label>
                            <div class="row">
                      
                                <div class="col-lg-8">
                               
                                  <div class="">
                                        <div class="input-group">
                                            <input id="pag" name="pag" type="text" class="form-control" placeholder="Ingrese la cantidad de páginas...">
                                            <span class="input-group-btn">
                  <button class="btn btn-info" id="_buscar" name="_buscar" type="button">Buscar</button>
                </span>
                                        </div>
                                    </div>
                            </div>
                            <br>
                       
                            <!-- form-group -->
                        </form>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-lg-12">
        <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Post por Fecha</h4>
                        <hr>
                        <div class="row p-l-10 p-r-10 ">
                            <div class=" table-responsive m-t-20 col-12">
                                <table id="_mineria" class="display nowrap table table-hover table-striped  table-b color-bordered-table  
                                primary-bordered-coin " cellspacing="0" width="100%">
                                    <thead class="head-table-c text-white">
                                        <tr>
                                            <th>Id</th>
                                            <th class="text-right">Titulo</th>
                                            <th class="text-right">Fecha de Publicación</th>
                                        </tr>


                                    </thead>
                                   
                                    <tbody id="cuerpo_tabla">
                                        <tr>
                                            <td>Id</td>
                                            <td class="text-right">Titulo</td>
                                            <td  class="text-right">Fecha de Publicación</td>
                                        </tr>
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

</div>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection
@section('scripts')

<script>
    $(document).ready(function() {

        $("#cuerpo_tabla").html('');
        $('#_mineria').dataTable().fnDestroy();

        /*$(document).ready(function () {             
            $('.dataTables_filter input[type="search"]').css(
               {'width':'400px', 'font-size':'14px'}
            );
        });*/

        $("#_buscar").on("click", function(){

            if($("#pag").val()=='' ){
              toastr.warning('Debe Ingresar un Id');
              return false;
            }
            if($("#pag").val() <= 0 ){
              toastr.warning('Debe Ingresar una cantida mayo a 0');
              return false;
            }

            //Consulto al api
            cad = ''; 
            $.ajax({
                async: false,
                url: url+'/posts/'+$("#pag").val(),
                type: 'get',
                dataType: "json",
                //data:{},
                success: function(data,i) {
                  $('#_mineria').DataTable( {
                      "aaData": data,
                      "columns": [
                          { "data": "id" },
                          { "data": "titulo" },
                          { "data": "created_at" }
                      ],
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

                  } );//fin datatable
            }
         });
    });

});


</script>

@endsection
