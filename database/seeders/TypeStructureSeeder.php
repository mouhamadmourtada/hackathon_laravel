<?php

namespace Database\Seeders;

use App\Models\TypeStructure;
use Illuminate\Database\Seeder;

class TypeStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        TypeStructure::factory(10)->create();
    }
}
