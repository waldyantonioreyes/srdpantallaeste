<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class resultadosKingLotteryController extends Controller
{
    public function resultadosKingLottery()
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');

        $quinielakinglottery = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '43')->orderBy('created_at', 'desc')->first();
        $fechaquinielakinglottery = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '43')->orderBy('created_at', 'desc')->first();

        $quinielakinglottery = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '43')->orderBy('created_at', 'desc')->first();
        $fechaquinielakinglottery = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '43')->orderBy('created_at', 'desc')->first();

        $lotopoolking1230 = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '71')->orderBy('created_at', 'desc')->first();
        $fechalotopoolking1230 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '71')->orderBy('created_at', 'desc')->first();



        return view('sorteoskinglottery.index', compact(
            'quinielakinglottery',
            'fechaquinielakinglottery',
            'lotopoolking1230',
            'fechalotopoolking1230',
            'fechaResultado'

        ));
    }
}
