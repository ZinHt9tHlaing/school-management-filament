<?php

namespace Database\Seeders;

use App\Models\TimeTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $subjectIds = [1, 2, 3, 4, 5];

        $now = Carbon::now();

        foreach ($days as $day) {
            for ($period = 1; $period <= 7; $period++) {
                TimeTable::create([
                    'day' => $day,
                    'period' => $period,
                    'subject_id' => $subjectIds[($period - 1) % count($subjectIds)], // Assign subjects in a round-robin manner
                ]);
            }
        }
    }
}
