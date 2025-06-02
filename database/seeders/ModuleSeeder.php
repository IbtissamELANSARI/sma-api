<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 15) as $i) {
            Module::create([
                'intitule' => 'Module ' . $i,
                'masse_horaire' => rand(20, 100),
                'filiere_id' => rand(1, 10),
            ]);
        }
    }
}

