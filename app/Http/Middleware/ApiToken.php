<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TokenApi;

use function PHPUnit\Framework\isEmpty;

class ApiToken
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
        $tokenapi = DB::table('tokens_api')->where('token', $request->api_token)->first();
       

        if (!$tokenapi || $tokenapi->estatus == 'inactivo') {
            // El token no existe en la tabla, regresa una respuesta Unauthorized
            return response()->json('Unauthorized', 401);
        }
    
        // El token existe en la tabla, continúa con la lógica de tu API
        return $next($request);
    }
}
