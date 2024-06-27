<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class LotoPoolRealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $lotopoolreal = new resultados_loterias();
        $lotopoolreal->id_loterias = 18;
        $lotopoolreal->actualizo = $nombre_usuario;
        $lotopoolreal->num1 = $request->input('num1');
        $lotopoolreal->num2 = $request->input('num2');
        $lotopoolreal->num3 = $request->input('num3');
        $lotopoolreal->num4 = $request->input('num4');
        $lotopoolreal->created_at = $fechaResultado;
        $lotopoolreal->save();

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
