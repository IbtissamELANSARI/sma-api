<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ModuleSeeder as SeedersModuleSeeder;
use Database\Seeders\QuizSeeder as SeedersQuizSeeder;
use Database\Seeders\StagiaireSeeder as SeedersStagiaireSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the RolePermissionSeeder to create roles and permissions
        $this->call(RolePermissionSeeder::class);
        
        // Call the UserSeeder to create initial users
        $this->call(UserSeeder::class);

        // Call the SecteurSeeder to create initial sectors
        $this->call([
            SecteurSeeder::class,
            FormateurSeeder::class,
            FiliereSeeder::class,
            GroupeSeeder::class,
            SeedersModuleSeeder::class,
            CompetenceSeeder::class,
            QuestionSeeder::class,
            SeedersQuizSeeder::class,
            SeedersStagiaireSeeder::class,
            DemandeSeeder::class,
            SeanceSeeder::class,
        ]);

    }
}
