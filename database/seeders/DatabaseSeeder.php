<?php

namespace Database\Seeders;

use Database\Factories\EstudioFactory;
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
        //EstudioFactory::factory()->count(1000)->create();
        EstudioFactory::factoryForModel('Estudio')->count(1000)->create();
    }
}
