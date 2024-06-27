<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Loterias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*DB::table('loterias')->insert([
            'nombre' => 'anguila10am',
            'descripcion' => 'Anguila 10am',
        ]);

        DB::table('loterias')->insert([
            'nombre' => 'anguilacuarteta10am',
            'descripcion' => 'Anguila Cuarteta 10am',
        ]);

        DB::table('loterias')->insert([
            'nombre' => 'anguila1pm',
            'descripcion' => 'Anguila 1pm',
        ]);


        DB::table('loterias')->insert([
            'nombre' => 'anguilacuarteta1pm',
            'descripcion' => 'Anguila Cuarteta 1pm',
        ]);


        DB::table('loterias')->insert([
            'nombre' => 'anguila6pm',
            'descripcion' => 'Anguila 6pm',
        ]);

        DB::table('loterias')->insert([
            'nombre' => 'anguilacuarteta5pm',
            'descripcion' => 'Anguila Cuarteta 5pm',
        ]);


        DB::table('loterias')->insert([
            'nombre' => 'anguila9pm',
            'descripcion' => 'Anguila 9pm',
        ]);

        DB::table('loterias')->insert([
            'nombre' => 'anguilacuarteta9pm',
            'descripcion' => 'Anguila Cuarteta 9pm',
        ]);*/

        DB::table('loterias')->insert([
            'nombre' => 'lotopoolking1230',
            'descripcion' => 'Lotto Pool King Lottery 12:30 PM',
            'timeday' => '12:30 PM',
        ]);

        DB::table('loterias')->insert([
            'nombre' => 'lotopoolking730',
            'descripcion' => 'Lotto Pool King Lottery 7:30 PM',
            'timeday' => '7:30 PM',
        ]);
    }
}
