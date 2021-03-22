<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Empresas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'user_id' => '1',
            'rfc_company' => 'SABR1821',
            'name' => 'SABRITAS SA de CV',
            'cp' => '55630',
            'telefono' => '2749572612',
        ]);
DB::table('companies')->insert([
            'user_id' => '3',
            'rfc_company' => 'GAME1231',
            'name' => 'GAMESA SA de CV',
            'cp' => '55635',
            'telefono' => '5349572612',
        ]);
    }
}
