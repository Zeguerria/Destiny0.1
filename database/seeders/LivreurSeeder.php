<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LivreurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('livreurs')->insert([
            ['id'=>1, 'domicile'=> "sotegua", 'numeroPermis'=>"AAAA11", 'phone'=>"074224011",'user_id'=>4],
            ['id'=>2, 'domicile'=> "Kembo", 'numeroPermis'=>"C-30-400-12", 'phone'=>"066543356",'user_id'=>2],
        ]);
    }
}
