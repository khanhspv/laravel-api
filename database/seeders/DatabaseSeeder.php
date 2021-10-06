<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
         \App\Models\CustomerModel::factory(20)->create();
    }
}
