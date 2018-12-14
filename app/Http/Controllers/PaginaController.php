<?php
namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Auth;
use Session;
use Cookie;
use App\Models\Pagina;

class PaginaController extends Controller
{
    public function buscarId(Request $request)
    {
     	  $id = $request->id; 
        $post = DB::table('pagina')->where('id', '=', $id)->first();
        return response()->json(
             ['msg'=>'ok',
              'res' => 1,
              'datos'=>$post,
             'code'=>200
             ],
            200);
    }

    public function buscarTodos(Request $request)
    {
     	$id = $request->pag*10; 
        $posts = DB::table('pagina')->orderBy('created_at', 'desc')->limit($id)->get() ;
        
        return response()->json($posts);
    }

    public function crearPagina(Request $request)
    {
        Pagina::create(['titulo' => $request->titulo, 'contenido'=> $request->contenido, 'autor'=>$request->autor]);

        return json_encode(array('msj'=>'Registro Ingresado', 'res'=> 1));
    }


    public function buscarPagina(Request $request)
    {
        $id = $request->id; 
        $post = DB::table('pagina')->where('id', '=', $id)->first();

        return response()->json(
             ['msg'=>'ok',
              'res' => 1,
              'datos'=>$post,
              'code'=>200
             ],
            200);
    }
    public function editarPagina(Request $request)
    {
        Pagina::findOrFail($request->id)->update(['titulo' => $request->titulo, 'contenido'=> $request->contenido, 'autor'=>$request->autor]);
        $cate=[];

        return json_encode(array('msj'=>'Registro Ingresado', 'res'=> 1));
    }
    public function editarMostrarPag(Request $request)
    {
        $datos = DB::table('pagina')->select('*')->where('id','=', $request->id_pag)->get();

        return view('editar_pag', ['datos' => $datos[0]]);
    }

    public function deletePagina(Request $request)
    {
        DB::table('pagina')->where('id','=', $request->id)->delete();
        return json_encode(array('msj'=>'Registro Eliminado', 'res'=> 1));
    }
}
