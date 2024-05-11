<?php

namespace Database\Seeders;

use App\Models\StructureSocial;
use Illuminate\Database\Seeder;

class StructureSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        StructureSocial::factory(10)->create();
    }
}
