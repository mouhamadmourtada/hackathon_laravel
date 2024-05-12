<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
			'libelle' => $this->faker->firstName(),
			'description' => $this->faker->text(),
			'prixBase' => $this->faker->randomNumber(),
			'categorie_id' => createOrRandomFactory(\App\Models\Categorie::class),
			'typeQuantite' => $this->faker->firstName(),
        ];
    }
}
