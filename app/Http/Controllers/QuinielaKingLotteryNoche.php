<?php

namespace App\Http\Controllers;

use App\Models\resultados_loterias;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuinielaKingLotteryNoche extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //Este es el philisburg noche, no cambiamos el nombre para no romper la logica del programa       


        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $quinielaking730 = new resultados_loterias();
        $quinielaking730->id_loterias = 70;
        $quinielaking730->actualizo = $nombre_usuario;
        $quinielaking730->num1 = $request->input('num1');
        $quinielaking730->num2 = $request->input('num2');
        $quinielaking730->num3 = $request->input('num3');
        $quinielaking730->created_at = $fechaResultado;
        $quinielaking730->save();

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
