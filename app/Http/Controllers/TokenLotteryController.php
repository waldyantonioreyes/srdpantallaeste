<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TokenLottery;
use App\Http\Requests\TokenLotteryRequest;
use Illuminate\Support\Facades\DB;


/**
 * Class TokenLotteryController
 * @package App\Http\Controllers
 */
class TokenLotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tokenLotteries = TokenLottery::select('tokens_api.*')
        ->join('tokens_api', 'token_lottery.token_id', '=', 'tokens_api.id')
        ->distinct()
        ->get();
    
        $tokenLotterieCantidad = $tokenLotteries->count();

        $cantidadTokens_api = DB::table('tokens_api')
        ->count();
    
            // return $tokenLotterieCantidad;
        
        return view('token-lottery.index', compact('tokenLotteries', 'tokenLotterieCantidad', 'cantidadTokens_api'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $id)
    {
        // $tokens = DB::table('tokens_api')->get();
        $tokens = DB::table('tokens_api')
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('token_lottery')
                ->whereRaw('token_lottery.token_id = tokens_api.id');
        })
        ->get();
    // return $tokens;
        $loterias = DB::table('loterias')->get();
        // return $loterias;
        $tokenLottery = new TokenLottery();
        return view('token-lottery.create', compact('tokenLottery', 'tokens', 'loterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // return $request;
    // Validar los datos del formulario
        $request->validate([
            'token_id' => 'required',
            'lotterias' => 'required|array',
        ]);

        // Obtener el token_id del formulario
        $token_id = $request->token_id;

        // Recorrer las loterías seleccionadas
        foreach ($request->lotterias as $lottery_id) {
            // Verificar si ya existe un registro con las mismas condiciones
            $existingRecord = TokenLottery::where('token_id', $token_id)
                                            ->where('lottery_id', $lottery_id)
                                            ->exists();

            // Si no existe un registro con las mismas condiciones, guardar el nuevo registro
            if (!$existingRecord) {
                // Crear una nueva instancia de TokenLottery
                $tokenLotte = new TokenLottery();
                $tokenLotte->token_id = $token_id;
                $tokenLotte->lottery_id = $lottery_id;

                // Guardar el registro
                $tokenLotte->save();
            }
        }

    // Redirigir con un mensaje
    return redirect('tokenlottery')->with('message', 'Registros guardados correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
         // Buscar el registro de TokenLottery por su ID
        $tokenLotteries = TokenLottery::select('tokens_api.*', 'loterias.*', 'token_lottery.*')
        ->join('tokens_api', 'token_lottery.token_id', '=', 'tokens_api.id')
        ->join('loterias', 'token_lottery.lottery_id', '=', 'loterias.id')
        ->where('tokens_api.asignedto', $id)
        ->get();
        $cantidad = $tokenLotteries->count();

        $loteriasCount = DB::table('loterias')->count();

        // return $loteriasCount;
        // return $tokenLotteries;
        return view('token-lottery.show', compact('tokenLotteries', 'cantidad', 'loteriasCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tokens = $id;
        $loterias = DB::table('loterias')
            ->whereNotIn('id', function ($query) use ($tokens) {
                $query->select('lottery_id')
                    ->from('token_lottery')
                    ->where('token_id', $tokens);
            })
            ->get();

        // return $loterias;
    
        // return $loterias;
        $tokenLottery = new TokenLottery();
        return view('token-lottery.edit', compact('tokenLottery', 'tokens', 'loterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       
    }

    public function destroy($id)
    {
        // return $id;
        TokenLottery::find($id)->delete();
       

        // Redirigir a la misma vista con todos los datos y un mensaje de éxito
    // return redirect()->route('tokenlottery.show')->with('message', 'Registro eliminado correctamente');
         return redirect('tokenlottery')->with('message', 'Registro eliminado correctamente');
    }

 

}
