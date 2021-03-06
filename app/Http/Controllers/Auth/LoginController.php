<<<<<<< HEAD
<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use Auth, Validator, Redirect, Session;
use App\Models\Post;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    /**#//protected $redirectTo = '/home';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function Login(Request $request){

        if ( Auth::attempt([ 'username' =>$request->email, 'password' =>$request->password, 'status'=>'1' ] , $request->has('remember')) )
        {

            if(Auth::user()->tipo==1){
                $datos = DB::table('post')->select('*')->get();
                return view('index_usuarios', ['datos' => $datos]);
            }else if(Auth::user()->tipo==2){
                $post = Post::all();
                return view('index_usuarios', ['datos' => $post]);
            }
          
        }
        elseif (Auth::attempt([ 'email' =>$request->email, 'password' => $request->password, 'status' => '1', ] , $request->has('remember') ) )
        {
            if(Auth::user()->tipo==1){
                $post = Post::all();
                return view('index_usuarios', ['datos' => $post]);
            }else if (Auth::user()->tipo==2){
                $post = Post::all();
                return view('index_usuarios', ['datos' => $post]);
            }
        
        }
        else{
            $rules = [ 'email' => 'required', 'password' => 'required', ];
            
            $messages = [ 'email.required' => 'Este campo es requerido', 'password.required' => 'El campo password es requerido', ];
            
            $validator = Validator::make($request->all(), $rules, $messages);
            Session::flash( 'message-danger' , 'Coincidencias No Encontradas' );
            return redirect('/login')->withErrors($validator)->withInput();
        }
    }


    public function Logout()
    {
        Auth::logout();
        Session::flash('message-info','Session Cerrada Correctamente');
        return View('auth.login');
    }
    public function registrarse(Request $request){
        $user = $request->usuario;
        $email = $request->email;
        $password =  bcrypt($request->password);

        User::create(['username' => $user, 'email'=> $email, 'password'=>$password, 'tipo' => '2', 'status' =>1]);

        return redirect('/login');
    }
     public function registrar_usuario(Request $request){
        $user = $request->usuario;
        $email = $request->email;
        $password =  bcrypt($request->password);
        $tipo = $request->tipo;

        User::create(['username' => $user, 'email'=> $email, 'password'=>$password, 'tipo' =>$tipo, 'status' =>1]);

        return json_encode(array('msj'=>'Registro Ingresado', 'res'=> 1));
    }
}
=======
<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use Auth, Validator, Redirect, Session;
use App\Models\Post;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    /**#//protected $redirectTo = '/home';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function Login(Request $request){
        if ( Auth::attempt([ 'username' => $request->email, 'password' => $request->password, 'status'=>'1' ] , $request->has('remember') ) ) {
            $post = Post::all();
            return view('index', ['post' => $post]);
        }
        elseif (Auth::attempt([ 'email' => $request->email, 'password' => $request->password, 'status' => '1', ] , $request->has('remember') ) )
        {
            $post = Post::all();
            return view('index', ['post' => $post]);
        }
        else{
            $rules = [ 'email' => 'required', 'password' => 'required', ];
            
            $messages = [ 'email.required' => 'Este campo es requerido', 'password.required' => 'El campo password es requerido', ];
            
            $validator = Validator::make($request->all(), $rules, $messages);
            Session::flash( 'message-danger' , 'Coincidencias No Encontradas' );
            return redirect('/login')->withErrors($validator)->withInput();
        }
    }


    public function Logout()
    {
        Auth::logout();
        Session::flash('message-info','Session Cerrada Correctamente');
        return View('auth.login');
    }
}
>>>>>>> cc4bb5d81543455d25d4c9f486e4c06423b413dc
