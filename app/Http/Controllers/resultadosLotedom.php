<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class resultadosLotedom extends Controller
{
    public function sorteoslotedom()
    {

        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');

        $quemaitomayor = DB::table('resultados_loterias')->select('num1')->where('id_loterias', '=', '29')->orderBy('created_at', 'desc')->first();
        $fechaquemaitomayor = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '29')->orderBy('created_at', 'desc')->first();

        $superpale = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '30')->orderBy('created_at', 'desc')->first();
        $fechasuperpale = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '30')->orderBy('created_at', 'desc')->first();

        $agarra4 = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '31')->orderBy('created_at', 'desc')->first();
        $fechaagarra4 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '31')->orderBy('created_at', 'desc')->first();

        $quinielalotedom = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();
        $fechaquinielalotedom = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();

        return view('sorteoslotedom.index', compact(
            'quemaitomayor',
            'fechaquemaitomayor',
            'superpale',
            'fechasuperpale',
            'agarra4',
            'fechaagarra4',
            'quinielalotedom',
            'fechaquinielalotedom',
            'fechaResultado'
        ));
    }
}
