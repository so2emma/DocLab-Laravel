<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'laboratory_id' => \App\Models\Laboratory::factory(), // Associates the test with a lab
            'name' => fake()->word(), // Random test name
            'description' => fake()->sentence(), // Short description of the test
            'price' => fake()->randomFloat(2, 50, 500), // Random price between 50 and 500
        ];
    }
}
