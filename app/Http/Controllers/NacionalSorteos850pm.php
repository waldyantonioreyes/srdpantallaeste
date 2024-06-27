<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NacionalSorteos850pm extends Controller
{

    public function sorteosnacional850pm()
    {

        $loterianacional = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5')->where('id_loterias', '=', '26')->orderBy('created_at', 'desc')->first();
        $fechaloterianacional = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '26')->orderBy('created_at', 'desc')->first();

        $billetedomingo = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '25')->orderBy('created_at', 'desc')->first();
        $fechabilletedomingo = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '25')->orderBy('created_at', 'desc')->first();


        return view('sorteosnacional850pm.index', compact(
            'loterianacional',
            'fechaloterianacional'

        ));
    }
}
