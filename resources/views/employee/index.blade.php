@extends('layouts/admin/default')

{{-- Page title --}}
@section('title')
    Bienvenido a la plataforma 
    @parent
@stop
@section('page-titles')
<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Empleados</h4>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Empleados</li>
            </ol>
        </div>
</div>
@stop
@section('content')
<div class="row">
    <!-- Column -->
    @if (\Session::has('success'))
      <div class="alert alert-success col-md-12">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <a class="btn btn-success" href="{{ route('employee.create') }}"><i class="fa fa-plus"></i> Cargar Empleado</a>
                            </div>
                        </div>
                    </div>
                    </br>
                    <h4 class="card-title">Lista de Empleados</h4>
                    <div class="table-responsive m-t-40">
                        <table id="empleados" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Cedula</th>
                                    <th>Correo</th>
                                    <th>Cargo</th>
                                    <th>Salario Actual</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employee as $emp)
                                    <tr>
                                        <td>{{ $emp->entity_id }}</td>
                                        <td>{{ $emp->entity_name }} {{ $emp->entity_lastname }}</td>
                                        <td>{{ $emp->entity_identity }}</td>
                                        <td>{{ $emp->entity_email }}</td>
                                        <td>{{ $emp->workplace_id }}</td>
                                        <td>{{ $emp->entity_salary }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs" href="{{ route('employee.show',['id' => $emp->entity_id] )}}" ><i class="fa fa-binoculars"></i></a> 
                                            <a class="btn btn-info btn-xs" href="{{ route('employee.edit',['id' => $emp->entity_id] )}}" ><i class="fa fa-pencil"></i></a> 
                                            <a class="btn btn-danger btn-xs" href="{{ route('employee.destroy',['id' => $emp->entity_id] )}}" ><i class="fa fa-trash-o"></i></a>
                                        </td>
                     
                                    </tr>
                                    @endforeach
                                <!--<tr>
                                    
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        <i class="fa fa-binoculars"></i>
                                        <i class="fa fa-pencil"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </td>
                                </tr>-->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                    
    </div>
@stop
@section('scripts')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function() {
         console.log( "estoy en empleado!" );
         $('#empleados').DataTable( {
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
        });
        
    });
    
</script>
@stop