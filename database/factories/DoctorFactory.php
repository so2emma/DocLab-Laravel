<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->unique()->phoneNumber(),
            'specialization' => fake()->randomElement(['Cardiologist', 'Dermatologist', 'Neurologist', 'Pediatrician', 'Surgeon']),
            'years_of_experience' => fake()->numberBetween(1, 40),
            'qualification' => fake()->randomElement(['MBBS', 'MD', 'DO', 'PhD']),
            'bio' => fake()->paragraph(),
            'profile_picture' => fake()->imageUrl(640, 480, 'people', true, 'Doctor Profile'),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'date_of_birth' => fake()->date('Y-m-d', '1980-01-01'),
            'address' => fake()->address(),
            'availability' => fake()->randomElement(['full-time', 'part-time', 'on-call']),
            'remember_token' => Str::random(10),
        ];
    }
}
