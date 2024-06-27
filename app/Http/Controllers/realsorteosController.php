<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class realsorteosController extends Controller
{
 
    public function realsorteos(Request $request)
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');

        $fecha = $request->fecha;

        $lotopoolreal = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '18')->orderBy('created_at', 'desc')->first();
        $fechapoolreal = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '18')->orderBy('created_at', 'desc')->first();

        $pega4real = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '19')->orderBy('created_at', 'desc')->first();
        $fechapega4real = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '19')->orderBy('created_at', 'desc')->first();

        $lotoreal = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6')->where('id_loterias', '=', '21')->orderBy('created_at', 'desc')->first();
        $fechalotoreal = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '21')->orderBy('created_at', 'desc')->first();

        $nuevayolreal = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'extra')->where('id_loterias', '=', '22')->orderBy('created_at', 'desc')->first();
        $fechanuevayolreal = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '22')->orderBy('created_at', 'desc')->first();

        $tufechareal = DB::table('resultados_loterias')->select('num1')->where('id_loterias', '=', '23')->orderBy('created_at', 'desc')->first();
        $fechatufechareal = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '23')->orderBy('created_at', 'desc')->first();
// Nuevo codigo para el loto real el sorteo 
        $lotorealsorteo = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6')->where('id_loterias', '=', '73')->orderBy('created_at', 'desc')->first();
        $fechalotorealsorteo = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '73')->orderBy('created_at', 'desc')->first();


        return view('sorteoslotoreal.index', compact(
            'lotopoolreal',
            'fechapoolreal',
            'pega4real',
            'fechapega4real', 
            'lotoreal',
            'fechalotoreal',
            'nuevayolreal',
            'fechanuevayolreal',
            'tufechareal',
            'fechatufechareal',
            'lotorealsorteo',
            'fechalotorealsorteo',
            'fechaResultado'
        ));
    }
}
