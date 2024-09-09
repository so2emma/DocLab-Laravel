<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_date' => fake()->date('Y-m-d'),
            'appointment_time' => fake()->time('H:i:s'),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled', 'completed']), // Appointment status
        ];
    }
}
