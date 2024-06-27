<?php

namespace App\Http\Controllers;

use App\Models\resultados_loterias;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtener la fecha actual para el estatus de los bolos y comparacion
        date_default_timezone_set("America/Santo_Domingo");

        // $fechaActual = new DateTime();
        // $fechaResultado = $fechaActual->format('Y-m-d');
        $url = 'http://worldtimeapi.org/api/timezone/America/Santo_Domingo';
        $response = file_get_contents($url);

        if ($response !== false) {
            // Decodificar la respuesta JSON
            $data = json_decode($response, true);

            // Obtener la hora actual en formato ISO8601
            $horaServidor = $data['datetime'];

            // Crear un objeto DateTime desde la hora del servidor
            $fechaActual = new DateTime($horaServidor);

            // Formatear la fecha según sea necesario
            $fechaResultado = $fechaActual->format('Y-m-d');

        //     echo "La fecha y hora actual en Santo Domingo es: " . $fechaResultado;
        // } else {
        //     echo "No se pudo obtener la hora del servidor.";
        }
 
       
        // // Obtener el elemento de la base de datos
        // $elemento = DB::table('resultados_loterias')
        //     ->select('created_at')
        //     ->where('id_loterias', '=', '1')
        //     ->orderBy('id', 'desc')->first();
        
        // // Obtener la fecha de creación del elemento y ajustarla a la zona horaria de Santo Domingo
        // $fechaCreacion = Carbon::parse($elemento->created_at)->setTimezone('America/Santo_Domingo');
        
        // // Obtener la fecha y hora actuales en la zona horaria de Santo Domingo
        // $fechaActual = Carbon::now('America/Santo_Domingo');
        
        // // Calcular la diferencia total en horas
        // $diferenciaTotalHoras = $fechaActual->diffInHours($fechaCreacion);
        
        // // Verificar si han pasado 24 horas
        // if ($diferenciaTotalHoras >= 24) {
        //     // Han pasado 24 horas o más
        //     $veinticuatro = true;
        // } else {
        //     // No han pasado 24 horas
        //     $veinticuatro = false;
        // }
        
        // dd($veinticuatro) ;
        
  
        
        function hanPasado24Horas($elemento) {
            // Si no hay resultados, retornar false
            if (empty($elemento)) {
                return false;
            }
        
            // Obtener la fecha de creación del elemento y ajustarla a la zona horaria de Santo Domingo
            $fechaCreacion = Carbon::parse($elemento->created_at)->setTimezone('America/Santo_Domingo');
        
            // Obtener la hora actual en la zona horaria de Santo Domingo desde una fuente externa
            $url = 'http://worldtimeapi.org/api/timezone/America/Santo_Domingo';
            $response = file_get_contents($url);
        
            if ($response !== false) {
                // Decodificar la respuesta JSON
                $data = json_decode($response, true);
        
                // Obtener la hora actual en formato ISO8601
                $horaServidor = $data['datetime'];
        
                // Crear un objeto Carbon desde la hora del servidor
                $fechaActual = Carbon::parse($horaServidor);
        
                // Calcular la diferencia total en horas
                $diferenciaTotalHoras = $fechaActual->diffInHours($fechaCreacion);
        
                // Verificar si han pasado 24 horas
                return $diferenciaTotalHoras >= 24;
            } else {
                // Si no se pudo obtener la hora del servidor, retornar false
                return false;
            }
        }
       
        
     
        // function hanPasado24Horas($elemento) {
        //     // Si no hay resultados, retornar false
        //     if (empty($elemento)) {
        //         return false;
        //     }
        //     $url = 'http://worldtimeapi.org/api/timezone/America/Santo_Domingo';
        //     $response = file_get_contents($url);
    
        //     if ($response !== false) {
        //         // Decodificar la respuesta JSON
        //         $data = json_decode($response, true);
    
        //         // Obtener la hora actual en formato ISO8601
        //         $horaServidor = $data['datetime'];
    
        //         // Crear un objeto DateTime desde la hora del servidor
        //         $fechaActual = new DateTime($horaServidor);
    
        //         // Formatear la fecha según sea necesario
        //         $fechaResultado = $fechaActual->format('Y-m-d');
    
        //     //     echo "La fecha y hora actual en Santo Domingo es: " . $fechaResultado;
        //     // } else {
        //     //     echo "No se pudo obtener la hora del servidor.";
        //     }
        // //     // Obtener la fecha de creación del elemento y ajustarla a la zona horaria de Santo Domingo
        //     $fechaCreacion = Carbon::parse($elemento->created_at)->setTimezone('America/Santo_Domingo');
        
        // //     // Obtener la fecha y hora actuales en la zona horaria de Santo Domingo
        // //     $fechaActual = Carbon::now('America/Santo_Domingo');
        // //     // $fechaResultado = $fechaActual->format('Y-m-d');
        // // // Formatear la fecha en el formato 'ymd'
        // //     $fechaResultado = $fechaActual->format('Y-m-d');
        //     // Calcular la diferencia total en horas
        //     $diferenciaTotalHoras = $fechaActual->diffInHours($fechaCreacion);
        
        //     // Verificar si han pasado 24 horas
        //     return $diferenciaTotalHoras >= 24;
        // }
        
        // Real
        // Consulta para obtener los datos del último elemento registrado de la real
        $real12pm = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '1')->orderBy('id', 'DESC')->first();
        $veinticuatroreal = hanPasado24Horas($real12pm);

        // nacional conteo regresivo

        $nacional = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '2')->orderBy('id', 'DESC')->first();
        $veinticuatronacional = hanPasado24Horas($nacional);
        $nacional850 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '3')->orderBy('id', 'DESC')->first();
        $veinticuatronacional850 = hanPasado24Horas($nacional850);

        // king
        $veinticuatroking = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '4')->orderBy('id', 'DESC')->first();
        $veinticuatroking1230 = hanPasado24Horas($veinticuatroking);
        $veinticuatroking1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '5')->orderBy('id', 'DESC')->first();
        $veinticuatroking730 = hanPasado24Horas($veinticuatroking1);

    // leidsa  
        $leids = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '6')->orderBy('id', 'DESC')->first();
        $veinticuatroleids = hanPasado24Horas($leids);
 
        // lotedom
        $fechaquinielalotedom = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '36')->orderBy('id', 'DESC')->first();
        $veinticuatrofechaquinielalotedom = hanPasado24Horas($fechaquinielalotedom);
        // dd($veinticuatrofechaquinielalotedom);
 
        // primera
        $einticuatroprimera1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '8')->orderBy('id', 'DESC')->first();
        $veinticuatroprimera12 = hanPasado24Horas($einticuatroprimera1);
        $einticuatroprimera2 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '9')->orderBy('id', 'DESC')->first();
        $veinticuatroprimera8 = hanPasado24Horas($einticuatroprimera2);

        // loteka 
        $veinticuatrolotek1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '10')->orderBy('id', 'DESC')->first();
        $veinticuatrolotek = hanPasado24Horas($veinticuatrolotek1);
        
        // la suerte 
        $veinticuatrolasuerte1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '11')->orderBy('id', 'DESC')->first();
        $veinticuatrolasuerte1230 = hanPasado24Horas($veinticuatrolasuerte1);
        $veinticuatrolasuerte2 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '12')->orderBy('id', 'DESC')->first();
        $veinticuatrolasuerte6 = hanPasado24Horas($veinticuatrolasuerte2);

        // newyork 
        $veinticuatronewyork1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '13')->orderBy('id', 'DESC')->first();
        $veinticuatronewyork230 = hanPasado24Horas($veinticuatronewyork1);
        $veinticuatronewyork2 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '14')->orderBy('id', 'DESC')->first();
        $veinticuatronewyork1030 = hanPasado24Horas($veinticuatronewyork2);

        // florida 
        $veinticuatroflorida1 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '15')->orderBy('id', 'DESC')->first();
        $veinticuatroflorida130 = hanPasado24Horas($veinticuatroflorida1);
        $veinticuatroflorida2 = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '16')->orderBy('id', 'DESC')->first();
        $veinticuatroflorida940 = hanPasado24Horas($veinticuatroflorida2);
        
 

        //Loto Real
        $real12pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '1')->get();
 
        //Loteria Nacional
        $nacional230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '2')->get();
        $nacional850pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '3')->get();

        //King Lottery
        //$king1230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '4')->get();
        $king1230pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1, 2) as num1_partial'), 'num2', 'num3', 'created_at')
            ->where('id_loterias', '=', '4')->get();

        $king730pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1, 2) as num1_partial'), 'num2', 'num3', 'created_at')
            ->where('id_loterias', '=', '5')->get();

        //Leidsa
        $leidsa = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '6')->get();

        //Lotedom
        $lotedom = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '7')->get();

        //La Primera
        $primera12pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '8')->get();
        $primera8pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '9')->get();

        //Loteka
        $loteka = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '10')->get();

        //La Suerte Dominicana
        $lasuerte1230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '11')->get();
        $lasuerte6pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '12')->get();

        //New York Lottery
        $newyork230pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1,2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '13')->get();
        $newyork1030pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1,2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '14')->get();

        //Florida Lottery
        $florida130pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1,2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '15')->get();
        $florida940pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1,2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '16')->get();

        //Quiniela Lotedom/ Agarra 4
        $quinielalotedom = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();
        // $fechaquinielalotedom = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();




        //Para la marquee
        // Real     
        

         function anteriores($idloteria){

            $consulta = DB::table('resultados_loterias')
            ->select('num1','num2','num3','created_at')
            ->where('id_loterias', '=', $idloteria)
            ->orderBy('id', 'DESC')
            ->offset(1) // Saltar el último registro
            ->limit(1) // Limitar a un solo registro
            ->first(); 

            return $consulta;
         }

         $real12anterior = anteriores(1);

         $nacionalanterior = anteriores(2);

         $leidsaanterior = anteriores(6);

         $primeraanterior = anteriores(8);
                
       
        return view('sitio.index', compact(
            'real12pm',
            'nacional230pm',
            'nacional850pm',
            'king1230pm',
            'king730pm',
            'leidsa',
            'lotedom',
            'primera12pm',
            'primera8pm',
            'loteka',
            'lasuerte1230pm',
            'lasuerte6pm',
            'newyork230pm',
            'newyork1030pm',
            'florida130pm',
            'florida940pm',
            'quinielalotedom',
            'fechaquinielalotedom',
            'fechaResultado',
            'veinticuatroreal',
            'veinticuatronacional',
            'veinticuatronacional850',
            'veinticuatroking1230',
            'veinticuatroking730',
            'veinticuatroleids',
            'veinticuatrofechaquinielalotedom',
            'veinticuatroprimera12',
            'veinticuatroprimera8',
            'veinticuatrolotek',
            'veinticuatrolasuerte1230',
            'veinticuatrolasuerte6',
            'veinticuatronewyork230',
           'veinticuatronewyork1030',
           'veinticuatroflorida130',
           'veinticuatroflorida940',           
           'real12anterior',
           'nacionalanterior',
           'leidsaanterior',
           'primeraanterior'

        ));
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
    public function destroy($id)
    {
        //
    }
}
