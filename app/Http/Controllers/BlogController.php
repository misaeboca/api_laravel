<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Post;
use Redirect, Session, Response;


class PostController extends Controller
{
	
	public function VerClientes()
	{
		$clientes=Cliente::orderBy('nombre', 'asc')->get();
		return View('ventas.clientes.mostrar', ['clientes'=>$clientes]);
	}

	public function EditarCliente(Request $request)
	{
		Cliente::findOrFail($request->id)->update(['cedula' => $request->cedula, 'nombre'=> $request->nombre, 'apellido'=>$request->apellido, 'telefono'=>$request->telefono, 'direccion'=>$request->direccion,]);
	    Session::flash('message-success', 'El Registro Ha Sido Registrado');
	    return redirect()->route('clientes');
	}
	

	public function SolicitudFactura()
	{
		$clientes=Cliente::OrderBy('id' , 'asc')->get();
		$productos=Producto::Distinct('tipo_id')->get();
		$tipos=ProductoTipo::OrderBy('tipo' , 'asc')->get();

		return View('ventas.alquiler', ['clientes'=>$clientes, 'productos'=>$productos, 'tipos' => $tipos] );
	}
	public function RegAlquiler(Request $request)
	{
		$articulos=$request->producto_id;
		$factura = FacturAlquiler::create([ 'serial_factura' =>$request->serial_factura , 'vendedor_user_id' =>$request->vendedor_user_id , 'cliente_id' =>$request->cliente_id , 'status_pago' => 'pendiente'] );
		//$detalles = $request->except('_token','serial_factura','vendedor_user_id', 'cliente_id');

		for ($i=0; $i < count($articulos); $i++)
        {
		Factura_Alquiler_Detalle::create(['factura_alquiler_id'=>$factura->id, 'producto_id' => $request->producto_id[$i], 'cantidad' => $request->cantidad[$i], 'precio' => $request->precio[$i], 'total'=>$request->total ]);
		}

		Session::flash('message-success', 'Exito, Registro Procesado');
		return redirect()->route('ventas');
	}

	public function ajaxbuscarcliente(Request $request)
	{
		if ($request->ajax() ) {
			$cliente=Cliente::where('cedula', $request->dni)->first();
			return response()->json($cliente);
		}
	}

	public function ViewFacturaContrato()
	{
		$facturas=FacturAlquiler::OrderBy('created_at', 'desc')->get();
		return View('ventas.contrato', ['facturas' => $facturas ]);
	}
}