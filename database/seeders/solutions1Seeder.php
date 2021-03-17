<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class solutions1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solutions_1')->insert([
            'descripcion' => 'No requiere una valoración clínica',
        ]);
        DB::table('solutions_1')->insert([
            'descripcion' => 'Requiere valoración clínica',
        ]);
    }
}
