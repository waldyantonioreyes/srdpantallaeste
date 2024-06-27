<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class resultadosleidsa extends Controller
{

    public function sorteosleidsa()
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');

        $pega3mas = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '32')->orderBy('created_at', 'desc')->first();
        $fechapega3mas = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '32')->orderBy('created_at', 'desc')->first();

        $lotopool = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5')->where('id_loterias', '=', '33')->orderBy('created_at', 'desc')->first();
        $fechalotopool = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '33')->orderBy('created_at', 'desc')->first();

        $superkinotv = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6', 'num7', 'num8', 'num9', 'num10', 'num11', 'num12', 'num13', 'num14', 'num15', 'num16', 'num17', 'num18', 'num19', 'num20')->where('id_loterias', '=', '34')->orderBy('created_at', 'desc')->first();
        $fechasuperkinotv = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '34')->orderBy('created_at', 'desc')->first();

        $superlotomas = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6', 'num7', 'num8')->where('id_loterias', '=', '35')->orderBy('created_at', 'desc')->first();
        $fechasuperlotomas = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '35')->orderBy('created_at', 'desc')->first();

        return view('sorteosleidsa.index', compact(
            'pega3mas',
            'fechapega3mas',
            'lotopool',
            'fechalotopool',
            'superkinotv',
            'fechasuperkinotv',
            'superlotomas',
            'fechasuperlotomas',
            'fechaResultado'
        ));
    }
}
