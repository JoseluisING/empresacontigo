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
    }
}
