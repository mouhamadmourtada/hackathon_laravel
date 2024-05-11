<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PanierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => createOrRandomFactory(\App\Models\User::class),
			'produitVente_id' => createOrRandomFactory(\App\Models\ProduitVente::class),
			'quantite' => $this->faker->randomNumber(),
        ];
    }
}
