<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


//Para crear un  Middleware  perzonalizado DE URL LOGIN tenemos que cargar el Auth 
use Illuminate\Support\Facades\Auth;


class PrivateMiddlewareAlex
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() == false){
           
            $request->session()->flash('css','warning');
            $request->session()->flash('mensaje','No tiene permiso para entrar en la página, ¡Importante vengo del Middleware!');
            return redirect()->route('AlexPersonalizedSecurityAlex'); //Enviamos el mensaje flash a la vista FLASH 3

        }
        return $next($request);
    }
}
