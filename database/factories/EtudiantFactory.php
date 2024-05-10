<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
			'prenom' => $this->faker->firstName(),
			'ine' => $this->faker->firstName(),
			'sexe' => $this->faker->randomElement(['F', 'M']),
			'dateNaissance' => $this->faker->dateTime(),
        ];
    }
}
