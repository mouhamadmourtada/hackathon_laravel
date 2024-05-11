<?php

namespace Database\Seeders;

use App\Models\ProduitRappel;
use Illuminate\Database\Seeder;

class ProduitRappelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        ProduitRappel::factory(10)->create();
    }
}
