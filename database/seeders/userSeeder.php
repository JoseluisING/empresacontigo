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
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Lizeth',
            'ap_p' => 'Parra',
            'ap_m' => 'Lopez',
            'email' => 'liz@gmail.com',
            'cedula' => '113148835',
            'rfc' => 'PALL000421',
            'curp' => 'PALL000421MMCRPZA4',
            'password' => Hash::make('estrella234'),
            'id_rol' => '1',
        ]); 
        DB::table('users')->insert([
            'name' => 'Jose Luis',
            'ap_p' => 'Badillo',
            'ap_m' => 'Gonzalez',
            'email' => 'jose@gmail.com',
            'cedula' => '92877364',
            'rfc' => 'JOSE001203',
            'curp' => 'JOSE001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Magaly',
            'ap_p' => 'Gomez',
            'ap_m' => 'Ortega',
            'email' => 'maga@gmail.com',
            'cedula' => '92097364',
            'rfc' => 'MAGA001203',
            'curp' => 'MAGA001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Brandon',
            'ap_p' => 'Sevilla',
            'ap_m' => 'Tapia',
            'email' => 'brandon@gmail.com',
            'cedula' => '92871364',
            'rfc' => 'BRAN001203',
            'curp' => 'BRAN001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Brayan',
            'ap_p' => 'Sevilla',
            'ap_m' => 'Tapia',
            'email' => 'brayan@gmail.com',
            'cedula' => '22327364',
            'rfc' => 'BRAY001203',
            'curp' => 'BRAY001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Berenice',
            'ap_p' => 'Lopez',
            'ap_m' => 'Lechuga',
            'email' => 'berenice@gmail.com',
            'cedula' => '92247364',
            'rfc' => 'BERE001203',
            'curp' => 'BERE001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Andrea',
            'ap_p' => 'Hernandez',
            'ap_m' => 'Hernandez',
            'email' => 'andrea@gmail.com',
            'cedula' => '92647364',
            'rfc' => 'ANDR001203',
            'curp' => 'ANDR001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Mariel',
            'ap_p' => 'Garcia',
            'ap_m' => 'Del valle',
            'email' => 'mariel@gmail.com',
            'cedula' => '92627364',
            'rfc' => 'MARI001203',
            'curp' => 'MARI001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Brenda',
            'ap_p' => 'Sevilla',
            'ap_m' => 'Tapia',
            'email' => 'brenda@gmail.com',
            'cedula' => '92047464',
            'rfc' => 'BREN001203',
            'curp' => 'BREN001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Jorge',
            'ap_p' => 'Santiago',
            'ap_m' => 'Ibañez',
            'email' => 'jorge@gmail.com',
            'cedula' => '22747364',
            'rfc' => 'JORG001203',
            'curp' => 'JORG001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Monica',
            'ap_p' => 'Soliz',
            'ap_m' => 'Sanchez',
            'email' => 'monica@gmail.com',
            'cedula' => '92347364',
            'rfc' => 'MONI001203',
            'curp' => 'MONI001203HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '1',
        ]);



        DB::table('users')->insert([
            'name' => 'Alan Emmanuel',
            'ap_p' => 'Hernandez',
            'ap_m' => 'Ugalde',
            'email' => 'alan@gmail.com',
            'cedula' => '51884611',
            'rfc' => 'HEUA000110',
            'curp' => 'HEUA000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Jimena',
            'ap_p' => 'Lobato',
            'ap_m' => 'Cardoso',
            'email' => 'jimena@gmail.com',
            'cedula' => '12384611',
            'rfc' => 'JIME000110',
            'curp' => 'JIME000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Yazmin',
            'ap_p' => 'Hernandez',
            'ap_m' => 'Hernandez',
            'email' => 'yazmin@gmail.com',
            'cedula' => '11684611',
            'rfc' => 'YAZM000110',
            'curp' => 'YAZM000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Antonio',
            'ap_p' => 'Lopez',
            'ap_m' => 'Perez',
            'email' => 'antonio@gmail.com',
            'cedula' => '59084611',
            'rfc' => 'ANTO000110',
            'curp' => 'ANTO000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Abigail',
            'ap_p' => 'Soliz',
            'ap_m' => 'Ugarde',
            'email' => 'abigail@gmail.com',
            'cedula' => '58084611',
            'rfc' => 'ABIG000110',
            'curp' => 'ABIG000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Albeto',
            'ap_p' => 'Hernandez',
            'ap_m' => 'Romero',
            'email' => 'alberto@gmail.com',
            'cedula' => '57084611',
            'rfc' => 'ALBE000110',
            'curp' => 'ALBE000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Alexandra',
            'ap_p' => 'Guzman',
            'ap_m' => 'Loera',
            'email' => 'alexa@gmail.com',
            'cedula' => '56084611',
            'rfc' => 'ALEX000110',
            'curp' => 'ALEX000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Ana LUisa',
            'ap_p' => 'Leal',
            'ap_m' => 'Del leon',
            'email' => 'anal@gmail.com',
            'cedula' => '55084611',
            'rfc' => 'ANAL000110',
            'curp' => 'ANAL000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Claudia',
            'ap_p' => 'Montenegro',
            'ap_m' => 'Leal',
            'email' => 'claudia@gmail.com',
            'cedula' => '53084611',
            'rfc' => 'CLAU000110',
            'curp' => 'CLAU000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Anali',
            'ap_p' => 'Garcia',
            'ap_m' => 'Carpio',
            'email' => 'anali@gmail.com',
            'cedula' => '52084611',
            'rfc' => 'ANLI000110',
            'curp' => 'ANLI000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Ariana',
            'ap_p' => 'Miranda',
            'ap_m' => 'Lopez',
            'email' => 'ariana@gmail.com',
            'cedula' => '51084611',
            'rfc' => 'ARIA000110',
            'curp' => 'ARIA000110HDFLADO1',
            'password' => Hash::make('estrella234'),
            'id_rol' => '2',
            'user_id' => '3',
        ]);
    }
}
