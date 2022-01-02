<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuperHeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'weapons' => $this->faker->weapons(),
            'powers' => $this->faker->superpowers(),
            'salary' => $this->faker->numberBetween(100000-500000),
        ];
    }
}
