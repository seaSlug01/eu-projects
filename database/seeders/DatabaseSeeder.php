<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EuCategory;
use Illuminate\Database\Seeder;
use Database\Seeders\EuCategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            EuCategoriesSeeder::class,
            EuPostSeeder::class,
            CountriesTableSeeder::class
        ]);
        
    }
}
