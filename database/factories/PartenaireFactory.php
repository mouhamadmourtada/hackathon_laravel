<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartenaireFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nomStructure' => $this->faker->firstName(),
			'localisationStructure' => $this->faker->firstName(),
			'typeStructure_id' => createOrRandomFactory(\App\Models\TypeStructure::class),
			'domaineActivite' => $this->faker->firstName(),
			'description' => $this->faker->text(),
			'slogan' => $this->faker->firstName(),
			'logo' => $this->faker->firstName(),
			'logitude' => $this->faker->firstName(),
			'latitude' => $this->faker->firstName(),
        ];
    }
}
