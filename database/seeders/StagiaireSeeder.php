<?php

namespace Database\Seeders;

use App\Models\Groupe;
use Illuminate\Database\Seeder;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Hash;


class StagiaireSeeder extends Seeder
{
    public function run(): void
    {
        $groupeIds = Groupe::pluck('id')->toArray();

        foreach (range(1, 15) as $i) {
            Stagiaire::create([
                'code' => 'STG' . $i,
                'nom' => 'Stagiaire ' . $i,
                'email' => 'stagiaire' . $i . '@example.com',
                'groupe_id' => fake()->randomElement($groupeIds),
            ]);
        }
    }
}
