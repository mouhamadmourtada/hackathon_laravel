<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitVenteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->firstName(),
			'produit_id' => createOrRandomFactory(\App\Models\Produit::class),
			'stock' => $this->faker->randomNumber(),
			'prixBase' => $this->faker->randomFloat(),
			'prixVente' => $this->faker->randomFloat(),
			'datePremption' => $this->faker->dateTime(),
			'categorie_id' => createOrRandomFactory(\App\Models\Categorie::class),
			'vendeur_id' => createOrRandomFactory(\App\Models\Vendeur::class),
        ];
    }
}
