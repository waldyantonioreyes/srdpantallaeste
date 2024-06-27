<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class NewYork1030pmmController extends Controller
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
        $newyork1030pm = new resultados_loterias();
        $newyork1030pm->id_loterias = 14;
        $newyork1030pm->actualizo = $nombre_usuario;
        $newyork1030pm->num1 = $request->input('num1');
        $newyork1030pm->num2 = $request->input('num2');
        $newyork1030pm->num3 = $request->input('num3');
        $newyork1030pm->created_at = $fechaResultado;
        $newyork1030pm->save();

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
