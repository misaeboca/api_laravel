@extends('layouts/admin/default')

@section('page-titles')
<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Empleado</h4>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Editar Empleado</li>
            </ol>
        </div>
</div>
@stop

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Configuracion de Empleado</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('employee.update',['id'=>$employee['entity_id']])}}" method="POST" class="form-horizontal">
                     {{csrf_field()}}
                    <div class="form-body">
                        <h3 class="box-title">Datos Basicos</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4">Cedula/Identidad</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="entity_identity" placeholder="" value="{{$employee['entity_identity']}}">
                                        <!--<small class="form-control-feedback"> This is inline help </small> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="entity_name" placeholder="" value="{{$employee['entity_name']}}">
                                        <!--<small class="form-control-feedback"> This is inline help </small> -->
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Apellido</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="entity_lastname" placeholder="" value="{{$employee['entity_lastname']}}">
                                        <!--<small class="form-control-feedback"> This field has error. </small>-->
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Fecha de Nacimiento</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="entity_birth_date" placeholder="dd/mm/yyyy" value="{{$employee['entity_birth_date']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Genero</label>
                                    <div class="col-md-9">
                                        <div class="radio-list">
                                            <label class="custom-control custom-radio">
                                                <input id="femenino" name="entity_gender" value="Femenino" type="radio" checked="" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Masculino</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="masculino" name="entity_gender" value="Masculino" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Femenino</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h3 class="box-title">Datos Empleado</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                           <div class="col-md-6">
                               <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Cargo</label>
                                    <div class="col-md-9">
                                       
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                               <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tipo de Contrato</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select" name="entity_typeofcontract" data-placeholder="Elegir un Cargo" tabindex="1">
                                            <option value="1">Permanente</option>
                                            <option value="2">Temporal</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                               <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Salario</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="entity_salary" placeholder="" value="{{$employee['entity_salary']}}">
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                        
                        <h3 class="box-title">Direccion</h3>
                        <hr class="m-t-0 m-b-40">
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Direccion</label>
                                    <div class="col-md-9">
                                        <input type="text" name="entity_address" class="form-control" value="{{$employee['entity_address']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Telefono</label>
                                    <div class="col-md-9">
                                        <input type="text" name="entity_phone" class="form-control" value="{{$employee['entity_phone']}}">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Correo Electronico</label>
                                    <div class="col-md-9">
                                        <input type="text" name="entity_email" class="form-control" value="{{$employee['entity_email']}}">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                        <!--/row-->
                    </div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                        <button type="button" class="btn btn-inverse">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop