<?php

namespace Database\Seeders;

use App\Models\Formateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            Formateur::create([
                'matricule' => 'FRM' . $i,
                'nom' => 'Formateur ' . $i,
                'email' => 'formateur' . $i . '@example.com',
                'secteur_id' => rand(1, 5),
            ]);
        }
    }
}
