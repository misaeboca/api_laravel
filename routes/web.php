<?php
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Pagina;

//Para logueo
Route::get('/login', ['as'=>'login', function(){ return view('auth.login'); }]);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@Logout']);
Route::post('/logueando', 'Auth\LoginController@Login')->name('user.login');
Route::any('/logout', ['uses' => 'Auth\LoginController@Logout'])->name('logout');

Route::get('/', function () {
	$datos = DB::table('post')->select('*')->get();
    return view('index', ['datos' => $datos]);
});
Route::get('/home', function () {
	$datos = DB::table('post')->select('*')->get();
    return view('index', ['datos' => $datos]);
});

Route::get('/busqueda', function () {
	return view('busqueda');
});
Route::get('/mostrar', function () {
	$post = Post::all();
    return View('mostrar', ['post' => $post]);
});

//Ruta hacia el metodo que me busca por id
Route::any('/post', 'HomeController@post');
Route::any('/post/{id}', 'PostController@buscarId', function () {

});
Route::get('/buscar/{id}', 'PostController@buscarPost', function () {

});
//Ruta hacia el metodo que busca todos con paginacion
Route::get('/posts/{pag}', 'PostController@buscarTodos', function () {
	
});
//registrar_blog
Route::any('/registrar_post', 'PostController@crearPost', function () {
	
});
//registrar_blog
Route::any('/buscar_post', 'PostController@buscarPost', function () {
	
});
Route::any('/editar_post', 'PostController@editarPost', function () {
});
Route::any('/editar_mostrar', 'PostController@editarMostrar', function () {
});
Route::any('/delete_post', 'PostController@deletePost', function () {
});

//Paginas

Route::get('/paginas', function () {
	$post = Pagina::all();
    return View('pagina', ['post' => $post]);
});

Route::any('/registrar_pagina', 'PaginaController@crearPagina', function () {
	
});

Route::any('editar_mostrar_pag', 'PaginaController@editarMostrarPag', function () {
});
Route::any('/editar_pagina', 'PaginaController@editarPagina', function () {
});
Route::any('/delete_pagina', 'PaginaController@deletePagina', function () {
});

/***Visualizar Post***/
Route::any('/post_mostrar', 'PostController@postMostrar', function () {
});

Route::get('/faker', function () {
	factory(App\Moldels\Post::class, 3)->create();
});

Route::any('/categorias', 'PostController@categorias', function () {
});
Route::get('/presentacion', function () {
    return View('presentacion');
});
Route::any('/usuarios', 'UserController@usuarios', function () {
});
Route::any('/usuario_baja', 'UserController@editar', function () {
});
Route::any('/portada', 'PostController@postList', function () {
});
Route::any('/post_mostrar_list', 'PostController@postMostrarList', function () {
});

Route::get('/index_usuarios', function () {
    $post = Post::all();
	return view('index_usuarios', ['datos' => $post]);
});

Route::any('/usuarios_activar', 'UserController@activar', function () {
});
Route::any('/usuarios_inactivar', 'UserController@inactivar', function () {
});