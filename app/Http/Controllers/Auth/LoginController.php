<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Redirigir según el tipo de usuario
        if ($user->type == 1) {
            return '/home'; // Redirige a /home si el tipo es 1
        } else {
            //NOTA: REDIRIGE BIEN, LO QUE HAY QUE ASEGURARLO 
            //CON MIDDLEWARE PARA QUE EL USUARIO QUE NO SEA 1 NO PUEDA ENTRAR AL ADMINISTRADOR
            return '/configurations';
            
        }
    }
}
