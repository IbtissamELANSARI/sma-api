<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 20) as $i) {
            Competence::create([
                'code' => 'CMP' . $i,
                'intitule' => 'Compétence ' . $i,
                'module_id' => rand(1, 15),
            ]);
        }
    }
}