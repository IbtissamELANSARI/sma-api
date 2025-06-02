<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Demande;

class DemandeSeeder extends Seeder
{
    public function run(): void
    {
        $types = ['Attestation', 'Relevé de notes', 'Convention de stage'];
        $motifs = ['Besoin personnel', 'Pour stage', 'Pour concours'];

        foreach (range(1, 15) as $i) {
            Demande::create([
                'type_doc' => $types[array_rand($types)],
                'motif' => $motifs[array_rand($motifs)],
                'stagiaire_id' => rand(1, 15),
            ]);
        }
    }
}