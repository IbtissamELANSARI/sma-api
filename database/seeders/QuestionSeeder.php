<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 30) as $i) {
            Question::create([
                'text_question' => 'Quel est le résultat de ' . $i . ' + ' . ($i + 1) . ' ?',
                'options' => json_encode(['a' => $i, 'b' => $i + 1, 'c' => $i + $i, 'd' => $i + $i + 1]),
                'correct_option' => 'd',
                'score' => rand(1, 5),
                'competence_id' => rand(1, 20),
            ]);
        }
    }
}
