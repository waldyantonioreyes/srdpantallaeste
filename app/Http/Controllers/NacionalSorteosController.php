<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class NacionalSorteosController extends Controller
{
    public function nacionalsorteos()
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');

        $juegapega = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5')->where('id_loterias', '=', '24')->orderBy('created_at', 'desc')->first();
        $fechajuegapega = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '24')->orderBy('created_at', 'desc')->first();

        $ganamas = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '25')->orderBy('created_at', 'desc')->first();
        $fechaganamas = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '25')->orderBy('created_at', 'desc')->first();


        return view('sorteosnacional.index', compact(
            'juegapega',
            'fechajuegapega',
            'ganamas',
            'fechaganamas',
            'fechaResultado'

        ));
    }
}
