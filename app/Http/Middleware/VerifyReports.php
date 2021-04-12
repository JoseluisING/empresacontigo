<?php

namespace App\Http\Middleware;

use App\Models\results;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyReports
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
            if (!results::select('users.id', 'results.user_id', 'users.user_id')
                ->join('users', 'users.id', '=', 'results.user_id')
                ->where('users.user_id', '=', Auth::user()->id)
                ->count('users.user_id')) {
                session()->flash('btnCrear', 'ok');
                return redirect()->to(route('dashboard'));
            } else {
                return $next($request);
            }
        } elseif ($request->user()->id_rol == 2) {
            return $next($request);
        }
    }
}
