<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resultados_loterias;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class AnguilaLoteriasController extends Controller
{

    //Anguila Quiniela

    public function anguila9am(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 44;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila10am(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 46;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila11am(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 47;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila12pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 48;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila1pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 49;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }


    public function anguila2pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 50;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila3pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 51;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }


    public function anguila4pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 52;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila5pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 53;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila6pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 54;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila7pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 55;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila8pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 56;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguila9pm(Request $request)
    {

        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguila = new resultados_loterias();
        $anguila->id_loterias = 57;
        $anguila->actualizo = $nombre_usuario;
        $anguila->num1 = $request->input('num1');
        $anguila->num2 = $request->input('num2');
        $anguila->num3 = $request->input('num3');
        $anguila->created_at = $fechaResultado;
        $anguila->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }



    //Anguila Cuarteta

    public function anguilac9am(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 45;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac10am(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 58;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac11am(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 59;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac12pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 60;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac1pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 61;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }


    public function anguilac2pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 62;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }


    public function anguilac3pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 63;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac4pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 64;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac5pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 65;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac6pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 66;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac7pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 67;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac8pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 68;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }

    public function anguilac9pm(Request $request)
    {
        date_default_timezone_set("America/Santo_Domingo");

        $fechaActual = new DateTime();
        $fechaResultado = $fechaActual->format('Y-m-d H:i:s');

        $nombre_usuario = Auth::user()->name;
        $anguilac = new resultados_loterias();
        $anguilac->id_loterias = 69;
        $anguilac->actualizo = $nombre_usuario;
        $anguilac->num1 = $request->input('num1');
        $anguilac->num2 = $request->input('num2');
        $anguilac->num3 = $request->input('num3');
        $anguilac->num4 = $request->input('num4');
        $anguilac->created_at = $fechaResultado;
        $anguilac->save();

        session()->flash('message', 'Resultados Actualizados Correctamente!');

        return redirect('resultados');
    }
}
