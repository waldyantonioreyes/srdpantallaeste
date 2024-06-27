<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class sorteosangula extends Controller
{
    public function sorteosanguila()
    {

        $loteriasIds = [44, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57];

        $angu = DB::table('resultados_loterias')->where('id_loterias', '=', $loteriasIds)->paginate(7);

        $anguila = DB::table('loterias')
            ->join('resultados_loterias', 'loterias.id', '=', 'resultados_loterias.id_loterias')
            ->select('loterias.*', 'resultados_loterias.num1', 'resultados_loterias.num2', 'resultados_loterias.num3', 'resultados_loterias.created_at')
            ->whereIn('id_loterias', [44, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57])
            ->orderByDesc('resultados_loterias.created_at')
            ->paginate(13);


        /*$anguilla = DB::table('loterias')
            ->join('resultados_loterias', 'loterias.id', '=', 'resultados_loterias.id_loterias')
            ->select('loterias.*', 'resultados_loterias.num1', 'resultados_loterias.num2', 'resultados_loterias.num3', 'resultados_loterias.num4', 'resultados_loterias.created_at', 'resultados_loterias.id_loterias')
            ->where(function ($query) {
                $query->where('resultados_loterias.id_loterias', '=', '44')
                    ->orWhere('resultados_loterias.id_loterias', '=', '45');
            })->orderBy('resultados_loterias.created_at', 'desc') // Agregamos esta línea para ordenar por id de forma descendente
            ->paginate(10);*/

        $anguilla = DB::table('loterias')
            ->join('resultados_loterias', 'loterias.id', '=', 'resultados_loterias.id_loterias')
            ->select('loterias.*', 'resultados_loterias.num1', 'resultados_loterias.num2', 'resultados_loterias.num3', 'resultados_loterias.num4', 'resultados_loterias.created_at', 'resultados_loterias.id_loterias')
            ->where(function ($query) {
                $query->where('resultados_loterias.id_loterias', '=', '44');
            })->orderBy('resultados_loterias.created_at', 'desc') // Agregamos esta línea para ordenar por id de forma descendente
            ->paginate(13);



        $anguillalottery = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '44')->orderBy('created_at', 'desc')->first();
        $fechaanguillalottery = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '44')->orderBy('created_at', 'desc')->first();

        $anguillacuarteta = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '45')->orderBy('created_at', 'desc')->first();
        $fechaanguillacuarteta = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '45')->orderBy('created_at', 'desc')->first();

        $anguila1pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '46')->orderBy('created_at', 'desc')->first();
        $fechaanguila1pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '46')->orderBy('created_at', 'desc')->first();

        $anguilacuarteta1pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '47')->orderBy('created_at', 'desc')->first();
        $fechaanguilacuarteta1pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '47')->orderBy('created_at', 'desc')->first();

        $anguila6pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '48')->orderBy('created_at', 'desc')->first();
        $fechaanguila6pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '48')->orderBy('created_at', 'desc')->first();

        $anguilacuarteta5pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5')->where('id_loterias', '=', '49')->orderBy('created_at', 'desc')->first();
        $fechaanguilacuarteta5pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '49')->orderBy('created_at', 'desc')->first();

        $anguila9pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3')->where('id_loterias', '=', '50')->orderBy('created_at', 'desc')->first();
        $fechaanguila9pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '50')->orderBy('created_at', 'desc')->first();

        $anguilacuarteta9pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '51')->orderBy('created_at', 'desc')->first();
        $fechaanguilacuarteta9pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '35')->orderBy('created_at', 'desc')->first();

        return view('sorteosanguila.index', compact(
            'anguillalottery',
            'fechaanguillalottery',
            'anguillacuarteta',
            'fechaanguillacuarteta',
            'anguila1pm',
            'fechaanguila1pm',
            'anguilacuarteta1pm',
            'fechaanguilacuarteta1pm',
            'anguila6pm',
            'fechaanguila6pm',
            'anguilacuarteta5pm',
            'fechaanguilacuarteta5pm',
            'anguila9pm',
            'fechaanguila9pm',
            'anguilacuarteta9pm',
            'fechaanguilacuarteta9pm',
            'anguila'
        ));
    }
}
