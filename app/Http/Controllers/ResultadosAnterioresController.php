<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class ResultadosAnterioresController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        
        $resultados = DB::table('loterias')->select('*')->paginate(10);

        $resultados_loterias = DB::table('loterias')
            ->join('resultados_loterias', 'loterias.id', '=', 'resultados_loterias.id_loterias')
            ->select('loterias.id', 'loterias.descripcion', 'resultados_loterias.id', 'resultados_loterias.created_at', 'resultados_loterias.updated_at', 'resultados_loterias.actualizo')
            ->where('loterias.descripcion', 'like', "%$q%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

// dd($resultados_loterias);
        return view('admin.resultadosanteriores', compact('resultados_loterias'));
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

        /*$resultados_loterias = DB::table('resultados_loterias')
            ->select('*')
            ->where('id_loterias', '=', $id)
            ->orderBy('created_at', 'desc')
            ->first();
            */


        $resultados_loterias = resultados_loterias::findOrFail($id);

        return view('admin.edit', compact('resultados_loterias'));
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
        $resultados = resultados_loterias::findOrFail($id);

        $resultados->num1 = $request->input('num1');
        $resultados->num2 = $request->input('num2');
        $resultados->num3 = $request->input('num3');
        $resultados->num4 = $request->input('num4');
        $resultados->num5 = $request->input('num5');
        $resultados->num6 = $request->input('num6');
        $resultados->num7 = $request->input('num7');
        $resultados->num8 = $request->input('num8');
        $resultados->num9 = $request->input('num9');
        $resultados->num10 = $request->input('num10');
        $resultados->num11 = $request->input('num11');
        $resultados->num12 = $request->input('num12');
        $resultados->num13 = $request->input('num13');
        $resultados->num14 = $request->input('num14');
        $resultados->num15 = $request->input('num15');
        $resultados->num16 = $request->input('num16');
        $resultados->num17 = $request->input('num17');
        $resultados->num18 = $request->input('num18');
        $resultados->num19 = $request->input('num19');
        $resultados->num20 = $request->input('num20');


        $nombre_usuario = Auth::user()->name;
        $resultados->actualizo = $nombre_usuario;

        $resultados->save();
        session()->flash('message', 'Resultados Actualizados Correctamente!');
        return redirect('resultadosanteriores');
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
