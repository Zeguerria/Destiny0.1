<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilHabilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_habilitations')->insert([
            // OPERATEUR DEBUT
                ['id'=>1, 'habilitation_id'=> 1, 'profil_id'=>4],
                ['id'=>2, 'habilitation_id'=> 2, 'profil_id'=>4],
                ['id'=>3, 'habilitation_id'=> 5, 'profil_id'=>4],
                ['id'=>4, 'habilitation_id'=> 6, 'profil_id'=>4],
                ['id'=>5, 'habilitation_id'=> 9, 'profil_id'=>4],
                ['id'=>6, 'habilitation_id'=> 10, 'profil_id'=>4],
                ['id'=>7, 'habilitation_id'=> 11, 'profil_id'=>4],
                ['id'=>8, 'habilitation_id'=> 12, 'profil_id'=>4],
                ['id'=>9, 'habilitation_id'=> 14, 'profil_id'=>4],
                ['id'=>10, 'habilitation_id'=> 15, 'profil_id'=>4],
                ['id'=>11, 'habilitation_id'=> 20, 'profil_id'=>4],
                ['id'=>12, 'habilitation_id'=> 21, 'profil_id'=>4],
            // OPERATEUR FIN
            // ADMINIS DEBUT
                ['id'=>13, 'habilitation_id'=> 1, 'profil_id'=>5],
                ['id'=>14, 'habilitation_id'=> 2, 'profil_id'=>5],
                ['id'=>15, 'habilitation_id'=> 3, 'profil_id'=>5],
                ['id'=>16, 'habilitation_id'=> 4, 'profil_id'=>5],
                ['id'=>17, 'habilitation_id'=> 5, 'profil_id'=>5],
                ['id'=>18, 'habilitation_id'=> 6, 'profil_id'=>5],
                ['id'=>19, 'habilitation_id'=> 7, 'profil_id'=>5],
                ['id'=>20, 'habilitation_id'=> 8, 'profil_id'=>5],
                ['id'=>21, 'habilitation_id'=> 9, 'profil_id'=>5],
                ['id'=>22, 'habilitation_id'=> 10, 'profil_id'=>5],
                ['id'=>23, 'habilitation_id'=> 11, 'profil_id'=>5],
                ['id'=>24, 'habilitation_id'=> 12, 'profil_id'=>5],
                ['id'=>25, 'habilitation_id'=> 13, 'profil_id'=>5],
                ['id'=>26, 'habilitation_id'=> 14, 'profil_id'=>5],
                ['id'=>27, 'habilitation_id'=> 15, 'profil_id'=>5],
                ['id'=>28, 'habilitation_id'=> 20, 'profil_id'=>5],
                ['id'=>29, 'habilitation_id'=> 21, 'profil_id'=>5],
                ['id'=>30, 'habilitation_id'=> 22, 'profil_id'=>5],
                ['id'=>31, 'habilitation_id'=> 23, 'profil_id'=>5],
                ['id'=>32, 'habilitation_id'=> 24, 'profil_id'=>5],
                ['id'=>33, 'habilitation_id'=> 25, 'profil_id'=>5],
                ['id'=>34, 'habilitation_id'=> 26, 'profil_id'=>5],
                ['id'=>35, 'habilitation_id'=> 27, 'profil_id'=>5],
                ['id'=>36, 'habilitation_id'=> 28, 'profil_id'=>5],
                ['id'=>37, 'habilitation_id'=> 29, 'profil_id'=>5],
                ['id'=>38, 'habilitation_id'=> 30, 'profil_id'=>5],
                ['id'=>39, 'habilitation_id'=> 31, 'profil_id'=>5],
            // ADMINS FIN

            // SUPER  ADMINS DEBUT
                ['id'=>40, 'habilitation_id'=> 1, 'profil_id'=>6],
                ['id'=>41, 'habilitation_id'=> 2, 'profil_id'=>6],
                ['id'=>42, 'habilitation_id'=> 3, 'profil_id'=>6],
                ['id'=>43, 'habilitation_id'=> 4, 'profil_id'=>6],
                ['id'=>44, 'habilitation_id'=> 5, 'profil_id'=>6],
                ['id'=>45, 'habilitation_id'=> 6, 'profil_id'=>6],
                ['id'=>46, 'habilitation_id'=> 7, 'profil_id'=>6],
                ['id'=>47, 'habilitation_id'=> 8, 'profil_id'=>6],
                ['id'=>48, 'habilitation_id'=> 9, 'profil_id'=>6],
                ['id'=>49, 'habilitation_id'=> 10, 'profil_id'=>6],
                ['id'=>50, 'habilitation_id'=> 11, 'profil_id'=>6],
                ['id'=>51, 'habilitation_id'=> 12, 'profil_id'=>6],
                ['id'=>52, 'habilitation_id'=> 13, 'profil_id'=>6],
                ['id'=>53, 'habilitation_id'=> 14, 'profil_id'=>6],
                ['id'=>54, 'habilitation_id'=> 14, 'profil_id'=>6],
                ['id'=>55, 'habilitation_id'=> 15, 'profil_id'=>6],
                ['id'=>56, 'habilitation_id'=> 16, 'profil_id'=>6],
                ['id'=>57, 'habilitation_id'=> 17, 'profil_id'=>6],
                ['id'=>58, 'habilitation_id'=> 18, 'profil_id'=>6],
                ['id'=>59, 'habilitation_id'=> 19, 'profil_id'=>6],
                ['id'=>60, 'habilitation_id'=> 20, 'profil_id'=>6],
                ['id'=>61, 'habilitation_id'=> 21, 'profil_id'=>6],
                ['id'=>62, 'habilitation_id'=> 22, 'profil_id'=>6],
                ['id'=>63, 'habilitation_id'=> 23, 'profil_id'=>6],
                ['id'=>64, 'habilitation_id'=> 24, 'profil_id'=>6],
                ['id'=>65, 'habilitation_id'=> 25, 'profil_id'=>6],
                ['id'=>66, 'habilitation_id'=> 26, 'profil_id'=>6],
                ['id'=>67, 'habilitation_id'=> 27, 'profil_id'=>6],
                ['id'=>68, 'habilitation_id'=> 28, 'profil_id'=>6],
                ['id'=>69, 'habilitation_id'=> 29, 'profil_id'=>6],
                ['id'=>70, 'habilitation_id'=> 30, 'profil_id'=>6],
                ['id'=>71, 'habilitation_id'=> 31, 'profil_id'=>6],

            // SUPER ADMINS FIN

            //ACCEUIL DASHBORD DEBUT
                //OPERATEUR DEBUT
                    ['id'=>72, 'habilitation_id'=> 32, 'profil_id'=>4],
                    ['id'=>73, 'habilitation_id'=> 33, 'profil_id'=>4],
                    ['id'=>74, 'habilitation_id'=> 34, 'profil_id'=>4],
                    ['id'=>75, 'habilitation_id'=> 35, 'profil_id'=>4],
                    ['id'=>76, 'habilitation_id'=> 36, 'profil_id'=>4],
                    ['id'=>77, 'habilitation_id'=> 37, 'profil_id'=>4],
                    ['id'=>78, 'habilitation_id'=> 38, 'profil_id'=>4],
                    ['id'=>79, 'habilitation_id'=> 39, 'profil_id'=>4],
                    ['id'=>80, 'habilitation_id'=> 40, 'profil_id'=>4],
                    ['id'=>81, 'habilitation_id'=> 41, 'profil_id'=>4],
                    ['id'=>82, 'habilitation_id'=> 42, 'profil_id'=>4],
                    ['id'=>83, 'habilitation_id'=> 43, 'profil_id'=>4],
                    ['id'=>84, 'habilitation_id'=> 44, 'profil_id'=>4],
                    ['id'=>85, 'habilitation_id'=> 45, 'profil_id'=>4],
                    ['id'=>86, 'habilitation_id'=> 46, 'profil_id'=>4],
                    ['id'=>87, 'habilitation_id'=> 48, 'profil_id'=>4],
                //OPERATEUR FIN
                //ADMIN DEBUT
                    ['id'=>88, 'habilitation_id'=> 32, 'profil_id'=>5],
                    ['id'=>89, 'habilitation_id'=> 33, 'profil_id'=>5],
                    ['id'=>90, 'habilitation_id'=> 34, 'profil_id'=>5],
                    ['id'=>91, 'habilitation_id'=> 35, 'profil_id'=>5],
                    ['id'=>92, 'habilitation_id'=> 36, 'profil_id'=>5],
                    ['id'=>93, 'habilitation_id'=> 37, 'profil_id'=>5],
                    ['id'=>94, 'habilitation_id'=> 38, 'profil_id'=>5],
                    ['id'=>95, 'habilitation_id'=> 39, 'profil_id'=>5],
                    ['id'=>96, 'habilitation_id'=> 40, 'profil_id'=>5],
                    ['id'=>97, 'habilitation_id'=> 41, 'profil_id'=>5],
                    ['id'=>98, 'habilitation_id'=> 42, 'profil_id'=>5],
                    ['id'=>99, 'habilitation_id'=> 43, 'profil_id'=>5],
                    ['id'=>100, 'habilitation_id'=> 44, 'profil_id'=>5],
                    ['id'=>101, 'habilitation_id'=> 45, 'profil_id'=>5],
                    ['id'=>102, 'habilitation_id'=> 46, 'profil_id'=>5],
                    ['id'=>103, 'habilitation_id'=> 47, 'profil_id'=>5],
                    ['id'=>104, 'habilitation_id'=> 48, 'profil_id'=>5],
                    ['id'=>105, 'habilitation_id'=> 49, 'profil_id'=>5],
                    ['id'=>106, 'habilitation_id'=> 50, 'profil_id'=>5],
                    ['id'=>107, 'habilitation_id'=> 51, 'profil_id'=>5],
                //ADMIN FIN
                //SUPER ADMIN DEBUT
                    ['id'=>108, 'habilitation_id'=> 32, 'profil_id'=>6],
                    ['id'=>109, 'habilitation_id'=> 33, 'profil_id'=>6],
                    ['id'=>110, 'habilitation_id'=> 34, 'profil_id'=>6],
                    ['id'=>111, 'habilitation_id'=> 35, 'profil_id'=>6],
                    ['id'=>112, 'habilitation_id'=> 36, 'profil_id'=>6],
                    ['id'=>113, 'habilitation_id'=> 37, 'profil_id'=>6],
                    ['id'=>114, 'habilitation_id'=> 38, 'profil_id'=>6],
                    ['id'=>115, 'habilitation_id'=> 39, 'profil_id'=>6],
                    ['id'=>116, 'habilitation_id'=> 40, 'profil_id'=>6],
                    ['id'=>117, 'habilitation_id'=> 41, 'profil_id'=>6],
                    ['id'=>118, 'habilitation_id'=> 42, 'profil_id'=>6],
                    ['id'=>119, 'habilitation_id'=> 43, 'profil_id'=>6],
                    ['id'=>120, 'habilitation_id'=> 44, 'profil_id'=>6],
                    ['id'=>121, 'habilitation_id'=> 45, 'profil_id'=>6],
                    ['id'=>122, 'habilitation_id'=> 46, 'profil_id'=>6],
                    ['id'=>123, 'habilitation_id'=> 47, 'profil_id'=>6],
                    ['id'=>124, 'habilitation_id'=> 48, 'profil_id'=>6],
                    ['id'=>125, 'habilitation_id'=> 49, 'profil_id'=>6],
                    ['id'=>126, 'habilitation_id'=> 50, 'profil_id'=>6],
                    ['id'=>127, 'habilitation_id'=> 51, 'profil_id'=>6],
                //SUPER ADMIN DEBUT
            //ACCEUIL DASHBORD FIN
            //USERS DEBUT
                //USER DEBUT
                    // ADMIN DEBUT
                        ['id'=>128, 'habilitation_id'=> 52, 'profil_id'=>5],
                        ['id'=>129, 'habilitation_id'=> 53, 'profil_id'=>5],
                        ['id'=>130, 'habilitation_id'=> 54, 'profil_id'=>5],
                        ['id'=>131, 'habilitation_id'=> 55, 'profil_id'=>5],
                        ['id'=>132, 'habilitation_id'=> 56, 'profil_id'=>5],
                    // ADMIN FIN
                    //SUPER ADMIN DEBUT
                        ['id'=>133, 'habilitation_id'=> 52, 'profil_id'=>6],
                        ['id'=>134, 'habilitation_id'=> 53, 'profil_id'=>6],
                        ['id'=>135, 'habilitation_id'=> 54, 'profil_id'=>6],
                        ['id'=>136, 'habilitation_id'=> 55, 'profil_id'=>6],
                        ['id'=>137, 'habilitation_id'=> 56, 'profil_id'=>6],
                    //SUPER ADMIN FIN
                //USER FIN
            //USERS FIN
            //CLIENTS DEBUT
                //OPERATEUR DEBUT
                    ['id'=>138, 'habilitation_id'=> 57, 'profil_id'=>4],
                    ['id'=>139, 'habilitation_id'=> 58, 'profil_id'=>4],
                    ['id'=>140, 'habilitation_id'=> 59, 'profil_id'=>4],
                    ['id'=>141, 'habilitation_id'=> 60, 'profil_id'=>4],
                    ['id'=>142, 'habilitation_id'=> 62, 'profil_id'=>4],
                    ['id'=>143, 'habilitation_id'=> 63, 'profil_id'=>4],
                //OPERATEUR FIN
                //ADMIN DEBUT
                    ['id'=>144, 'habilitation_id'=> 57, 'profil_id'=>5],
                    ['id'=>145, 'habilitation_id'=> 58, 'profil_id'=>5],
                    ['id'=>146, 'habilitation_id'=> 59, 'profil_id'=>5],
                    ['id'=>147, 'habilitation_id'=> 60, 'profil_id'=>5],
                    ['id'=>148, 'habilitation_id'=> 61, 'profil_id'=>5],
                    ['id'=>149, 'habilitation_id'=> 62, 'profil_id'=>5],
                    ['id'=>150, 'habilitation_id'=> 63, 'profil_id'=>5],
                //ADMIN FIN
                //SUPER ADMIN DEBUT
                    ['id'=>151, 'habilitation_id'=> 57, 'profil_id'=>6],
                    ['id'=>152, 'habilitation_id'=> 58, 'profil_id'=>6],
                    ['id'=>153, 'habilitation_id'=> 59, 'profil_id'=>6],
                    ['id'=>154, 'habilitation_id'=> 60, 'profil_id'=>6],
                    ['id'=>155, 'habilitation_id'=> 61, 'profil_id'=>6],
                    ['id'=>156, 'habilitation_id'=> 62, 'profil_id'=>6],
                    ['id'=>157, 'habilitation_id'=> 63, 'profil_id'=>6],
                //SUPER ADMIN FIN
            //CLIENTS DEBUT
            //DESTINATAIRE DEBUT
                //OPERATEUR DEBUT
                    ['id'=>158, 'habilitation_id'=> 64, 'profil_id'=>4],
                    ['id'=>159, 'habilitation_id'=> 65, 'profil_id'=>4],
                    ['id'=>160, 'habilitation_id'=> 66, 'profil_id'=>4],
                    ['id'=>161, 'habilitation_id'=> 67, 'profil_id'=>4],
                    ['id'=>162, 'habilitation_id'=> 69, 'profil_id'=>4],
                    ['id'=>163, 'habilitation_id'=> 70, 'profil_id'=>4],
                //OPERATEUR FIN
                //ADMIN DEBUT
                    ['id'=>164, 'habilitation_id'=> 64, 'profil_id'=>5],
                    ['id'=>165, 'habilitation_id'=> 65, 'profil_id'=>5],
                    ['id'=>166, 'habilitation_id'=> 66, 'profil_id'=>5],
                    ['id'=>167, 'habilitation_id'=> 67, 'profil_id'=>5],
                    ['id'=>168, 'habilitation_id'=> 68, 'profil_id'=>5],
                    ['id'=>169, 'habilitation_id'=> 69, 'profil_id'=>5],
                    ['id'=>170, 'habilitation_id'=> 70, 'profil_id'=>5],
                //ADMIN FIN
                //SUPER ADMIN DEBUT
                    ['id'=>171, 'habilitation_id'=> 64, 'profil_id'=>6],
                    ['id'=>172, 'habilitation_id'=> 65, 'profil_id'=>6],
                    ['id'=>173, 'habilitation_id'=> 66, 'profil_id'=>6],
                    ['id'=>174, 'habilitation_id'=> 67, 'profil_id'=>6],
                    ['id'=>175, 'habilitation_id'=> 68, 'profil_id'=>6],
                    ['id'=>176, 'habilitation_id'=> 69, 'profil_id'=>6],
                    ['id'=>177, 'habilitation_id'=> 70, 'profil_id'=>6],
                //SUPER ADMIN FIN
            //VEHICULES DEBUT
                //VEHICULE DEBUT
                    //OPERATEUR DEBUT
                        ['id'=>178, 'habilitation_id'=> 71, 'profil_id'=>4],
                        ['id'=>179, 'habilitation_id'=> 72, 'profil_id'=>4],
                        ['id'=>180, 'habilitation_id'=> 73, 'profil_id'=>4],
                        ['id'=>181, 'habilitation_id'=> 74, 'profil_id'=>4],
                        ['id'=>182, 'habilitation_id'=> 76, 'profil_id'=>4],
                        ['id'=>183, 'habilitation_id'=> 77, 'profil_id'=>4],
                    //OPERATEUR FIN
                    //ADMIN DEBUT
                        ['id'=>184, 'habilitation_id'=> 71, 'profil_id'=>5],
                        ['id'=>185, 'habilitation_id'=> 72, 'profil_id'=>5],
                        ['id'=>186, 'habilitation_id'=> 73, 'profil_id'=>5],
                        ['id'=>187, 'habilitation_id'=> 74, 'profil_id'=>5],
                        ['id'=>188, 'habilitation_id'=> 75, 'profil_id'=>5],
                        ['id'=>189, 'habilitation_id'=> 76, 'profil_id'=>5],
                        ['id'=>190, 'habilitation_id'=> 77, 'profil_id'=>5],
                    //ADMIN FIN
                    //SUPER ADMIN DEBUT
                        ['id'=>191, 'habilitation_id'=> 71, 'profil_id'=>6],
                        ['id'=>192, 'habilitation_id'=> 72, 'profil_id'=>6],
                        ['id'=>193, 'habilitation_id'=> 73, 'profil_id'=>6],
                        ['id'=>194, 'habilitation_id'=> 74, 'profil_id'=>6],
                        ['id'=>195, 'habilitation_id'=> 75, 'profil_id'=>6],
                        ['id'=>196, 'habilitation_id'=> 76, 'profil_id'=>6],
                        ['id'=>197, 'habilitation_id'=> 77, 'profil_id'=>6],
                    //SUPER ADMIN FIN
                //VEHICULE FIN
            //VEHICULES DEBUT
            //PRODUIT DEBUT
                //PRODUIT DEBUT
                    //OPERATEUR DEBUT
                    ['id'=>198, 'habilitation_id'=> 78, 'profil_id'=>4],
                    ['id'=>199, 'habilitation_id'=> 79, 'profil_id'=>4],
                    ['id'=>200, 'habilitation_id'=> 80, 'profil_id'=>4],
                    ['id'=>201, 'habilitation_id'=> 81, 'profil_id'=>4],
                    ['id'=>202, 'habilitation_id'=> 83, 'profil_id'=>4],
                    ['id'=>203, 'habilitation_id'=> 84, 'profil_id'=>4],
                //OPERATEUR FIN
                //ADMIN DEBUT
                    ['id'=>204, 'habilitation_id'=> 78, 'profil_id'=>5],
                    ['id'=>205, 'habilitation_id'=> 79, 'profil_id'=>5],
                    ['id'=>206, 'habilitation_id'=> 80, 'profil_id'=>5],
                    ['id'=>207, 'habilitation_id'=> 81, 'profil_id'=>5],
                    ['id'=>208, 'habilitation_id'=> 82, 'profil_id'=>5],
                    ['id'=>209, 'habilitation_id'=> 83, 'profil_id'=>5],
                    ['id'=>210, 'habilitation_id'=> 84, 'profil_id'=>5],
                //ADMIN FIN
                //SUPER ADMIN DEBUT
                    ['id'=>211, 'habilitation_id'=> 78, 'profil_id'=>6],
                    ['id'=>212, 'habilitation_id'=> 79, 'profil_id'=>6],
                    ['id'=>213, 'habilitation_id'=> 80, 'profil_id'=>6],
                    ['id'=>214, 'habilitation_id'=> 81, 'profil_id'=>6],
                    ['id'=>215, 'habilitation_id'=> 82, 'profil_id'=>6],
                    ['id'=>216, 'habilitation_id'=> 83, 'profil_id'=>6],
                    ['id'=>217, 'habilitation_id'=> 84, 'profil_id'=>6],
                //SUPER ADMIN FIN
            //PROUDIT FIN
            //LIVRAISONS DEBUT
                //LIVRAISON DEBUT
                    //OPERATEUR DEBUT
                        ['id'=>218, 'habilitation_id'=> 85, 'profil_id'=>4],
                        ['id'=>219, 'habilitation_id'=> 86, 'profil_id'=>4],
                        ['id'=>220, 'habilitation_id'=> 87, 'profil_id'=>4],
                        ['id'=>221, 'habilitation_id'=> 88, 'profil_id'=>4],
                        ['id'=>222, 'habilitation_id'=> 90, 'profil_id'=>4],
                        ['id'=>223, 'habilitation_id'=> 91, 'profil_id'=>4],
                    // //OPERATEUR FIN
                    //ADMIN DEBUT
                        ['id'=>224, 'habilitation_id'=> 85, 'profil_id'=>5],
                        ['id'=>225, 'habilitation_id'=> 86, 'profil_id'=>5],
                        ['id'=>226, 'habilitation_id'=> 87, 'profil_id'=>5],
                        ['id'=>227, 'habilitation_id'=> 88, 'profil_id'=>5],
                        ['id'=>228, 'habilitation_id'=> 89, 'profil_id'=>5],
                        ['id'=>229, 'habilitation_id'=> 90, 'profil_id'=>5],
                        ['id'=>230, 'habilitation_id'=> 91, 'profil_id'=>5],
                    //ADMIN FIN
                    //SUPER ADMIN DEBUT
                        ['id'=>231, 'habilitation_id'=> 85, 'profil_id'=>6],
                        ['id'=>232, 'habilitation_id'=> 86, 'profil_id'=>6],
                        ['id'=>233, 'habilitation_id'=> 87, 'profil_id'=>6],
                        ['id'=>234, 'habilitation_id'=> 88, 'profil_id'=>6],
                        ['id'=>235, 'habilitation_id'=> 89, 'profil_id'=>6],
                        ['id'=>236, 'habilitation_id'=> 90, 'profil_id'=>6],
                        ['id'=>237, 'habilitation_id'=> 91, 'profil_id'=>6],
                    //SUPER ADMIN FIN
                //LIVRAISONS FIN
            //LIVRAISONS FIN
            //PARAMETRAGES DEBUT
                //PARAMETRE DEBUT
                    //OPERATEUR DEBUT
                        ['id'=>238, 'habilitation_id'=> 92, 'profil_id'=>4],
                        ['id'=>239, 'habilitation_id'=> 93, 'profil_id'=>4],
                        ['id'=>240, 'habilitation_id'=> 94, 'profil_id'=>4],
                        ['id'=>241, 'habilitation_id'=> 95, 'profil_id'=>4],
                        ['id'=>242, 'habilitation_id'=> 97, 'profil_id'=>4],
                        ['id'=>243, 'habilitation_id'=> 98, 'profil_id'=>4],
                    //OPERATEUR FIN
                    //ADMIN DEBUT
                        ['id'=>244, 'habilitation_id'=> 92, 'profil_id'=>5],
                        ['id'=>245, 'habilitation_id'=> 93, 'profil_id'=>5],
                        ['id'=>246, 'habilitation_id'=> 94, 'profil_id'=>5],
                        ['id'=>247, 'habilitation_id'=> 95, 'profil_id'=>5],
                        ['id'=>248, 'habilitation_id'=> 96, 'profil_id'=>5],
                        ['id'=>249, 'habilitation_id'=> 97, 'profil_id'=>5],
                        ['id'=>250, 'habilitation_id'=> 98, 'profil_id'=>5],
                    //ADMIN FIN
                    //SUPER ADMIN DEBUT
                        ['id'=>251, 'habilitation_id'=> 92, 'profil_id'=>6],
                        ['id'=>252, 'habilitation_id'=> 93, 'profil_id'=>6],
                        ['id'=>253, 'habilitation_id'=> 94, 'profil_id'=>6],
                        ['id'=>254, 'habilitation_id'=> 95, 'profil_id'=>6],
                        ['id'=>255, 'habilitation_id'=> 96, 'profil_id'=>6],
                        ['id'=>256, 'habilitation_id'=> 97, 'profil_id'=>6],
                        ['id'=>257, 'habilitation_id'=> 98, 'profil_id'=>6],
                    //SUPER ADMIN FIN
                //PARAMETRE FIN
                //TYPE PARAMETRE DEBUT
                    //OPERATEUR DEBUT
                        ['id'=>258, 'habilitation_id'=> 99, 'profil_id'=>4],
                        ['id'=>259, 'habilitation_id'=> 100, 'profil_id'=>4],
                        ['id'=>260, 'habilitation_id'=> 101, 'profil_id'=>4],
                        ['id'=>261, 'habilitation_id'=> 102, 'profil_id'=>4],
                        ['id'=>262, 'habilitation_id'=> 104, 'profil_id'=>4],
                        ['id'=>263, 'habilitation_id'=> 105, 'profil_id'=>4],
                    //OPERATEUR FIN
                    //ADMIN DEBUT
                        ['id'=>264, 'habilitation_id'=> 99, 'profil_id'=>5],
                        ['id'=>265, 'habilitation_id'=> 100, 'profil_id'=>5],
                        ['id'=>266, 'habilitation_id'=> 101, 'profil_id'=>5],
                        ['id'=>267, 'habilitation_id'=> 102, 'profil_id'=>5],
                        ['id'=>268, 'habilitation_id'=> 103, 'profil_id'=>5],
                        ['id'=>269, 'habilitation_id'=> 104, 'profil_id'=>5],
                        ['id'=>270, 'habilitation_id'=> 105, 'profil_id'=>5],
                    //ADMIN FIN
                    //SUPER ADMIN DEBUT
                        ['id'=>271, 'habilitation_id'=> 99, 'profil_id'=>6],
                        ['id'=>272, 'habilitation_id'=> 100, 'profil_id'=>6],
                        ['id'=>273, 'habilitation_id'=> 101, 'profil_id'=>6],
                        ['id'=>274, 'habilitation_id'=> 102, 'profil_id'=>6],
                        ['id'=>275, 'habilitation_id'=> 103, 'profil_id'=>6],
                        ['id'=>276, 'habilitation_id'=> 104, 'profil_id'=>6],
                        ['id'=>277, 'habilitation_id'=> 105, 'profil_id'=>6],
                    //SUPER ADMIN FIN
                //TYPE PARAMETRE FIN
            //PARAMETRAGES FIN
            //GESTIONS DEBUT
                //HABILITATION DEBUT
                    ['id'=>278, 'habilitation_id'=> 106, 'profil_id'=>6],
                    ['id'=>279, 'habilitation_id'=> 107, 'profil_id'=>6],
                    ['id'=>280, 'habilitation_id'=> 108, 'profil_id'=>6],
                    ['id'=>281, 'habilitation_id'=> 109, 'profil_id'=>6],
                    ['id'=>282, 'habilitation_id'=> 110, 'profil_id'=>6],
                    ['id'=>283, 'habilitation_id'=> 111, 'profil_id'=>6],
                    ['id'=>284, 'habilitation_id'=> 112, 'profil_id'=>6],
                //HABILITATION FIN
                //PROFIL DEBUT
                    ['id'=>285, 'habilitation_id'=> 113, 'profil_id'=>6],
                    ['id'=>286, 'habilitation_id'=> 114, 'profil_id'=>6],
                    ['id'=>287, 'habilitation_id'=> 115, 'profil_id'=>6],
                    ['id'=>288, 'habilitation_id'=> 116, 'profil_id'=>6],
                    ['id'=>289, 'habilitation_id'=> 117, 'profil_id'=>6],
                    ['id'=>290, 'habilitation_id'=> 118, 'profil_id'=>6],
                    ['id'=>291, 'habilitation_id'=> 119, 'profil_id'=>6],
                //PROFIL FIN
                //PROFIL HABILITATION DEBUT
                    ['id'=>292, 'habilitation_id'=> 120, 'profil_id'=>6],
                    ['id'=>293, 'habilitation_id'=> 121, 'profil_id'=>6],
                    ['id'=>294, 'habilitation_id'=> 122, 'profil_id'=>6],
                    ['id'=>295, 'habilitation_id'=> 123, 'profil_id'=>6],
                    ['id'=>296, 'habilitation_id'=> 124, 'profil_id'=>6],
                    ['id'=>297, 'habilitation_id'=> 125, 'profil_id'=>6],
                    ['id'=>298, 'habilitation_id'=> 126, 'profil_id'=>6],
                //PROFIL HABILITATION FIN

            //GESTIONS FIN
            //PROFILS DEBUT
                //PROFIL DEBUT
                    //OPERATEUR DEBUT
                        ['id'=>299, 'habilitation_id'=> 127, 'profil_id'=>4],
                        ['id'=>300, 'habilitation_id'=> 128, 'profil_id'=>4],
                    //OPERATEUR FIN
                    //ADMIN DEBUT
                        ['id'=>301, 'habilitation_id'=> 127, 'profil_id'=>5],
                        ['id'=>302, 'habilitation_id'=> 128, 'profil_id'=>5],

                    //ADMIN FIN
                    //ADMIN DEBUT
                        ['id'=>303, 'habilitation_id'=> 127, 'profil_id'=>6],
                        ['id'=>304, 'habilitation_id'=> 128, 'profil_id'=>6],
                        ['id'=>305, 'habilitation_id'=> 129, 'profil_id'=>6],
                        ['id'=>306, 'habilitation_id'=> 130, 'profil_id'=>6],
                    //ADMIN FIN
                //PROFIL DEBUT

            //PROFILS FIN
                //CORBEILLE SUITE
                ['id'=>307, 'habilitation_id'=> 131, 'profil_id'=>6],
                ['id'=>308, 'habilitation_id'=> 132, 'profil_id'=>6],
                ['id'=>309, 'habilitation_id'=> 132, 'profil_id'=>6],
                ['id'=>310, 'habilitation_id'=> 133, 'profil_id'=>6],

                //CORBEILLE FIN
                ['id'=>311, 'habilitation_id'=> 134, 'profil_id'=>6],

         ]);
    }
}
