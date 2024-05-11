<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrefFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => createOrRandomFactory(\App\Models\User::class),
			'produit_id' => createOrRandomFactory(\App\Models\Produit::class),
			'prix' => $this->faker->randomFloat(),
        ];
    }
}
