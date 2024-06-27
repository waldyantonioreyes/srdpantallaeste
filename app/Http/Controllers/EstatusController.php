<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class EstatusController extends Controller
{
    public function update()
    {
        $nuevoEstatus = 'enabled';

        // Actualizar el campo "estatus" de todos los registros en la tabla       
        //resultados_loterias::whereIn('id_loterias', [44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 73, 74])->update(['estatus' => $nuevoEstatus]);

        resultados_loterias::where('estatus', 'disabled')->update(['estatus' => 'enabled']);


        session()->flash('message', 'Loterías habilitadas exitosamente!');

        return redirect('resultados');
    }
}
