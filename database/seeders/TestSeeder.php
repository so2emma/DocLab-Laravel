<?php

namespace Database\Seeders;

use App\Models\Laboratory;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laboratories = Laboratory::all();

        for($i = 0; $i<100; $i++){
            $laboratory = $laboratories->random();
            Test::factory()->create([
                'laboratory_id' => $laboratory->id
            ]);
        }
    }
}
