<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produits')->insert([
            ['id'=>1, 'nom'=> "Doliprane",'photo'=>'public/images/produits/gcoGgrbWFb4kRJUxlqyy5pPvcSuHOUP18DYU6LFO.png', 'poids'=>"2G", 'taille'=>"8cm", 'typeP_id'=> 15,'supprimer'=>0,'marque_id'=>17,'qualite_id'=>19],
            ['id'=>2, 'nom'=> "Coartem",'photo'=>'public/images/produits/or0pK7FVSrguLPBETeXfwqGuAU45vTmzAM4PeGqr.webp', 'poids'=>"3G", 'taille'=>"6cm", 'typeP_id'=> 15,'supprimer'=>0,'marque_id'=>17,'qualite_id'=>19],
            ['id'=>3, 'nom'=> "Reebok Classic Leather Pump",'photo'=>'public/images/produits/uDmxwlXiDnKsq3ReztpqdIhgRKRZso965uySg77x.jpg', 'poids'=>"80G", 'taille'=>"31", 'typeP_id'=> 14,'supprimer'=>0,'marque_id'=>17,'qualite_id'=>20],
            ['id'=>4, 'nom'=> "X-Crazy Fast Addidas",'photo'=>'public/images/produits/XCch5pLQ8PSjOXkKzeQkzb2vhmsuowbZM7LHasp1.avif', 'poids'=>"80G", 'taille'=>"30", 'typeP_id'=> 14,'supprimer'=>0,'marque_id'=>16,'qualite_id'=>20],

        ]);
    }
}
