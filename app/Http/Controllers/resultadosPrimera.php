<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class resultadosPrimera extends Controller
{
    public function resultadosPrimera()
    {

         //Obtener la fecha actual para el estatus de los bolos y comparacion
         date_default_timezone_set("America/Santo_Domingo");

         $fechaActual = new DateTime();
         $fechaResultado = $fechaActual->format('Y-m-d');

        $loto5mas = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6','created_at')->where('id_loterias', '=', '37')->orderBy('created_at', 'desc')->first();
        $fechaloto5mas = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '37')->orderBy('created_at', 'desc')->first();



        return view('sorteosprimera.index', compact(
            'loto5mas',
            'fechaloto5mas',
            'fechaResultado'
        ));
    }
}
