<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitRappelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->firstName(),
			'dateExpiration' => $this->faker->dateTime(),
			'quantite' => $this->faker->randomNumber(),
			'prixUnitaire' => $this->faker->randomFloat(),
			'marge' => $this->faker->randomNumber(),
			'user_id' => createOrRandomFactory(\App\Models\User::class),
			'produit_id' => createOrRandomFactory(\App\Models\Produit::class),
			'categorie_id' => createOrRandomFactory(\App\Models\Categorie::class),
			'nomTypeProduit' => $this->faker->firstName(),
        ];
    }
}
