<?php

namespace Database\Seeders;

use App\Models\Seance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeanceSeeder extends Seeder
{
    public function run(): void
    {
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

        foreach (range(1, 15) as $i) {
            Seance::create([
                'weekday' => $days[array_rand($days)],
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
                'formateur_id' => rand(1, 10),
                'groupe_id' => rand(1, 10),
            ]);
        }
    }
}
