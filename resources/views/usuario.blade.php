<!-- Modal Add User -->
	<div class="modal fade in" id="adduser{{$persona->id}}" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content w3-small" style="border: 1px solid orange;">
				<div class="modal-header" style="border-bottom: solid 1px orange;">
					<i class="w3-text-orange w3-xlarge w3-left mdi mdi-account-plus"></i>
                	<h5 class="modal-title"> Agregar Usuario</h5>
                    <button class="w3-btn w3-right w3-hover-text-red" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form class="form-horizontal" action="{{route('usuario.personal')}}" method="POST">
                	{{csrf_field()}}

                	<div class="modal-body" style="">
                		<div class="card-body">
                			<input type="hidden" name="persona_id" id="persona_id" value="{{$persona->id}}">
                			<div class="form-group">
                				<div class="col-sm-12">
                					<div class="input-group">
                						<input required="required" type="text" class="form-control form-control-sm" id="username" placeholder="USUARIO" name="username">

                						<div class="w3-text-red input-group-addon">
                							<i class="ti-user"></i>
                						</div>
                					</div>
                				</div>
                			</div>

                			<div class="form-group">
                				<div class="col-sm-12">
                					<div class="input-group">
                						<input required="required" type="email" class="form-control form-control-sm" id="email" placeholder="EMAIL" name="email">
                						<div class="input-group-addon w3-text-red">
                							<i class="ti-email"></i>
                						</div>
                					</div>
                				</div>
                			</div>

                			<div class="form-group">
                				<div class="col-sm-12">
                					<div class="input-group">
                						<input required="required" type="password" class="form-control form-control-sm" id="pass{{$persona->id}}" placeholder="CLAVE" oninput="comparar({{$persona->id}})" name="password">
                						<div class="w3-text-red input-group-addon">
                							<i class="ti-lock"></i>
                						</div>
                					</div>
                				</div>
                			</div>

                			<div class="form-group">
                				<div class="col-sm-12">
                					<div class="input-group">
                						<input required="required" type="password" class="form-control form-control-sm" id="repass{{$persona->id}}" oninput="comparar({{$persona->id}})" placeholder="REPETIR CLAVE">
                						<div class="w3-text-red input-group-addon"><i class="ti-lock"></i></div>
                					</div>
                					<div style="display: none;" class="w3-text-red" id="nocoinciden{{$persona->id}}">Las Claves No Conciden
                					</div>
                				</div>
                            </div>

                            <div class="form-group">
                            	<select name="roles_id" class="w3-select col-sm-12">
                            		<option selected="selected" disabled="disabled" value=""> Elije el Rol de este Usuario</option>
                            		@if(isset($roles))
                            			@foreach($roles as $role)
                            				@if($role->display_name!='Usuario Cliente' && $role->display_name!='Administrador del Sistema')
                            				
                            				<option value="{{$role->id}}"> {{$role->display_name}}</option>
                            				
                            				@endif
                            			@endforeach
                            		@endif
                            	</select>
                            </div>
                            <input type="hidden" name="dpartamento" id="dpartamento" value="{{$persona->group_id}}">
                        </div>
                    </div>

                    <div class="modal-footer" style="border-top: solid 1px orange; ">
                    	<button type="submit" class="btn btn-info" id="botonaceptar{{$persona->id}}" style="display: none;">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--Fin Modal-->
