<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;

class EstatusAnguilla extends Controller
{
    public function update()
    {
        $nuevoEstatus = 'enabled';

        // Actualizar el campo "estatus" de todos los registros en la tabla de anguilla y cuarteta
        resultados_loterias::where('id_loterias')->update(['estatus' => $nuevoEstatus]);
        //resultados_loterias::whereIn('id_loterias', [44, 45])->update(['estatus' => $nuevoEstatus]);


        session()->flash('message', 'Loterías habilitadas exitosamente!');

        return redirect('resultados');
    }
}
