<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StructureSocialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->firstName(),
			'adresse' => $this->faker->firstName(),
			'num_telephone' => $this->faker->firstName(),
			'email' => $this->faker->safeEmail(),
        ];
    }
}
