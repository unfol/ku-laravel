<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->firstName(),
            'surname'=>fake()->lastName(),
            'phone'=>fake()->unique()->phoneNumber(),
            'email'=>fake()->unique()->safeEmail(),
            'address'=>fake()->address()
        ];
    }
}
