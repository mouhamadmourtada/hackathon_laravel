<?php

namespace Database\Seeders;

use App\Models\PosteSocial;
use Illuminate\Database\Seeder;

class PosteSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        PosteSocial::factory(10)->create();
    }
}
