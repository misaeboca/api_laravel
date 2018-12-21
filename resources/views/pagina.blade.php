@extends('layouts/default')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection
@section('content')
<script>
    function modal_nuevo(){
        $("#new_pag").modal("show");
    } 
</script>
<br><br>

     <div class="col-lg-12">
        <div class="col-lg-12">
        <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Paginas por Fecha</h4>
                        <hr> 
                        <div class="row col-12 ">
                            <buttom id="_new" name="_new" onclick="modal_nuevo()" class="btn btn-info waves-effect" style="text-align:right">Nuevo</buttom>
                        </div>
                        <div class="row p-l-10 p-r-10 ">
                            <div class=" table-responsive m-t-20 col-12">
                                <table id="_pagina" class="display nowrap table table-hover table-striped  table-b color-bordered-table  
                                primary-bordered-coin " cellspacing="0" width="100%">
                                    <thead class="head-table-c text-white">
                                        <tr>
                                            <th>Id</th>
                                            <th>Titulo</th>
                                            <th> Contenido </th>
                                            <th> Autor </th>
                                            <th> Fecha Publicacion </th>
                                            <th width="30%"s> Operación</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody id="_pagina_cuerpo">
                                        @foreach($post as $p)
                                            <tr>
                                                    <input type="hidden" name="id" value="{{ $p->id }}">
                                                    <td >{{$p->id}}</td>
                                                    <td width="20%">{{$p->titulo}}</td>
                                                    <td width="30%">{{$p->contenido}}</td>
                                                    <td>{{$p->autor}}</td>
                                                    <td>{{$p->created_at}}</td>

                                                    <td width="30%">
                                                        <table>
                                                            <tr>
                                                                <td>{{$p->created_at}}</td>
                                                                <td>
                                                                    <form action="{{ url('editar_mostrar_pag') }}">
                                                            <input type="hidden" name="id_pag" value="{{$p->id}}>">
                                                            <button class="btn btn-primary"><i class="fa fa-edit" style="cursor:pointer"  id_pag="{{$p->id}}"></i></button> 
                                                            </form></td>
                                                                <td> <button class="btn btn-primary"><i class="fa fa-trash" style="cursor:pointer"  id_pag="{{$p->id}}"></i></button></td>
                                                            </tr>
                                                        </table>
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

<!--Modal Nuevo-->
<div id="new_pag" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border: solid 1px orange;">
            <div class="modal-header" style="border-bottom: solid 1px orange; ">
                <i class="w3-left w3-xlarge w3-text-orange mdi mdi-account-card-details"></i>
                <h4 class="modal-title">Agregar Nuevo Registro</h4>
                <button class="w3-btn w3-hover-text-red w3-right" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
                                                
            <form class="form-material" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Titulo" name="titulo" id="titulo">
                        </div>
                                                            
                        <div class="w3-right col-md-12 m-t-10 m-b-10">
                            <textarea type="textarea" class="form-control form-control-sm" placeholder="Contenido" name="contenido" id="contenido" rows="3"></textarea>
                        </div>
                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                            <input type="text" class="form-control form-control-sm" placeholder="Autor" name="autor" id="autor">
                        </div>
                    </div>
                </div>
                                                
                <div class="modal-footer" style="border-top: solid 1px orange;">
                    <buttom id="btn_nuevo_pag" type="buttom" class="btn btn-info waves-effect">Registrar</buttom>
                    <buttom type="buttom" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</buttom>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Eliminar-->
<div id="delete_pag" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content" style="border: solid 1px orange;">
            <div class="modal-header" style="border-bottom: solid 1px orange; ">
                <i class="w3-left w3-xlarge w3-text-orange mdi mdi-account-card-details"></i>
                <h4 class="modal-title">Eliminar Registro</h4>
                <button class="w3-btn w3-hover-text-red w3-right" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
                                                
            <form class="form-material" method="POST">
                {{csrf_field()}}
                <input id="id_delete_pag" type="hidden"  value="">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                            <span>Seguro desea eliminar el registro?</span>
                        </div>                            
                    </div>
                </div>
                                                
                <div class="modal-footer" style="border-top: solid 1px orange;">
                    <buttom id="btn_delete_pag" type="buttom" class="btn btn-info waves-effect">Guardar</buttom>
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

        if($('#_pagina').dataTable())
            $('#_pagina').dataTable().fnDestroy();

        $('.dataTables_filter input[type="search"]').css(
           {'width':'400px', 'font-size':'14px'}
        );

        $('#_pagina').DataTable({
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

    $("#btn_nuevo_pag").on("click", function(){
        /*if($("#titulo").val()=='' ){
          toastr.warning('Debe Ingresar un Titulo');
          return false;
        }
        if($("#contenido").val() <= 0 ){
          toastr.warning('Debe Ingresar un Contenido');
          return false;
        }
        if($("#autor").val() <= 0 ){
          toastr.warning('Debe Ingresar un Autor');
          return false;
        }*/

        $.ajax({
                async: false,
                url: url+'/registrar_pagina',
                data: {titulo:$("#titulo").val(), contenido:$("#contenido").val(),
                        autor:$("#autor").val()},
                type: 'get',
                dataType: "json",
                //data:{},
                success: function(data,i) {
                    if(data.res == 1){
                        $("#new_pag").modal("hide");
                        window.location = url+"/paginas";
                    }
                }
         });

    });

});

$(".fa-trash").on("click", function(){
    $("#id_delete_pag").val($(this).attr('id_pag'));
    $("#delete_pag").modal("show");
});

$("#btn_delete_pag").on("click", function(){
    $.ajax({
            async: false,
            url: url+'/delete_pagina',
            data: {id:$("#id_delete").val()},
            type: 'get',
            dataType: "json",
            success: function(data,i) {
                if(data.res == 1){
                    $("#delete").modal("hide");
                    window.location = url+"/paginas";
                }
            }
     });
});
</script>
@endsection
