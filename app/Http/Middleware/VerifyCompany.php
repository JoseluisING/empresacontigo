<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyCompany
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

        if ($request->user()->id_rol == 1) {
            if (!\App\Models\companies::where('user_id', '=', $request->user()->id)->first()) {
                return redirect()->to(route('registraCompañia'));
            } else {
                return $next($request);
            }
        } elseif ($request->user()->id_rol == 2) {
            return $next($request);
        }
    }
}
