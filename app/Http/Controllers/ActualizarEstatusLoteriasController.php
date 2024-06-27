<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualizarEstatusLoteriasController extends Controller
{
    public function actualizarEstatus()
    {
        $estatus = DB::table('resultados_loterias')
            ->update(['estatus' => 'enabled']);
    }
}
