<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ApiToken;
use App\Models\TokenApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        

        $q = $request->input('q');      
        
            $apis = DB::table('tokens_api')
                ->select('tokens_api.id', 'tokens_api.asignedto', 'tokens_api.token','tokens_api.ip','tokens_api.estatus')
                ->where('tokens_api.asignedto', 'like', "%$q%")
                ->orderBy('id', 'asc')
                ->paginate(6);

        return view('apis.index',compact('apis'));
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

        $randomtoken = Str::random(32);
        
        $apitoken = new TokenApi;
 
        $apitoken->asignedto = $request->input('asignedto');

        $apitoken->token = $randomtoken = Str::random(32);

        $apitoken->ip = $request->input('ip');

        $apitoken->estatus = $request->input('estatus');
 
        $apitoken->save();

        session()->flash('message', 'Token asignado al cliente exitosamente!');

        return redirect('apis');
        

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
        $apitoken = TokenApi::find($id);

        return view('apis.edit',compact('apitoken'));
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
        $apitoken = TokenApi::find($id); 
      
        $apitoken->asignedto = $request->input('asignedto');      

        $apitoken->ip = $request->input('ip');

        $apitoken->estatus = $request->input('estatus');
 
        $apitoken->save();

        session()->flash('message', 'Registro actualizado exitosamente!');

        return redirect('apis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($api_id)
    {
        // Buscar el usuario a eliminar
        $apis = TokenApi::where('id', $api_id);

        // Intentar eliminar el usuario
        $apis->delete();

        session()->flash('message', 'Token Eliminado Correctamente!');

        return redirect('apis');
    }
}
