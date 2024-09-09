<?php

namespace Database\Seeders;

use App\Models\Laboratory;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $laboratories = Laboratory::all();
        $patients= Patient::all();
        $doctors = Doctor::all();
        $tests = Test::all();

        for($i = 0; $i<40; $i++){
            Appointment::factory()->create([
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'laboratory_id' => $laboratories->random()->id,
                'test_id' => $tests->random()->id
            ]);
        }
    }
}
