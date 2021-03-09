<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anónimo',
            'ap_p' => 'Anónimo',
            'ap_m' => 'Anónimo',
            'email' => Str::random(10).'@gmail.com',
            'cedula' => 'Anónimo',
            'rfc' => 'Anónimo',
            'curp' => 'Anónimo',
            'password' => Hash::make('12345678'),
            'id_rol' => '2',
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Alberto',
            'ap_p' => 'Guzman',
            'ap_m' => 'Gomez',
            'email' => 'juanalbertoguzman87@gmail.com',
            'cedula' => '27495726',
            'rfc' => 'GUGJ001207',
            'curp' => 'GUGJ001207HDFZMNQ1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Aldo Israel',
            'ap_p' => 'Hernandez',
            'ap_m' => 'Lopez',
            'email' => 'aldo@gmail.com',
            'cedula' => '92847364',
            'rfc' => 'ALDO001203',
            'curp' => 'ALDO001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '2',
        ]);
    }
}
