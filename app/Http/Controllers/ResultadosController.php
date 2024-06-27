<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //Traer el estatus de cada sorteo de la tabla resultados


        //LOTO REAL

        //Quiniela Real
        $estatus_real12pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '1')->orderBy('created_at', 'desc')->first();

        //Loto Pool Real
        $estatus_lotopoolreal = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '18')->orderBy('created_at', 'desc')->first();

        //Pega 4 Real
        $estatus_pega4real = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '19')->orderBy('created_at', 'desc')->first();

        //Nueva Yol Real
        $estatus_nuevayolreal = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '22')->orderBy('created_at', 'desc')->first();

        //Nueva Tu Fecha Real
        $estatus_tufechareal = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '23')->orderBy('created_at', 'desc')->first();

        //Sorteo loto real
        $estatus_lotoreal = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '73')->orderBy('created_at', 'desc')->first();


        //Loteria Nacional

        //Gana Mas
        $estatus_nacional230 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '2')->orderBy('created_at', 'desc')->first();

        //Nacional 8:50 PM
        $estatus_nacional850pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '3')->orderBy('created_at', 'desc')->first();

        //Nacional Juega Pega +
        $estatus_juegapega = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '24')->orderBy('created_at', 'desc')->first();


        //King Lottery 12:30 PM
        $estatus_kinglottery1230pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '4')->orderBy('created_at', 'desc')->first();

        //King Lottery 7:30 PM
        $estatus_kinglottery730pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '5')->orderBy('created_at', 'desc')->first();

        //King Lottery Quiniela esta es la philisburg 12:30
        $estatus_quinielakinglottery = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '43')->orderBy('created_at', 'desc')->first();

        //King Lottery Quiniela esta es la philisburg 730:30
        $estatus_quinielakinglottery730 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '70')->orderBy('created_at', 'desc')->first();

        //Loto Pool King Lottery 12:30 PM
        $estatus_lotopoolking1230pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '71')->orderBy('created_at', 'desc')->first();

        //Loto Pool King Lottery 7:30 PM
        $estatus_lotopoolking730pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '72')->orderBy('created_at', 'desc')->first();





        //Leidsa

        //Leidsa, Sorteo 8:55PM Lun/Sab - Los Domingos 3:55PM
        $estatus_leidsa = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '6')->orderBy('created_at', 'desc')->first();

        //Leidsa, Pega 3 Mas
        $estatus_pega3mas = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '32')->orderBy('created_at', 'desc')->first();


        //Leidsa, Loto Pool
        $estatus_lotopool = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '33')->orderBy('created_at', 'desc')->first();

        //Leidsa, Super Kino
        $estatus_superkinotv = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '34')->orderBy('created_at', 'desc')->first();

        //Leidsa, Super Loto Mas
        $estatus_superlotomas = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '35')->orderBy('created_at', 'desc')->first();


        //Lotedom
        //Lotedom, Sorteo 1:55PM Lun/Dom
        $estatus_lotedom155 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '7')->orderBy('created_at', 'desc')->first();

        //Quemaito Mayor
        $estatus_quemaitomayor = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '29')->orderBy('created_at', 'desc')->first();

        //Super Pale Lotedom
        $estatus_superpalelotedom = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '30')->orderBy('created_at', 'desc')->first();

        //Agarra 4
        $estatus_agarra4 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '31')->orderBy('created_at', 'desc')->first();


        //Quiniela Lotedom
        $estatus_quinielalotedom = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '36')->orderBy('created_at', 'desc')->first();



        //La Primera

        //La Primera, Sorteo 12:00PM Lun/Dom
        $estatus_primera12pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '8')->orderBy('created_at', 'desc')->first();

        //La Primera, Sorteo 8:00PM Lun/Dom
        $estatus_primera8pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '9')->orderBy('created_at', 'desc')->first();

        //La Primera, Sorteo 8:00PM Lun/Dom
        $estatus_loto5 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '37')->orderBy('created_at', 'desc')->first();


        //Loteka

        //Loteka, Sorteo 7:55PM Lun/Dom
        $estatus_loteka755pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '10')->orderBy('created_at', 'desc')->first();

        //Loteka, Loto Loteka
        $estatus_lotoloteka = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '38')->orderBy('created_at', 'desc')->first();

        //Loteka, Mega Chance
        $estatus_megachance = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '39')->orderBy('created_at', 'desc')->first();

        //Loteka, Repartidera Mega Chance
        $estatus_repartidera = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '40')->orderBy('created_at', 'desc')->first();

        //Loteka, Quiniela Loteka
        $estatus_quinielaloteka = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '41')->orderBy('created_at', 'desc')->first();

        //Loteka, Toca 3
        $estatus_toca3 = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '42')->orderBy('created_at', 'desc')->first();


        //La Suerte Dominicana 12:30 PM
        $estatus_lasuerte1230pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '11')->orderBy('created_at', 'desc')->first();

        //La Suerte Dominicana 6:00 PM
        $estatus_lasuerte6pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '12')->orderBy('created_at', 'desc')->first();


        //New York Lottery 2:30 PM
        $estatus_newyork230pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '13')->orderBy('created_at', 'desc')->first();

        //New York Lottery 10:30 PM
        $estatus_newyork1030pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '14')->orderBy('created_at', 'desc')->first();


        //Florida Lottery, Sorteo 1:30PM Lun/Dom
        $estatus_florida130pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '15')->orderBy('created_at', 'desc')->first();

        //Florida Lottery, Sorteo 1:30PM Lun/Dom
        $estatus_florida940pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '16')->orderBy('created_at', 'desc')->first();

        //Anguila 9:00 AM Lun/Dom
        $estatus_anguila9am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '44')->orderBy('created_at', 'desc')->first();

        //Anguila 10:00 AM Lun/Dom
        $estatus_anguila10am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '46')->orderBy('created_at', 'desc')->first();

        //Anguila 11:00 AM Lun/Dom
        $estatus_anguila11am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '47')->orderBy('created_at', 'desc')->first();

        //Anguila 12:00 AM Lun/Dom
        $estatus_anguila12pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '48')->orderBy('created_at', 'desc')->first();

        //Anguila 1:00 PM Lun/Dom
        $estatus_anguila1pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '49')->orderBy('created_at', 'desc')->first();

        //Anguila 2:00 PM Lun/Dom
        $estatus_anguila2pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '50')->orderBy('created_at', 'desc')->first();

        //Anguila 3:00 PM Lun/Dom
        $estatus_anguila3pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '51')->orderBy('created_at', 'desc')->first();

        //Anguila 4:00 PM Lun/Dom
        $estatus_anguila4pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '52')->orderBy('created_at', 'desc')->first();

        //Anguila 5:00 PM Lun/Dom
        $estatus_anguila5pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '53')->orderBy('created_at', 'desc')->first();

        //Anguila 6:00 PM Lun/Dom
        $estatus_anguila6pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '54')->orderBy('created_at', 'desc')->first();

        //Anguila 7:00 PM Lun/Dom
        $estatus_anguila7pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '55')->orderBy('created_at', 'desc')->first();

        //Anguila 8:00 PM Lun/Dom
        $estatus_anguila8pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '56')->orderBy('created_at', 'desc')->first();

        //Anguila 9:00 PM Lun/Dom
        $estatus_anguila9pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '57')->orderBy('created_at', 'desc')->first();



        /********************/
        //Anguila Cuarteta 9:00 AM Lun/Dom
        $estatus_cuarteta9am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '45')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 10:00 AM Lun/Dom
        $estatus_cuarteta10am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '58')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 11:00 AM Lun/Dom
        $estatus_cuarteta11am = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '59')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 12:00 PM Lun/Dom
        $estatus_cuarteta12pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '60')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 1:00 PM Lun/Dom
        $estatus_cuarteta1pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '61')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 2:00 PM Lun/Dom
        $estatus_cuarteta2pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '62')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 3:00 PM Lun/Dom
        $estatus_cuarteta3pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '63')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 4:00 PM Lun/Dom
        $estatus_cuarteta4pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '64')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 5:00 PM Lun/Dom
        $estatus_cuarteta5pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '65')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 6:00 PM Lun/Dom
        $estatus_cuarteta6pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '66')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 7:00 PM Lun/Dom
        $estatus_cuarteta7pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '67')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 8:00 PM Lun/Dom
        $estatus_cuarteta8pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '68')->orderBy('created_at', 'desc')->first();

        //Anguila Cuarteta 4:00 PM Lun/Dom
        $estatus_cuarteta9pm = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '69')->orderBy('created_at', 'desc')->first();

         //Billete nacional domingo
         $estatus_sorteobilletenacional = DB::table('resultados_loterias')->select('estatus')->where('id_loterias', '=', '74')->orderBy('created_at', 'desc')->first();

 

        return view('admin.resultados', compact(
            'estatus_real12pm',
            'estatus_lotopoolreal',
            'estatus_pega4real',
            'estatus_nuevayolreal',
            'estatus_tufechareal',
            'estatus_nacional230',
            'estatus_nacional850pm',
            'estatus_juegapega',
            'estatus_kinglottery1230pm',
            'estatus_kinglottery730pm',
            'estatus_quinielakinglottery',
            'estatus_quinielakinglottery730',
            'estatus_leidsa',
            'estatus_pega3mas',
            'estatus_lotopool',
            'estatus_superkinotv',
            'estatus_superlotomas',
            'estatus_lotedom155',
            'estatus_quemaitomayor',
            'estatus_superpalelotedom',
            'estatus_agarra4',
            'estatus_quinielalotedom',
            'estatus_primera12pm',
            'estatus_primera8pm',
            'estatus_loto5',
            'estatus_loteka755pm',
            'estatus_lotoloteka',
            'estatus_megachance',
            'estatus_repartidera',
            'estatus_quinielaloteka',
            'estatus_toca3',
            'estatus_lasuerte1230pm',
            'estatus_lasuerte6pm',
            'estatus_newyork230pm',
            'estatus_newyork1030pm',
            'estatus_florida130pm',
            'estatus_florida940pm',
            'estatus_anguila9am',
            'estatus_anguila10am',
            'estatus_anguila11am',
            'estatus_anguila12pm',
            'estatus_anguila1pm',
            'estatus_anguila2pm',
            'estatus_anguila3pm',
            'estatus_anguila4pm',
            'estatus_anguila5pm',
            'estatus_anguila6pm',
            'estatus_anguila7pm',
            'estatus_anguila8pm',
            'estatus_anguila9pm',
            'estatus_cuarteta9am',
            'estatus_cuarteta10am',
            'estatus_cuarteta11am',
            'estatus_cuarteta12pm',
            'estatus_cuarteta1pm',
            'estatus_cuarteta2pm',
            'estatus_cuarteta3pm',
            'estatus_cuarteta4pm',
            'estatus_cuarteta5pm',
            'estatus_cuarteta6pm',
            'estatus_cuarteta7pm',
            'estatus_cuarteta8pm',
            'estatus_cuarteta9pm',
            'estatus_lotopoolking1230pm',
            'estatus_lotoreal',
            'estatus_sorteobilletenacional',
            'estatus_lotopoolking730pm'
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
    public function update(Request $request)
    {
        $estatus = DB::table('resultados_loterias')
            ->update(['estatus' => 'enabled']);
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
