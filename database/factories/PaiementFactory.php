<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaiementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'commande_id' => createOrRandomFactory(\App\Models\Commande::class),
			'datePaiement' => $this->faker->dateTime(),
			'montat' => $this->faker->randomFloat(),
			'modePaiement' => $this->faker->firstName(),
        ];
    }
}
