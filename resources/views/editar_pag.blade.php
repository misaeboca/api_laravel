@extends('layouts/default')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection
@section('content')
<br><br>
 
<!--Editar-->
<div class="col-lg-12">
        <div class="col-lg-12">
        <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Editar Página</h4>
                        <hr> 
                        <div class="p-l-10 p-r-10 ">
                              <form class="form-material" method="POST" action="{{ url('editar_post')}}">
                                {{csrf_field()}}
                                <input type="hidden" id="_id_post" value="{{ $datos->id}}">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                                            <input type="text" class="form-control form-control-sm" placeholder="Titulo" name="_tit" id="_tit" value="{{ $datos->titulo}}">
                                        </div>
                                                                            
                                        <div class="w3-right col-md-12 m-t-10 m-b-10">
                                            <textarea type="textarea" class="form-control form-control-sm" placeholder="Contenido" name="_contenido" id="_contenido" rows="3" >{{ $datos->contenido}}</textarea>
                                        </div>
                                        <div class="w3-left col-md-12 m-t-10 m-b-10">
                                            <input type="text" class="form-control form-control-sm" placeholder="Autor" name="_autor" id="_autor" value="{{ $datos->autor}}">
                                        </div>
                                        <br><br>
                                    </div>
                                </div>                       
                                <div class="modal-footer" style="border-top: solid 1px orange;">
                                    <buttom  id="btn_edit_pag" type="buttom" class="btn btn-info waves-effect">Guardar</buttom>
                                    <buttom id="_cancelar_pag" type="buttom" class="btn btn-primary waves-effect" data-dismiss="modal">Cancelar</buttom>
                                </div>
                            </form>
                        </div>
                      </div>
                  </div>

              </div>
        </div>
      </div>
    </div> 
@endsection
@section('scripts')
<script>
    $("#_cancelar_pag").on("click", function(){
          window.location = url+"/home";
    });
    $("#btn_edit_pag").on("click", function(){
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
                url: url+'/editar_pagina',
                data: {id:$("#_id_post").val(), titulo:$("#_tit").val(), contenido:$("#_contenido").val(),
                        autor:$("#_autor").val()},
                type: 'get',
                dataType: "json",
                //data:{},
                success: function(data,i) {
                    if(data.res == 1){
                        window.location = url+"/paginas";
                    }
                }
         });

    });
</script>
@endsection