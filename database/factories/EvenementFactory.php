<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->firstName(),
			'description' => $this->faker->text(),
			'logitude' => $this->faker->firstName(),
			'latitude' => $this->faker->firstName(),
			'datePublication' => $this->faker->dateTime(),
        ];
    }
}
