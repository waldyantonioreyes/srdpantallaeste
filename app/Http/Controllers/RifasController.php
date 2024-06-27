<?php

namespace App\Http\Controllers;

use App\Models\Rifas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('sitio.rifa');
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
    //     $validatedData = $request->validate([
    //         'nombre' => 'required',           
    //         'telefono' => 'required',
    //         'cedula' => 'required|unique:rifas',
    //         'ciudad' => 'required',
    //         'pais' => 'required',            
    //     ]);

    //    // Generar 5 números aleatorios y almacenarlos en un array
    //         $randomNumbers = [];

    //         for ($i = 0; $i < 5; $i++) {
    //             $randomNumbers[] = rand(0,9);
    //         }

    //     $rifas = new Rifas();

    //     $rifas->nombre = $request->input('nombre');       
    //     $rifas->telefono = $request->input('telefono');
    //     $rifas->cedula = $request->input('cedula');
    //     $rifas->ciudad = $request->input('ciudad');
    //     $rifas->pais = $request->input('pais');
    //     $numeroparticipante = $rifas->numparticipante = implode("",$randomNumbers);        
    //     $rifas->save();
    //     return $numeroparticipante;
       
               
    //     return back()->with('mensaje', 'Para completar la trivia síguenos en nuestro canal de Youtube y ya estarás participando!');

    $validatedData = $request->validate([
        'nombre' => 'required',           
        'telefono' => 'required',
        'cedula' => 'required|unique:rifas',
        'ciudad' => 'required',
        'pais' => 'required',            
    ]);

    // Generar 5 números aleatorios únicos
    $randomNumbers = [];
    do {
        $randomNumbers = [];
        for ($i = 0; $i < 5; $i++) {
            $randomNumbers[] = rand(0, 9);
        }
        // Verificar si estos números ya existen en la base de datos
        $existingRifa = Rifas::where('numparticipante', implode('', $randomNumbers))->first();
    } while ($existingRifa);

    $rifas = new Rifas();
    $rifas->nombre = $request->input('nombre');       
    $rifas->telefono = $request->input('telefono');
    $rifas->cedula = $request->input('cedula');
    $rifas->ciudad = $request->input('ciudad');
    $rifas->pais = $request->input('pais');
    $numperoparticipante = $rifas->numparticipante = implode('', $randomNumbers);
    $rifas->save();
   
           
    return back()->with('numperoparticipante', $numperoparticipante)->with('mensaje', 'Para completar la trivia síguenos en nuestro canal de Youtube y ya estarás participando!');

        
       
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
