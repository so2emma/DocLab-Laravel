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
            // 'patient_id' => \App\Models\Patient::factory(),
            // 'doctor_id' => \App\Models\Doctor::factory(),
            // 'laboratory_id' => \App\Models\Laboratory::factory(),
            // 'test_id' => \App\Models\Test::factory(),
            'appointment_date' => fake()->date('Y-m-d'),
            'appointment_time' => fake()->time('H:i:s'),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled', 'completed']), // Appointment status
        ];
    }
}
