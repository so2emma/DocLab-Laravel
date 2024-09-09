<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Laboratory;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Doctor::factory(30)->create();
        Doctor::factory()->create([
            "name" => "Oso Emmanuel",
            "email" => "admin@admin.com"
        ]);

        Laboratory::factory(30)->create();
        Laboratory::factory()->create([
            "name" => "Oso Emmanuel",
            "email" => "admin@admin.com"
        ]);

        Patient::factory(50)->create();
        Patient::factory()->create([
            "name" => "Oso Emmanuel",
            "email" => "admin@admin.com"
        ]);

        $this->call(TestSeeder::class);
        $this->call(AppointmentSeeder::class);

    }
}
