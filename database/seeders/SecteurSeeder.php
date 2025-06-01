<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Secteur;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Secteur::insert([
            ['intitule' => 'Artisanat', 'code' => 'ART'],
            ['intitule' => 'Cuir', 'code' => 'CUIR'],
            ['intitule' => 'Métiers du Golf', 'code' => 'MGO'],
            ['intitule' => 'Agriculture', 'code' => 'AGRI'],
            ['intitule' => 'Bâtiment et Travaux Publics', 'code' => 'BTP'],
            ['intitule' => 'Tourisme Hôtellerie Restauration', 'code' => 'THR'],
            ['intitule' => 'Services à la Personne', 'code' => 'SAP'],
            ['intitule' => 'Génie Electrique', 'code' => 'GE'],
            ['intitule' => 'Agro-Industrie', 'code' => 'AGRO'],
            ['intitule' => 'Digital et Intelligence Artificielle', 'code' => 'DIA'],
            ['intitule' => 'Métiers de l\'Automobile', 'code' => 'MA'],
            ['intitule' => 'Arts et Industries Graphiques', 'code' => 'AIG'],
            ['intitule' => 'Gestion et Commerce', 'code' => 'GC'],
            ['intitule' => 'Economie Verte', 'code' => 'EV'],
            ['intitule' => 'Aéronautique', 'code' => 'AE'],
            ['intitule' => 'Matériaux de Construction', 'code' => 'MC'],
            ['intitule' => 'Textile Habillement1', 'code' => 'TH'],
            ['intitule' => 'Logistique et Transport', 'code' => 'LT'],
            ['intitule' => 'Génie Mécanique', 'code' => 'GM'],
            ['intitule' => 'Audiovisuel et Cinéma', 'code' => 'AVC'],
            ['intitule' => 'Froid et Génie Thermique', 'code' => 'FGT'],
            ['intitule' => 'Métiers Transverses de l\'Industrie', 'code' => 'MTI'],
            ['intitule' => 'Sport Equestre', 'code' => 'SE'],
            ['intitule' => 'Industrie Navale', 'code' => 'IN'],
            ['intitule' => 'Santé', 'code' => 'SAN'],
            ['intitule' => 'Plasturgie', 'code' => 'PLA'],
            ['intitule' => 'Pêche', 'code' => 'PCH']
        ]);
    }
}
