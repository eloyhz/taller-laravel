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
        if (\Auth::check() && \Auth::user()->esProfesor())   {
            return $next($request);
        }
        return redirect('/error');
    }
}
