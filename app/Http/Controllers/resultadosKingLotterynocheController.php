<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resultadosKingLotterynocheController extends Controller
{
    public function resultadosKingLotterynoche()
    {

        $quinielakinglotterynoche = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '70')->orderBy('created_at', 'desc')->first();
        $fechaquinielakinglotterynoche = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '70')->orderBy('created_at', 'desc')->first();


        $lotopoolking730 = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '72')->orderBy('created_at', 'desc')->first();
        $fechalotopoolking730 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '72')->orderBy('created_at', 'desc')->first();



        return view('sorteoskinglottery.sorteosnoche', compact(
            'quinielakinglotterynoche',
            'fechaquinielakinglotterynoche',
            'lotopoolking730',
            'fechalotopoolking730'
        ));
    }
}
