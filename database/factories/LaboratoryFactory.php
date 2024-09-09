<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laboratory>
 */
class LaboratoryFactory extends Factory
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
            'name' => fake()->company(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'website' => fake()->domainName(),
            'password' => static::$password ??= Hash::make('password'), // Default hashed password
            'license_number' => fake()->regexify('[A-Z0-9]{10}'), // Random alphanumeric license number
            'license_expiry' => fake()->date('Y-m-d', '2030-12-31'), // License expiry date
            'accreditation_body' => fake()->company(),
            // 'operating_hours' => fake()->randomElement(['8 AM - 5 PM', '24/7', '9 AM - 9 PM']),
            // 'services_offered' => fake()->sentence(), // Short description of services offered
            'specializations' => fake()->randomElement(['Pathology', 'Radiology', 'Microbiology', 'Biochemistry']),
            'status' => fake()->randomElement(['active', 'inactive', 'pending']),
            'remember_token' => Str::random(10), // Random remember token
        ];
    }
}
