<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gerente>
 */
class GerenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->name,
            'endereco' => $this->faker->word,
            'depto' => $this->faker->word,
            'datanasc' => $this->faker->date(),
            'foto' => $this->faker->imageUrl(500, 500),
        ];
    }
}
