<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Personal;
use App\Models\Cliente;
use App\Models\Sala, App\Models\Area, App\Models\Rack;
use App\Models\Equipo;
use App\Models\Departamento;

use App\User, App\Role;
use Redirect, Response, Session;

class AdminController extends Controller
{

    public function Registro(Request $request)
    {
	    $personal=Personal::create([ 'cedula' => $request->cedula, 'nombre'=> $request->nombre, 'apellido'=>$request->apellido, 'telefono'=>$request->telefono, 'direccion'=>$request->direccion, 'group_id'=>$request->departamento_id, ]);

	    Session::flash('message-success','Registo Creado Correctamente');
	    return redirect()->route('personal');
	}

	public function UsuarioPersonal(Request $request)
	{
		$usuario=strtolower($request->username);
		$email=strtolower($request->email);
		
		$user= User::create([ 'username' => $usuario, 'email' => $email, 'password' => bcrypt($request->password), 'remember_token'=>$request->_token, 'roles_id'=>$request->roles_id, 'group_id'=>$request->dpartamento]);

		Personal::find($request->persona_id)->update([ 'user_id'=>$user->id ]);
		
		Session::flash('message-success','Usuario Vinculado Correctamente');
	    return redirect()->route('personal');
	}

	public function salas()
	{	
		$salas=Sala::all();
		return View('installers.salas', ['salas'=>$salas]);
	}

	public function areas()
	{
		$salas=Sala::all();
		$areas=Area::all();
		return View('installers.areas', [ 'areas'=>$areas, 'salas'=>$salas ]);
	}

	public function racks()
	{
		$areas=Area::all();
		$racks=Rack::paginate(10);
		return View('installers.racks', ['racks'=>$racks, 'areas'=>$areas]);
	}

	public function Salaregistro(Request $request)
	{
		Sala::create(['sala'=>$request->galpon,'descripcion'=>$request->descripcion]);
		Session::flash('message-success', 'Sala Registrada Correctamente.');
		return redirect()->route('salas');
	}

	public function AreaReg(Request $request)
	{
		Area::create(['area'=>$request->area, 'sala_id'=>$request->sala_id ]);
		Session::flash('message-success','Exito');
		return redirect()->route('areas');
	}

	public function RackReg(Request $request)
	{
		Rack::create(['rack'=>$request->rack, 'area_id'=>$request->area_id, 'filas'=>$request->filas, 'columnas'=>$request->columnas ]);
		Session::flash('message-success','Exito');
		return redirect()->route('racks');
	}



	public function ViewPersonal(){
		$personal=Personal::all();
		$departamentos=Departamento::where('id','<>','1')->OrderBy('departamento', 'asc')->get();
		$roles=Role::where('id','<>','1')->OrderBy('name', 'asc')->get();
		return View('personal.mostrar')->with(['personal'=> $personal, 'departamentos'=>$departamentos, 'roles'=>$roles, ]);
	}
}