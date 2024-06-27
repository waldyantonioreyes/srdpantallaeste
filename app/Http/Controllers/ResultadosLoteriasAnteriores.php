<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class ResultadosLoteriasAnteriores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $q = $request->input('q');
        $fecha = $request->input('fecha');


        $resultadosloterias = DB::table('loterias')->select('id', 'descripcion')->whereNotIn('id', [44, 45,7,21])->get();
// dd($resultadosloterias);
        $hora = DB::table('resultados_loterias')->select('created_at')
        ->where('id_loterias', '=', $q)->whereDate('created_at', $fecha ?? '2000-06-22')->orderBy('created_at', 'desc')->first();
          // codigo nuevo para ver la descripcin de la loteria 
          $lot= DB::table('loterias')->select('descripcion', 'timeday', 'tanda')->where('id', '=', $q)->orderBy('created_at', 'desc')->first();

// return $lot;
        if($q == 4 || $q == 5){

            $loteria = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1, 2) as num1_partial'), 'num2', 'num3')
            ->where('id_loterias', '=', $q)->whereDate('created_at', $fecha ?? '2000-06-22')->orderBy('created_at', 'desc')->first();
            // codigo nuevo para ver la descripcin de la loteria 
            $lot= DB::table('loterias')->select('descripcion', 'timeday', 'tanda')->where('id', '=', $q)->orderBy('created_at', 'desc')->first();

            
            return view('sitio.sorteosanteriores', compact('resultadosloterias', 'loteria', 'q', 'fecha', 'hora', 'lot'));

        }else{

            $loteria = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4', 'num5', 'num6', 'num7', 'num8', 'num9', 'num10', 'num11', 'num12', 'num13', 'num14', 'num15', 'num16', 'num17', 'num18', 'num19', 'num20')

            ->where('id_loterias', '=', $q)->whereDate('created_at', $fecha ?? '2000-06-22')->orderBy('created_at', 'desc')->first();
            
            // codigo nuevo para ver la descripcin de la loteria ;y poner nombre, y hora de loteria 
            $lot= DB::table('loterias')->select('descripcion', 'timeday', 'tanda')->where('id', '=', $q)->orderBy('created_at', 'desc')->first();
// return $lot;
            return view('sitio.sorteosanteriores', compact('resultadosloterias', 'loteria', 'q', 'fecha', 'hora', 'lot'));

        }      


        //return view('sitio.sorteosanteriores', compact('resultadosloterias', 'loteria', 'q', 'fecha', 'hora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
