<?php

namespace Database\Seeders;

use App\Models\EuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EuCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Daphne'],
            ['name' => 'Education, Audiovisual and Culture Executive Agency (EACEA)'],
            ['name' => 'ERASMUS+'],
            ['name' => 'European territorial cooperation Programme GREECE-BULGARIA 2007-2013'],
            ['name' => 'INTERREG IVC'],
            ['name' => 'Lifelong Learning Program, Leonardo da Vinci, Development of Innovation'],
            ['name' => 'Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation'],
            ['name' => 'MED Programme European Territorial Cooperation 2007-2013'],
            ['name' => 'South East Europe, Transnational Cooperation Programme'],
            ['name' => 'Ευρωπαϊκό Ταμείο Ασύλου, Μετανάστευσης και Ένταξης'],
        ];

        EuCategory::insert($categories);
        
    }
}
