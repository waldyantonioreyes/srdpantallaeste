<?php

namespace App\Http\Controllers;

use App\Models\resultados_loterias;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TokenLottery;
use PhpParser\Node\Stmt\Return_;

class ApiController extends Controller
{
    public function obtenerResultados()
    {
        
    //prueba

          $fechaInicio = Carbon::now()->subDays(11); // Obtiene la fecha de hace 8 días


        // Obtener la URL actual
        $url = url()->current();

        // Obtener solo la parte del path de la URL
        $path = parse_url($url, PHP_URL_PATH);

        // Obtener el segmento final del path, o sea el token del usuario
        $tokenuser = last(explode('/', $path));
        
// Obtener los IDs de las loterías asociadas a los tokens
$lotteryIds = TokenLottery::select('lottery_id')
    ->join('tokens_api', 'token_lottery.token_id', '=', 'tokens_api.id')
    ->where('tokens_api.token', '=', $tokenuser)
    ->pluck('lottery_id')
    ->toArray();

$resultados = DB::table('resultados_loterias')
    ->join('loterias', 'loterias.id', '=', 'resultados_loterias.id_loterias')
    ->whereIn('resultados_loterias.id_loterias', $lotteryIds)
    ->where('resultados_loterias.created_at', '>=', $fechaInicio)
    ->orderByDesc('created_at')
    ->select(
        'loterias.descripcion',
        'resultados_loterias.id',
        'resultados_loterias.num1',
        'resultados_loterias.num2',
        'resultados_loterias.num3',
        'resultados_loterias.num4',
        'resultados_loterias.num5',
        'resultados_loterias.num6',
        'resultados_loterias.num7',
        'resultados_loterias.num8',
        'resultados_loterias.num9',
        'resultados_loterias.num10',
        'resultados_loterias.num11',
        'resultados_loterias.num12',
        'resultados_loterias.num13',
        'resultados_loterias.num14',
        'resultados_loterias.num15',
        'resultados_loterias.num16',
        'resultados_loterias.num17',
        'resultados_loterias.num18',
        'resultados_loterias.num19',
        'resultados_loterias.num20',
        'resultados_loterias.created_at',
        'resultados_loterias.updated_at'
        // Agrega las columnas que necesites
    )
    ->get();

// Devolver los resultados
return response()->json($resultados);



    }
}

   

   