<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reg_number'=>fake()->unique()->numberBetween(100000, 999999),
            'brand'=>fake()->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Nissan', 'Honda', 'Volkswagen', 'Hyundai', 'Mercedes-Benz', 'BMW', 'Audi']),
            'model'=>fake()->randomLetter()
        ];
    }
}
