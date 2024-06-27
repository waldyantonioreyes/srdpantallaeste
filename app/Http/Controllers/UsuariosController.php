<?php

namespace App\Http\Controllers;


use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nombre_usuario = Auth::user()->id;

        if ($nombre_usuario == 1) {
            $q = $request->input('q');
            $users = DB::table('users')
                ->select('users.id', 'users.name', 'users.email')
                ->where('users.name', 'like', "%$q%")
                ->orderBy('created_at', 'asc')
                ->paginate(10);


            return view('usuarios.index', compact('users'));
        } else {
            return view('usuarios.no-permission');
        }
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
    public function destroy($user_id)
    {

        // Buscar el usuario a eliminar
        $user = User::where('id', $user_id);

        // Intentar eliminar el usuario
        $user->delete();

        session()->flash('message', 'Usuario Eliminado Correctamente!');

        return redirect('usuarios');
    }
}
