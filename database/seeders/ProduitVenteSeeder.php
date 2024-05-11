<?php

namespace Database\Seeders;

use App\Models\ProduitVente;
use Illuminate\Database\Seeder;

class ProduitVenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        ProduitVente::factory(10)->create();
    }
}
