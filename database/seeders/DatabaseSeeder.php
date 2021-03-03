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

        // \App\Models\User::factory(10)->create();
    }
}
