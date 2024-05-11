<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->firstName(),
			'description' => $this->faker->text(),
        ];
    }
}
