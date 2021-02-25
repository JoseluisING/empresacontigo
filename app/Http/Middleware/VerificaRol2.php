<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificaRol2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->id_rol == 2) {
            return redirect()->to(route('dashboard'));
        } else{
            return $next($request);
        }
    }
}
