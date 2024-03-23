<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LivraisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('livraisons')->insert([
            ['id'=>1, 'lieuLivraison'=> "Awendje", 'lieuRecuperation'=>"Pharmatie Charbonnage",'prix'=>"1000", 'avisClient'=>"",'commentareLivreur'=>"",'client_id'=>2,'statut_id'=>2,'destinataire_id'=>1,'produit_id'=>1, 'livreur_id'=>2],
            ['id'=>2, 'lieuLivraison'=> "Louis", 'lieuRecuperation'=>"Pharmatie Kembo",'prix'=>"1100", 'avisClient'=>"Merci",'commentareLivreur'=>"RAS",'client_id'=>4,'statut_id'=>6,'destinataire_id'=>4,'produit_id'=>1, 'livreur_id'=>1],
            ['id'=>3, 'lieuLivraison'=> "Louis", 'lieuRecuperation'=>"Pharmatie Kembo",'prix'=>"200000", 'avisClient'=>"Merci",'commentareLivreur'=>"RAS",'client_id'=>4,'statut_id'=>6,'destinataire_id'=>4,'produit_id'=>1, 'livreur_id'=>1],
            ['id'=>4, 'lieuLivraison'=> "Louis", 'lieuRecuperation'=>"Pharmatie Kembo",'prix'=>"11000", 'avisClient'=>"Merci",'commentareLivreur'=>"RAS",'client_id'=>4,'statut_id'=>6,'destinataire_id'=>4,'produit_id'=>1, 'livreur_id'=>1],
            ['id'=>5, 'lieuLivraison'=> "Camps de Guaul", 'lieuRecuperation'=>"Station Glace",'prix'=>"50000", 'avisClient'=>"J'attends oooh",'commentareLivreur'=>"En chemin",'client_id'=>1,'statut_id'=>2,'destinataire_id'=>2,'produit_id'=>4, 'livreur_id'=>2],
        ]);
    }
}
