<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'phone' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'date_of_birth' => fake()->date('Y-m-d', '2005-01-01'),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'password' => static::$password ??= Hash::make('password'),
            'blood_type' => fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'allergies' => fake()->sentence(),
            'chronic_conditions' => fake()->sentence(),
            'current_medications' => fake()->sentence(),
            'previous_surgeries' => fake()->sentence(),
            'family_medical_history' => fake()->sentence(),
            'emergency_contact_name' => fake()->name(),
            'emergency_contact_relationship' => fake()->randomElement(['spouse', 'parent', 'sibling', 'friend']),
            'emergency_contact_phone_number' => fake()->phoneNumber(),
            'preferred_language' => fake()->randomElement(['English', 'Spanish', 'French', 'German']),
            'insurance_details' => fake()->text(50),
            'marital_status' => fake()->randomElement(['single', 'married', 'divorced', 'widowed']),
            'remember_token' => Str::random(10),
        ];
    }
}
