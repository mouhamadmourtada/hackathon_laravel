<?php

namespace Database\Seeders;

use App\Models\Recette;
use Illuminate\Database\Seeder;

class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Recette::factory(10)->create();
    }
}
