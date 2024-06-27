<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class SuperKinoController extends Controller
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
        $superkino = new resultados_loterias();
        $superkino->id_loterias = 34;
        $superkino->actualizo = $nombre_usuario;
        $superkino->num1 = $request->input('num1');
        $superkino->num2 = $request->input('num2');
        $superkino->num3 = $request->input('num3');
        $superkino->num4 = $request->input('num4');
        $superkino->num5 = $request->input('num5');
        $superkino->num6 = $request->input('num6');
        $superkino->num7 = $request->input('num7');
        $superkino->num8 = $request->input('num8');
        $superkino->num9 = $request->input('num9');
        $superkino->num10 = $request->input('num10');
        $superkino->num11 = $request->input('num11');
        $superkino->num12 = $request->input('num12');
        $superkino->num13 = $request->input('num13');
        $superkino->num14 = $request->input('num14');
        $superkino->num15 = $request->input('num15');
        $superkino->num16 = $request->input('num16');
        $superkino->num17 = $request->input('num17');
        $superkino->num18 = $request->input('num18');
        $superkino->num19 = $request->input('num19');
        $superkino->num20 = $request->input('num20');
        $superkino->created_at = $fechaResultado;
        $superkino->save();

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
