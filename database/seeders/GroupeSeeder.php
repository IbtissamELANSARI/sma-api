<?php

namespace Database\Seeders;

use App\Models\Groupe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupeSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            Groupe::create([
                'intitule' => 'Groupe ' . $i,
                'filiere_id' => rand(1, 10),
            ]);
        }
    }
}
