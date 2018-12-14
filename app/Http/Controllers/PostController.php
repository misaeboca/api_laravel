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
use App\Models\Post;

class PostController extends Controller
{
    public function buscarId(Request $request)
    {
     	$id = $request->id; 
        $post = DB::table('post')->where('id', '=', $id)->first();
        $categoria = DB::table('post_categoria')->where('id_posts', '=', $id)->first();

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
        $posts = DB::table('post')->orderBy('created_at', 'desc')->limit($id)->get() ;
        
        return response()->json($posts);
    }

    public function crearPost(Request $request)
    {
        Post::create(['titulo' => $request->titulo, 'contenido'=> $request->contenido, 'autor'=>$request->autor]);
        $id = DB::table('post')->select('id')->orderBy('id', 'desc')->limit(1)->get();
        $cate=[];

        foreach ($request->categoria as $key => $v) {
            DB::table('post_categoria')->insert(array('id_posts' => $id[0]->id, 'id_categoria' => $v));
        }
        return json_encode(array('msj'=>'Registro Ingresado', 'res'=> 1));
    }


    public function buscarPost(Request $request)
    {
        $id = $request->id; 
        $post = DB::table('post')->where('id', '=', $id)->first();
        $categoria = DB::table('post_categoria')->where('id_posts', '=', $id)->get();

        return response()->json(
             ['msg'=>'ok',
              'res' => 1,
              'datos'=>$post,
              'categorias'=>$categoria,
             'code'=>200
             ],
            200);
    }
    public function editarPost(Request $request)
    {
        Post::findOrFail($request->id)->update(['titulo' => $request->titulo, 'contenido'=> $request->contenido, 'autor'=>$request->autor]);
        $cate=[];

        DB::table('post_categoria')->where('id_posts','=', $request->id)->delete();
        foreach ($request->categoria as $key => $v) {
            DB::table('post_categoria')->insert(array('id_posts' => $request->id, 'id_categoria' => $v));
        }

        return json_encode(array('msj'=>'Registro Ingresado', 'res'=> 1));
    }
    public function editarMostrar(Request $request)
    {
        $datos = DB::table('post')->select('*')->where('id','=', $request->id)->get();
        $cate  = DB::table('post_categoria')->where('id_posts','=', $request->id)->select('*')->orderBy('id_categoria', 'asc')->get();


        return view('editar_post', ['datos' => $datos[0], 'cate' => $cate]);
    }

    public function deletePost(Request $request)
    {
        DB::table('post')->where('id','=', $request->id)->delete();
        return json_encode(array('msj'=>'Registro Eliminado', 'res'=> 1));
    }
}
