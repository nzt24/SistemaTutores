<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         if(auth::guard($guard)->check()) {

              if(auth()->user()->rol=='alumno'){
                 return redirect('Alumno');
               }else if(auth()->user()->rol=='tutor'){
                 return redirect('Tutor');
               }else if(auth()->user()->rol=='administrador'){
                 return redirect('Admin');
               }

         }
         return $next($request);
    }
}
