<?php

namespace Database\Seeders;

use App\Models\Recette_produit;
use Illuminate\Database\Seeder;

class Recette_produitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Recette_produit::factory(10)->create();
    }
}
