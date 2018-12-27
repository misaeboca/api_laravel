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
                        <h4 class="card-title">Listados de los Usuarios</h4>
                        <hr> 
                        <div class="row p-l-10 p-r-10 ">
                            <div class=" table-responsive m-t-20 col-12">
                                <table id="_post" class="display nowrap table table-hover table-striped  table-b color-bordered-table  
                                primary-bordered-coin " cellspacing="0" width="100%">
                                    <thead class="head-table-c text-white">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Estatus</th>
                                            <th>Operación</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody id="_post_cuerpo">
                                        @foreach($datos as $p)
                                            <tr>
                                                <input type="hidden" name="id" value="{{ $p->id }}">
                                                <td >{{$p->username}}</td>
                                                <td width="20%">{{$p->email}}</td>
                                                <td> @if($p->status == 1) Activo @else Inactivo @endif</td>
                                                <td width="20%">
                                                        <input type="hidden" name="id_usuario" id="id_usuario">
                                                        <button class="btn btn-danger"><i class="fa fa-edit" style="cursor:pointer"  idusuario="{{$p->id}}"></i></button>
                                                        <button class="btn btn-primary"><i class="fa fa-trash" style="cursor:pointer"  idusuario="{{$p->id}}"></i></button>
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
    <!--Eliminar-->
<div id="activar" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content" style="border: solid 1px orange;">
            <div class="modal-header" style="border-bottom: solid 1px orange; ">
                <i class="w3-left w3-xlarge w3-text-orange mdi mdi-account-card-details"></i>
                <h4 class="modal-title">Activar Usuario</h4>
                <button class="w3-btn w3-hover-text-red w3-right" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
                                                
            <form class="form-material" method="POST">
                {{csrf_field()}}
                <input id="id_delete" type="hidden"  value="">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                            <span>Seguro desea Activar el usuario?</span>
                        </div>                            
                    </div>
                </div>
                                                
                <div class="modal-footer" style="border-top: solid 1px orange;">
                    <buttom id="btn_activar" type="buttom" class="btn btn-info waves-effect">Guardar</buttom>
                    <buttom type="buttom" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</buttom>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="inactivar" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content" style="border: solid 1px orange;">
            <div class="modal-header" style="border-bottom: solid 1px orange; ">
                <i class="w3-left w3-xlarge w3-text-orange mdi mdi-account-card-details"></i>
                <h4 class="modal-title">Eliminar Registro</h4>
                <button class="w3-btn w3-hover-text-red w3-right" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
                                                
            <form class="form-material" method="POST">
                {{csrf_field()}}
                <input id="id_delete" type="hidden"  value="">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                            <span>Seguro desea Inactivar el usuario?</span>
                        </div>                            
                    </div>
                </div>
                                                
                <div class="modal-footer" style="border-top: solid 1px orange;">
                    <buttom id="btn_inactivar" type="buttom" class="btn btn-info waves-effect">Guardar</buttom>
                    <buttom type="buttom" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</buttom>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
                    "searchPlaceholder": "Nombre /  Email / Esttus",
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

$(".fa-edit").on("click", function(){
    $("#activar").modal("show");
    $("#id_usuario").val($(this).attr('idusuario'));
});

$("#btn_activar").on("click", function(){
    $.ajax({
            async: false,
            url: url+'/usuarios_activar',
            data: {id:$("#id_usuario").val()},
            type: 'get',
            dataType: "json",
            success: function(data,i) {
                if(data.res == 1){
                    $("#activar").modal("hide");
                    window.location = url+"/usuarios";
                }
            }
     });
});

$(".fa-trash").on("click", function(){
    $("#inactivar").modal("show");
    $("#id_usuario").val($(this).attr('idusuario'));
});

$("#btn_inactivar").on("click", function(){
    $.ajax({
            async: false,
            url: url+'/usuarios_inactivar',
            data: {id:$("#id_usuario").val()},
            type: 'get',
            dataType: "json",
            success: function(data,i) {
                if(data.res == 1){
                    $("#inactivar").modal("hide");
                    window.location = url+"/usuarios";
                }
            }
     });
});

});
</script>
@endsection
