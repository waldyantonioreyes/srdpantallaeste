<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ResultadosLoteriasAnteriore extends Controller
{
    public function getResults(Request $request)
    {

        $q = $request->input('q');

        $resultadosloterias = DB::table('loterias')->select('id', 'descripcion')->get();


        $loteria = DB::table('resultados_loterias')->select('id_loteria', 'num1', 'num2')->where('id_loterias', 'like', "%$q%")->orderBy('created_at', 'desc')->first();



        return view('sitio.sorteosanteriores', compact('resultadosloterias', 'loteria'));
    }
}
