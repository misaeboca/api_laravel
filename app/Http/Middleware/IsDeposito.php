<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Closure;
use Auth;
use Session;

class IsDeposito
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $departamento=strtolower(Auth::user()->departamento->departamento);
        if ( $departamento <> 'todos') {
            if ( $departamento <> 'almacen') {
                Session::flash( 'message-danger' , 'Accion no Permitida');
                return redirect()->route($departamento);
            }    
        }
        return $next($request);
    }
}