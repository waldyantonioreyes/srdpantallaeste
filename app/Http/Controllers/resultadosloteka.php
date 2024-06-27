<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class resultadosloteka extends Controller
{
    public function resultadosLoteka()
    {

        
//Obtener la fecha actual para el estatus de los bolos y comparacion
date_default_timezone_set("America/Santo_Domingo");

$fechaActual = new DateTime();
$fechaResultado = $fechaActual->format('Y-m-d');


        $lotoloteka = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6', 'num7', 'num8','created_at')->where('id_loterias', '=', '38')->orderBy('created_at', 'desc')->first();
        $fechalotoloteka = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '38')->orderBy('created_at', 'desc')->first();
// return $lotoloteka;
        $megachance = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5','created_at')->where('id_loterias', '=', '39')->orderBy('created_at', 'desc')->first();
        $fechamegachance = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '39')->orderBy('created_at', 'desc')->first();

        $repartidera = DB::table('resultados_loterias')->select('num1','created_at')->where('id_loterias', '=', '40')->orderBy('created_at', 'desc')->first();
        $fecharepartidera = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '40')->orderBy('created_at', 'desc')->first();

        $quinielaloteka = DB::table('resultados_loterias')->select('num1', 'num2', 'num3','created_at')->where('id_loterias', '=', '41')->orderBy('created_at', 'desc')->first();
        $fechaquinielaloteka = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '41')->orderBy('created_at', 'desc')->first();

        $toca3 = DB::table('resultados_loterias')->select('num1', 'num2', 'num3','created_at')->where('id_loterias', '=', '42')->orderBy('created_at', 'desc')->first();
        $fechatoca3 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '42')->orderBy('created_at', 'desc')->first();
        return view('sorteosloteka.index', compact(
            'lotoloteka',
            'fechalotoloteka',
            'megachance',
            'fechamegachance',
            'repartidera',
            'fecharepartidera',
            'quinielaloteka',
            'fechaquinielaloteka',
            'toca3',
            'fechatoca3',
            'fechaResultado'
        ));
    }
}
