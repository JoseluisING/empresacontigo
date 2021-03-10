<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(rolSeeder::class);
         $this->call(userSeeder::class);
         $this->call(companySeeder::class);
         $this->call(survey1Seeder::class);
         $this->call(survey2Seeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
