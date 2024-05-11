<?php

namespace Database\Seeders;

use App\Models\Paiement;
use Illuminate\Database\Seeder;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Paiement::factory(10)->create();
    }
}
