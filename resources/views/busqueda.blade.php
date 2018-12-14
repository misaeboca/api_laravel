@extends('layouts/default')
{{-- Page title --}}
@section('title')
   Plataforma
   @parent
@endsection

@section('content')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

<br><br>
   <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h3 class="card-title">Busqueda del Articulo</h3>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form class="input-form">
                            <label class="control-label m-t-20" for="example-input1-group2"><b>Id del Articulo</b></label>
                            <div class="row">
                      
                                <div class="col-lg-8">
                               
                                  <div class="">
                                        <div class="input-group">
                                            <input id="_id" name="_id" type="text" class="form-control" placeholder="Buscar por Id...">
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
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table color-table info-table">
                                        <thead>
                                            <tr>
                                                
                                                <th>ID</th>
                                                <th>Titulo</th>
                                                <th>Fecha de Publicación</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cuerpo_tabla">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $("#_buscar").on("click", function(){

            if($("#_id").val()=='' ){
              toastr.warning('Debe Ingresar un Id');
              return false;
            }
            
             $.ajax({
              //async: false,
              //consumo el metodo del api desde jquery
                  url: url+'/post/'+$("#_id").val(),
                  type: 'get',
                  dataType: "json",
                  //data:{},
                  success: function(data) {
                      cad = '';
                      if(data.datos != null){
                        cad = '<tr>';
                        cad += ' <td>'+data.datos.id+'</td>';
                        cad += ' <td width="40%">'+data.datos.titulo+'</td>';
                        cad += ' <td>'+data.datos.created_at+'</td>';
                        cad +=  '</tr>';
                        
                      }else{
                        
                        cad = '<tr>'
                        cad += '<td colspan="3" class="text-center"><b>No existe el registro</b></td>'
                        cad +=  '</tr>';
                      }
                      $("#cuerpo_tabla").html(cad);

                  }
              });
          
         });
    });
</script>

@endsection
