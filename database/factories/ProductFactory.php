<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1, 1000),
            'name' => $this->faker->unique()->name(),
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(2),
            'description' => $this->faker->paragraph(),
        ];
    }
}
