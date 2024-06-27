<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $noticias = DB::table('noticias')->select('id', 'titulo', 'imagen', 'texto')->paginate(10);

        return view('admin.noticias', compact('noticias'));
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

        $noticias = new Noticias();
        $noticias->titulo = $request->input('titulo');
        $noticias->imagen = $request->input('imagen');
        $noticias->texto = $request->input('texto');
        $noticias->save();

        session()->flash('message', 'Noticia Insertada Correctamente!');

        return redirect('noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $noticias = Noticias::findOrFail($id);
        $noticias->titulo = $request->input('titulo');
        $noticias->texto = $request->input('imagen');
        $noticias->texto = $request->input('texto');

        $noticias->save();
        session()->flash('message', 'Noticia Editada Correctamente!');
        return redirect('noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Buscar el atleta a eliminar
        $noticias = Noticias::where('id', $id);

        // Intentar eliminar el atleta
        $noticias->delete();

        return redirect()->route('noticias.index')
            ->with('success', 'La noticia ha sido eliminada correctamente!');
    }
}
