<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\resultados_loterias;
use DateTime;


use Illuminate\Support\Facades\Auth;
class BilletesnacionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d');
        //Quiniela Lotedom/ Agarra 4
        $sorteosnacional = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '74')->orderBy('created_at', 'desc')->first();
        $fechasorteosnacional = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '74')->orderBy('created_at', 'desc')->first();

// return $sorteosnacional;

        
        return view('sorteosnacional.sorteobilletenacional', compact(
            'sorteosnacional',
            'fechasorteosnacional',
            'fechaResultado'));
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
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $billetesnacional = new resultados_loterias();
        $billetesnacional->id_loterias = 74;
        $billetesnacional->actualizo = $nombre_usuario;
        $billetesnacional->num1 = $request->input('num1');
        $billetesnacional->num2 = $request->input('num2');
        $billetesnacional->num3 = $request->input('num3');
        $billetesnacional->num4 = $request->input('num4');
        $billetesnacional->created_at = $fechaResultado;
        $billetesnacional->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
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
