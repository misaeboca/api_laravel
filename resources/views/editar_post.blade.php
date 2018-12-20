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
                        <h4 class="card-title">Editar Post</h4>
                        <hr> 
                        <div class="row p-l-10 p-r-10 ">
                              <form class="form-material" method="POST" action="{{ url('editar_post')}}">
                                {{csrf_field()}}
                                <input type="hidden" id="_id_post" value="{{ $datos->id}}">
                                <div class="modal-body">
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
                                        <label>Categoria</label>
                                        <div class="demo-checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="1" @foreach($cate as $cat) @if($cat->id_categoria == 1)) checked  @endif @endforeach value="1">
                                                <label class="custom-control-label" for="defaultUnchecked">Tecnologia</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="2" @foreach($cate as $cat) @if($cat->id_categoria == 2)) checked  @endif @endforeach value="2">
                                                <label class="custom-control-label" for="defaultUnchecked2">Artes</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" name="3" @foreach($cate as $cat) @if($cat->id_categoria == '3')) checked  @endif @endforeach value="3">
                                                <label class="custom-control-label" for="defaultUnchecked3">Musica
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" name="4" @foreach($cate as $cat) @if($cat->id_categoria == 4)) checked  @endif @endforeach value="4">
                                                <label class="custom-control-label" for="defaultUnchecked4">Deporte</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked5" name="5" @foreach($cate as $cat) @if($cat->id_categoria == 5)) checked  @endif @endforeach value="5">
                                                <label class="custom-control-label" for="defaultUnchecked5">Economia</label>
                                            </div> 
                                        </div>                  
                                        </div>
                                </div>
                                                                
                                <div class="modal-footer" style="border-top: solid 1px orange;">
                                    <buttom  id="btn_edit" type="buttom" class="btn btn-info waves-effect">Guardar</buttom>
                                    <buttom id="_cancelar" type="buttom" class="btn btn-primary waves-effect" data-dismiss="modal">Cancelar</buttom>
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
    $("#_cancelar").on("click", function(){
          window.location = url+"/home";
    });
    $("#btn_edit").on("click", function(){
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

        var categorias=Array();
        $('.demo-checkbox').find('input[type="checkbox"]').each(function(){
            if($(this).is(':checked'))
                if($(this).val())
                    categorias.push($(this).val());
        });

        $.ajax({
                async: false,
                url: url+'/editar_post',
                data: {id:$("#_id_post").val(), titulo:$("#_tit").val(), contenido:$("#_contenido").val(),
                        autor:$("#_autor").val(), categoria:categorias},
                type: 'get',
                dataType: "json",
                //data:{},
                success: function(data,i) {
                    if(data.res == 1){
                        window.location = url+"/home";
                    }
                }
         });

    });
</script>
@endsection