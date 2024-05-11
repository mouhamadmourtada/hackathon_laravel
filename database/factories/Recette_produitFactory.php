<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Recette_produitFactory extends Factory
{
    public function definition(): array
    {
        return [
            'produit_id' => createOrRandomFactory(\App\Models\Produit::class),
			'recette_id' => createOrRandomFactory(\App\Models\Recette::class),
			'quantite' => $this->faker->randomNumber(),
        ];
    }
}
