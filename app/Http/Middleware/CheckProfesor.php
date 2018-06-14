<?php

namespace App\Http\Middleware;

use Closure;

class CheckProfesor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('esProfesor'))  {   // si no existe la sesion
            $request->session()->put('esProfesor', \Auth::user()->esProfesor());  // entonces se asigna
        }
        if ($request->session()->get('esProfesor'))   {
            return $next($request);
        }
        return redirect('/error');
    }
}
