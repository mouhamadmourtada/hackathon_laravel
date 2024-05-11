<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PosteSocialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->firstName(),
			'nom' => $this->faker->firstName(),
			'description' => $this->faker->text(),
			'quantite' => $this->faker->randomNumber(),
			'datePoste' => $this->faker->dateTime(),
        ];
    }
}
