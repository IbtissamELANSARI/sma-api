<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            Filiere::create([
                'intitule' => 'Filiere ' . $i,
                'secteur_id' => rand(1, 5),
            ]);
        }
    }
}
