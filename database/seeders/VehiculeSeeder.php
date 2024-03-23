<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vehicules')->insert([
            ['id'=>1, 'modelVehicule'=> "1800", 'marqueVehicule'=>"Nisan",'photo'=>"public/images/photos_vehicule/ymCSnlE8I29XyoLh7bjw0rV5FZcFJN1rleivC8Qs.png", 'typeVehicule'=>"Voiture",'numeroMatricule'=>"E400O",'livreur_id'=>1],
            ['id'=>2, 'modelVehicule'=> "2004", 'marqueVehicule'=>"Raptor",'photo'=>"public/images/photos_vehicule/pSjVtFEqe8olUdG5vqFBQGxaA9kUX2H4uYcrbbKP.png", 'typeVehicule'=>"Moto",'numeroMatricule'=>"C-116A7",'livreur_id'=>2],
        ]);
    }
}
