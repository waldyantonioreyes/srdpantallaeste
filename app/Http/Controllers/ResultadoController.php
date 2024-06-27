<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\Resultado;
use App\Models\resultados_loterias;
use Carbon\Carbon;
use Exception;

class ResultadoController extends Controller
{

    public function showImportForm()
    {
        return view('import-form');
    }

    public function import(Request $request)
    {

        try {
            $archivo = $request->file('archivo');
            $csv = Reader::createFromPath($archivo->getPathname(), 'r');
            $csv->setHeaderOffset(0);


            foreach ($csv as $fila) {


                $resultado = new resultados_loterias;
                $resultado->id_loterias = $fila['id_loterias'];
                $resultado->num1 = $fila['num1'];
                $resultado->num2 = $fila['num2'];
                $resultado->num3 = $fila['num3'];
                $resultado->num4 = !empty($fila['num4']) ? $fila['num4'] : null;
                $resultado->num5 = !empty($fila['num5']) ? $fila['num5'] : null;
                $resultado->num6 = !empty($fila['num6']) ? $fila['num6'] : null;
                $resultado->num7 = !empty($fila['num7']) ? $fila['num7'] : null;
                $resultado->num8 = !empty($fila['num8']) ? $fila['num8'] : null;
                $resultado->num9 = !empty($fila['num9']) ? $fila['num9'] : null;
                $resultado->num10 = !empty($fila['num10']) ? $fila['num10'] : null;
                $resultado->num11 = !empty($fila['num11']) ? $fila['num11'] : null;
                $resultado->num12 = !empty($fila['num12']) ? $fila['num12'] : null;
                $resultado->num13 = !empty($fila['num13']) ? $fila['num13'] : null;
                $resultado->num14 = !empty($fila['num14']) ? $fila['num14'] : null;
                $resultado->num15 = !empty($fila['num15']) ? $fila['num15'] : null;
                $resultado->num16 = !empty($fila['num16']) ? $fila['num16'] : null;
                $resultado->num17 = !empty($fila['num17']) ? $fila['num17'] : null;
                $resultado->num18 = !empty($fila['num18']) ? $fila['num18'] : null;
                $resultado->num19 = !empty($fila['num19']) ? $fila['num19'] : null;
                $resultado->num20 = !empty($fila['num20']) ? $fila['num20'] : null;

                // Asigna los demás campos según el orden en el archivo CSV

                // Formatear el valor de created_at usando Carbon
                $resultado->created_at = Carbon::createFromFormat('d/m/Y', $fila['created_at']);

                $resultado->actualizo = $fila['actualizo'];
                $resultado->save();
            }
        }

        //catch exception
        catch (Exception $e) {

            return redirect()->back()->with('success', 'Los resultados han sido importados correctamente.');
        }
    }
}
