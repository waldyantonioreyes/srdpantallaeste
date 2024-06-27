<?php

namespace App\Http\Controllers;

use App\Models\Rifas;
use Illuminate\Http\Request;

class ParticipantesRifaController extends Controller
{
    
    public function index(){

        $participantes = Rifas::all();
         //Datatable Ventas
         foreach($participantes as $participante){
            
            $nombre = $participante->nombre;
            $apellido = $participante->apellido;
            $telefono = $participante->telefono;
            $cedula = $participante->cedula;
            $ciudad = $participante->ciudad;
            $pais = $participante->pais;
            $numparticipante = $participante->numparticiapnte;
            


        }

 
         $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                 <i class="fa fa-lg fa-fw fa-pen"></i>
             </button>';
         $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                   <i class="fa fa-lg fa-fw fa-trash"></i>
               </button>';
         $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>';
 
         $heads = [                      
             'Nombre',
             'Apellido',
             'Telefono',
             'Cedula',
             'Ciudad',
             'Pais',
             'Participante'
            
         ];
 
         $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                 <i class="fa fa-lg fa-fw fa-pen"></i>
             </button>';
 
         $config = [
             'data' => [
                 [$participante->nombre, $participante->apellido,$participante->telefono,$participante->cedula,$participante->ciudad,$participante->pais,$participante->numparticiapnte . $btnEdit . $btnDelete . $btnDetails . '</nobr>'],               
             ],
             'order' => [[1, 'asc']],
             'columns' => [null, null, null, ['orderable' => false]],
         ];
         
         
         return view('admin.rifas',compact('participantes','heads', 'btnEdit', 'config','participantes'));


    }
    


}
