<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            Quiz::create([
                'date' => now()->addDays($i)->format('Y-m-d'),
                'time' => now()->addHours($i)->format('H:i:s'),
                'module_id' => rand(1, 15),
            ]);
        }
    }
}

