<?php

namespace App\Http\Livewire;

use App\Models\Configuration;
use App\Models\Fuel;
use App\Models\Image;
use App\Models\Remittance;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Request;

class Pantalla extends Component
{
    use WithFileUploads;
    public $usuarios, $headercolor, $imagenes, $fuels, $remittances, $token, $user, $configuracion;
    // public $real12pm;
    public function mount()
    {
        
        // Consulta a la base de datos para obtener los usuarios
        $this->usuarios = User::all();
       // En tu método del controlador o componente
        $this->headercolor = Configuration::latest('created_at')->value('headercolor');
        // para las imagenes del slide
        $this->imagenes = Image::all();
        // dd($this->usuarios);

// esto es para la url y buscar el nombre de la banca y el color
        $urlCompleta = Request::fullUrl();
        // Buscar la posición de 'pantalla/'
        $posicion = strpos($urlCompleta, 'pantalla/');
        if ($posicion !== false) {
            $this->token = substr($urlCompleta, $posicion + strlen('pantalla/'));
        } else {
            $this->token = 'No se encontró "pantalla/" en la URL';
        }
        // buscando el usuario al que le pertenece el token
        $user = User::where('token', $this->token)->first();

        if ($user) {
            // $lastToken = User::latest('created_at')->value('token');
    
            if ( $this->token) { 
                $this->configuracion = Configuration::where('user_id', $user->id)->first();
                // dd($user->id);
                // dd($configuracion);
                // return view('pantalla', compact('configuracion'));
            } else {
                dd('El token no es el último registrado.');
            }
        } else {
            dd('El usuario no existe, REVISE SU TOKEN POR FAVOR.');
        }
        // dd($user);
    }

    public function render()
    {
        $this->fuels = Fuel::get();
        
        $this->remittances = Remittance::get();
        //loteria real
        $real12pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '1')->orderBy('id', 'DESC')->first();
        
         //Loteria Nacional
         $nacional230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '2')->orderBy('id', 'DESC')->first();
         $nacional850pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '3')->orderBy('id', 'DESC')->first();
 
         //King Lottery
        $king1230pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1, 2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '4')->orderBy('id', 'DESC')->first();
        $king730pm = DB::table('resultados_loterias')->select(DB::raw('SUBSTRING(num1, 2) as num1_partial'), 'num2', 'num3', 'created_at')->where('id_loterias', '=', '5')->orderBy('id', 'DESC')->first();

        //Leidsa
        $leidsa = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '6')->orderBy('id', 'DESC')->first();

        //Lotedom
        $lotedom = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '36')->orderBy('id', 'DESC')->first();
// dd($lotedom);
        //La Primera
        $primera12pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '8')->orderBy('id', 'DESC')->first();
        $primera8pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '9')->orderBy('id', 'DESC')->first();

        //Loteka
        $loteka = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '10')->orderBy('id', 'DESC')->first();

        //La Suerte Dominicana
        $lasuerte1230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '11')->orderBy('id', 'DESC')->first();
        $lasuerte6pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '12')->orderBy('id', 'DESC')->first();

        //New York Lottery
        $newyork230pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '13')->orderBy('id', 'DESC')->first();
        $newyork1030pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '14')->orderBy('id', 'DESC')->first();

        //Florida Lottery
        $florida130pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '15')->orderBy('id', 'DESC')->first();
        $florida940pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '16')->orderBy('id', 'DESC')->first();

        //Quiniela Lotedom/ Agarra 4
        $quinielalotedom = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'num4')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();
        // $fechaquinielalotedom = DB::table('resultados_loterias')->select('created_at')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();

        $dollar = DB::table('remittances')->select('buy', 'sell')->where('id', '=', '1')->orderBy('created_at', 'desc')->first();
        // en gasolina cogi los campos Type para la premium y price para la regular 
        $gasolina = DB::table('fuels')->select('type', 'price')->where('id', '=', '1')->orderBy('created_at', 'desc')->first();
        // en este es para el glp esta en la misma tabla de gasolina pero el id es 2
        $glp = DB::table('fuels')->select('type', 'price')->where('id', '=', '2')->orderBy('created_at', 'desc')->first();

        // dd($gasolinapremium);
        return view('livewire.pantalla', compact(
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
            'dollar',
            'gasolina',
            'glp'
        ));
    }

    // public function consulta(){
    //     $real12pm = DB::table('resultados_loterias')->select('num1', 'num2', 'num3', 'created_at')->where('id_loterias', '=', '1')->orderBy('id', 'DESC')->first();

    // }
}
  