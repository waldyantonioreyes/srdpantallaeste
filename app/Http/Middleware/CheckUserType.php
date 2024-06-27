<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
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
        $user = Auth::user();

        if ($user && $user->type == 1) {
            return $next($request);
        }elseif($user && $user->type != 1){
            return redirect()->route('configurations');
        }
        abort(403, 'No tienes permiso para acceder a esta página.');
        // return redirect()->route('configurations')->with('error', 'No tienes permiso para acceder a esta página.');
    
    }
}
