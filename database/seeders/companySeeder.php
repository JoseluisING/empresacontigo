<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'rfc_company' => 'ANON000000',
            'user_id'  => '1',
            'name' => Str::random(10),
            'cp' => '00000',
            'telefono' => '0000000000',
        ]);
    }
}
