<?php

namespace Database\Seeders;

use App\Models\Pref;
use Illuminate\Database\Seeder;

class PrefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Pref::factory(10)->create();
    }
}
