<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HabilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('habilitations')->insert([
            //NAVIGATION DEBUT
            //menu et interfaces
            ['id'=>1, 'code'=> "0", 'libelle'=>"HOME", 'description'=>"Access a l'acceuil"],
            //user debut
                ['id'=>2, 'code'=> "1", 'libelle'=>"USERS", 'description'=>"Access au menu users"],
                ['id'=>3, 'code'=> "1.1", 'libelle'=>"USERS/user", 'description'=>"Access a l'interface user"],
                ['id'=>4, 'code'=> "1.2", 'libelle'=>"USERS/livreur", 'description'=>"Access a l'interface livreur"],
                ['id'=>5, 'code'=> "1.3", 'libelle'=>"USERS/client", 'description'=>"Access a l'interface client"],
                ['id'=>6, 'code'=> "1.4", 'libelle'=>"USERS/destinataire", 'description'=>"Access a l'interface destinataire"],
            //users fin
            //vehicule debut
                ['id'=>7, 'code'=> "2", 'libelle'=>"VEHICULES", 'description'=>"Access au menu vehicule"],
                ['id'=>8, 'code'=> "2.1", 'libelle'=>"VEHICULES/vehicule", 'description'=>"Access a l'interface vehicule"],
            //vehicule fin
            //produit debut
                ['id'=>9, 'code'=> "3", 'libelle'=>"PRODUITS", 'description'=>"Access au menu Produit"],
                ['id'=>10, 'code'=> "3.1", 'libelle'=>"PRODUITS/produits", 'description'=>"Access a l'interface Produit"],
            //produit fin
            //livraison debut
                ['id'=>11, 'code'=> "4", 'libelle'=>"LIVRAISONS", 'description'=>"Access au menu livraison"],
                ['id'=>12, 'code'=> "4.1", 'libelle'=>"LIVRAISONS/livraison", 'description'=>"Access a l'interface livraison"],
            //livraison fin
            //parametrage debut
                ['id'=>13, 'code'=> "5", 'libelle'=>"Pametrages", 'description'=>"Access au menu Parametrages"],
                ['id'=>14, 'code'=> "5.1", 'libelle'=>"Pametrages/parametre", 'description'=>"Access a l'interface parametre"],
                ['id'=>15, 'code'=> "5.2", 'libelle'=>"Pametrages/type de parametre", 'description'=>"Access a l'interface parametre"],
            //parametrage fin
            //gestion debut
                ['id'=>16, 'code'=> "6", 'libelle'=>"Gestions", 'description'=>"Access au menu Gestion"],
                ['id'=>17, 'code'=> "6.1", 'libelle'=>"Gestions/Habilitation", 'description'=>"Access a l'interface habilitation"],
                ['id'=>18, 'code'=> "6.2", 'libelle'=>"Gestions/Profil", 'description'=>"Access a l'interface profil"],
                ['id'=>19, 'code'=> "6.3", 'libelle'=>"Gestions/Profil Habilitation", 'description'=>"Access a l'interface profil habilitation"],
            //gestion fin
            //profil utilisateur debut
                ['id'=>20, 'code'=> "7", 'libelle'=>"Profils", 'description'=>"Access au menu profils"],
                ['id'=>21, 'code'=> "7.1", 'libelle'=>"Profils/Profil", 'description'=>"Access a l'interface profil utilisateur"],
            //profil utilisateur fin
            //corbeille debut
                ['id'=>22, 'code'=> "8", 'libelle'=>"Corbeilles", 'description'=>"Access au menu corbeille"],
                ['id'=>23, 'code'=> "8.1", 'libelle'=>"Corbeilles/client", 'description'=>"Access a l'interface client"],
                ['id'=>24, 'code'=> "8.2", 'libelle'=>"Corbeilles/destinataire", 'description'=>"Access a l'interface destinataire"],
                ['id'=>25, 'code'=> "8.3", 'libelle'=>"Corbeilles/livraison", 'description'=>"Access a l'interface livraisons"],
                ['id'=>26, 'code'=> "8.4", 'libelle'=>"Corbeilles/livreur", 'description'=>"Access a l'interface livreur"],
                ['id'=>27, 'code'=> "8.5", 'libelle'=>"Corbeilles/parametre", 'description'=>"Access a l'interface parametre"],
                ['id'=>28, 'code'=> "8.6", 'libelle'=>"Corbeilles/produit", 'description'=>"Access a l'interface produit"],
                ['id'=>29, 'code'=> "8.7", 'libelle'=>"Corbeilles/type de parametre", 'description'=>"Access a l'interface type de parametre"],
                ['id'=>30, 'code'=> "8.8", 'libelle'=>"Corbeilles/user", 'description'=>"Access a l'interface user"],
                ['id'=>31, 'code'=> "8.9", 'libelle'=>"Corbeilles/vehicule", 'description'=>"Access a l'interface vehicule"],
            //corbeilles fin
            // acceuil admin debut
                ['id'=>32, 'code'=> "9", 'libelle'=>"Acceuils", 'description'=>"Access au menu acceuil"],
                ['id'=>33, 'code'=> "9.1", 'libelle'=>"Acceuils/client", 'description'=>"Access au compte client"],
                ['id'=>34, 'code'=> "9.2", 'libelle'=>"Acceuils/livreur", 'description'=>"Access au compte livreur"],
                ['id'=>35, 'code'=> "9.3", 'libelle'=>"Acceuils/utilisateur", 'description'=>"Access au compte utilisateur"],
                ['id'=>36, 'code'=> "9.4", 'libelle'=>"Acceuils/livraison", 'description'=>"Access au compte livraison"],
                ['id'=>37, 'code'=> "9.5", 'libelle'=>"Acceuils/vehicule", 'description'=>"Access au compte vehicule"],
                ['id'=>38, 'code'=> "9.6", 'libelle'=>"Acceuils/montant", 'description'=>"Access au compte montant"],
                ['id'=>39, 'code'=> "9.7", 'libelle'=>"Acceuils/tableau", 'description'=>"Access au tableau livraison"],
                ['id'=>40, 'code'=> "9.8", 'libelle'=>"Acceuils/card/livraison", 'description'=>"Access au nombre et a l'interface livraison"],
                ['id'=>41, 'code'=> "9.9", 'libelle'=>"Acceuils/card/livraison attente", 'description'=>"Access au nombre et a l'interface livraison attente"],
                ['id'=>42, 'code'=> "9.10", 'libelle'=>"Acceuils/card/livraison cours", 'description'=>"Access au nombre et a l'interface livraison cours"],
                ['id'=>43, 'code'=> "9.11", 'libelle'=>"Acceuils/card/livraison repporté", 'description'=>"Access au nombre et a l'interface livraison repporté"],
                ['id'=>44, 'code'=> "9.12", 'libelle'=>"Acceuils/card/livraison effectué", 'description'=>"Access au nombre et a l'interface livraison effectué"],
                ['id'=>45, 'code'=> "9.13", 'libelle'=>"Acceuils/card/livraison annulé ", 'description'=>"Access au nombre et a l'interface livraison annulé"],
                ['id'=>46, 'code'=> "9.14", 'libelle'=>"Acceuils/card/type parametre ", 'description'=>"Access au nombre et a l'interface type parametre"],
                ['id'=>47, 'code'=> "9.15", 'libelle'=>"Acceuils/card/type parametre en corbeille ", 'description'=>"Access au nombre et a l'interface type parametre en corbeille"],
                ['id'=>48, 'code'=> "9.16", 'libelle'=>"Acceuils/card/ parametre", 'description'=>"Access au nombre et a l'interface parametre"],
                ['id'=>49, 'code'=> "9.17", 'libelle'=>"Acceuils/card/ parametre corbeille", 'description'=>"Access au nombre et a l'interface parametre corbeille"],
                ['id'=>50, 'code'=> "9.18", 'libelle'=>"Acceuils/card/ livreur corbeille", 'description'=>"Access au nombre et a l'interface livreur corbeille"],
                ['id'=>51, 'code'=> "9.19", 'libelle'=>"Acceuils/card/ utilisateur corbeille", 'description'=>"Access au nombre et a l'interface utilisateur corbeille"],
            // acceuil admin fin
            //user debut
                ['id'=>52, 'code'=> "9.2", 'libelle'=>"USERS/user", 'description'=>"Access a l'interface user"],
                ['id'=>53, 'code'=> "9.2.1", 'libelle'=>"USERS/user/ajouter user", 'description'=>"Access au bouton ajouter"],
                ['id'=>54, 'code'=> "9.2.2", 'libelle'=>"USERS/user/ajouter user", 'description'=>"Access a la recherche au bouton plus"],
                ['id'=>55, 'code'=> "9.2.3", 'libelle'=>"USERS/user/Option RUD user", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                ['id'=>56, 'code'=> "9.2.4", 'libelle'=>"USERS/user/Option optioncache user", 'description'=>"Access a la recherche au bouton plus"],
                // CLIENTS
                    ['id'=>57, 'code'=> "10", 'libelle'=>"CLIENT/client", 'description'=>"Access a l'interface client"],
                    ['id'=>58, 'code'=> "10.1", 'libelle'=>"CLIENT/client/ajouter client", 'description'=>"Access au bouton ajouter client"],
                    ['id'=>59, 'code'=> "10.2", 'libelle'=>"CLIENT/client/Totaux client", 'description'=>"Access au panel bouton total client"],
                    ['id'=>60, 'code'=> "10.2.1", 'libelle'=>"CLIENT/client/Total client", 'description'=>"Access au  bouton total client"],
                    ['id'=>61, 'code'=> "10.2.2", 'libelle'=>"CLIENT/client/Total client corbeille", 'description'=>"Access au  bouton total client en corbeille"],
                    ['id'=>62, 'code'=> "10.3", 'libelle'=>"CLIENT/client/Option optioncache client", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>63, 'code'=> "10.4", 'libelle'=>"CLIENT/client/Option RUD client", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],

                // CLIENTS
                 // DESTINATAIRE DEBUT
                    ['id'=>64, 'code'=> "11", 'libelle'=>"DESTINATAIRE/destinataire", 'description'=>"Access a l'interface destinataire"],
                    ['id'=>65, 'code'=> "11.1", 'libelle'=>"DESTINATAIRE/destinataire/ajouter destinataire", 'description'=>"Access au bouton ajouter destinataire"],
                    ['id'=>66, 'code'=> "11.2", 'libelle'=>"DESTINATAIRE/destinataire/Totaux destinataire", 'description'=>"Access au panel bouton total destinataire"],
                    ['id'=>67, 'code'=> "11.2.1", 'libelle'=>"DESTINATAIRE/destinataire/Total destinataire", 'description'=>"Access au  bouton total destinataire"],
                    ['id'=>68, 'code'=> "11.2.2", 'libelle'=>"DESTINATAIRE/destinataire destinataire corbeille", 'description'=>"Access au  bouton total destinataire en corbeille"],
                    ['id'=>69, 'code'=> "11.3", 'libelle'=>"DESTINATAIRE/destinataire/Option optioncache destinataire", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>70, 'code'=> "11.4", 'libelle'=>"DESTINATAIRE/destinataire/Option RUD destinataire", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                 // DESTINATAIRE FIN
            //user fin
            //VEHICULES DEBUT
                //VEHICULE DEUBUT
                    ['id'=>71, 'code'=> "12", 'libelle'=>"VEHICULES/vehicule", 'description'=>"Access a l'interface vehicule"],
                    ['id'=>72, 'code'=> "12.1", 'libelle'=>"VEHICULES/vehicule/ajouter vehicule", 'description'=>"Access au bouton ajouter vehicule"],
                    ['id'=>73, 'code'=> "12.2", 'libelle'=>"VEHICULES/vehicule/Totaux vehicule", 'description'=>"Access au panel bouton total vehicule"],
                    ['id'=>74, 'code'=> "12.2.1", 'libelle'=>"VEHICULES/vehicule/Total vehicule", 'description'=>"Access au  bouton total vehicule"],
                    ['id'=>75, 'code'=> "12.2.2", 'libelle'=>"VEHICULES/vehicule vehicule corbeille", 'description'=>"Access au  bouton total vehicule en corbeille"],
                    ['id'=>76, 'code'=> "12.3", 'libelle'=>"VEHICULES/vehicule/Option optioncache vehicule", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>77, 'code'=> "12.4", 'libelle'=>"VEHICULES/vehicule/Option RUD vehicule", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //VEHICULE FIN
            //VEHICULES FIN
            //PRODUITS DEBUT
                //PRODUIT DEUBUT
                    ['id'=>78, 'code'=> "13", 'libelle'=>"PRODUITS/produit", 'description'=>"Access a l'interface produit"],
                    ['id'=>79, 'code'=> "13.1", 'libelle'=>"PRODUITS/produit/ajouter produit", 'description'=>"Access au bouton ajouter produit"],
                    ['id'=>80, 'code'=> "13.2", 'libelle'=>"PRODUITS/produit/Totaux produit", 'description'=>"Access au panel bouton total produit"],
                    ['id'=>81, 'code'=> "13.2.1", 'libelle'=>"PRODUITS/produit/Total produit", 'description'=>"Access au  bouton total produit"],
                    ['id'=>82, 'code'=> "13.2.2", 'libelle'=>"PRODUITS/produit produit corbeille", 'description'=>"Access au  bouton total produit en corbeille"],
                    ['id'=>83, 'code'=> "13.3", 'libelle'=>"PRODUITS/produit/Option optioncache produit", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>84, 'code'=> "13.4", 'libelle'=>"PRODUITS/produit/Option RUD produit", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //PRODUIT FIN
            //PRODUITS FIN
            //LIVRAISONS DEBUT
                    //LIVRAISON DEUBUT
                    ['id'=>85, 'code'=> "14", 'libelle'=>"LIVRAISONS/livraison", 'description'=>"Access a l'interface livraison"],
                    ['id'=>86, 'code'=> "14.1", 'libelle'=>"LIVRAISONS/livraison/ajouter livraison", 'description'=>"Access au bouton ajouter livraison"],
                    ['id'=>87, 'code'=> "14.2", 'libelle'=>"LIVRAISONS/livraison/Totaux livraison", 'description'=>"Access au panel bouton total livraison"],
                    ['id'=>88, 'code'=> "14.2.1", 'libelle'=>"LIVRAISONS/livraison/Total livraison", 'description'=>"Access au  bouton total livraison"],
                    ['id'=>89, 'code'=> "14.2.2", 'libelle'=>"LIVRAISONS/livraison/Tolat livraison corbeille", 'description'=>"Access au  bouton total livraison en corbeille"],
                    ['id'=>90, 'code'=> "14.3", 'libelle'=>"LIVRAISONS/livraison/Option optioncache livraison", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>91, 'code'=> "14.4", 'libelle'=>"LIVRAISONS/livraison/Option RUD livraison", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //LIVRAISON FIN
            //LIVRAISONS FIN
            //PARAMETRAGES DEBUT
                //PARAMETRE DEUBUT
                    ['id'=>92, 'code'=> "15", 'libelle'=>"PARAMETRES/parametre", 'description'=>"Access a l'interface parametre"],
                    ['id'=>93, 'code'=> "15.1", 'libelle'=>"PARAMETRES/parametre/ajouter parametre", 'description'=>"Access au bouton ajouter parametre"],
                    ['id'=>94, 'code'=> "15.2", 'libelle'=>"PARAMETRES/parametre/Totaux parametre", 'description'=>"Access au panel bouton total parametre"],
                    ['id'=>95, 'code'=> "15.2.1", 'libelle'=>"PARAMETRES/parametre/Total parametre", 'description'=>"Access au  bouton total parametre"],
                    ['id'=>96, 'code'=> "15.2.2", 'libelle'=>"PARAMETRES/parametre/Tolat parametre corbeille", 'description'=>"Access au  bouton total parametre en corbeille"],
                    ['id'=>97, 'code'=> "15.3", 'libelle'=>"PARAMETRES/parametre/Option optioncache parametre", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>98, 'code'=> "15.4", 'libelle'=>"PARAMETRES/parametre/Option RUD parametre", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //PARAMETRE FIN
                //TYPE PARAMETRE DEUBUT
                    ['id'=>99, 'code'=> "16", 'libelle'=>"PARAMETRES/type parametre", 'description'=>"Access a l'interface type parametre"],
                    ['id'=>100, 'code'=> "16.1", 'libelle'=>"PARAMETRES/type parametre/ajouter type parametre", 'description'=>"Access au bouton ajouter type parametre"],
                    ['id'=>101, 'code'=> "16.2", 'libelle'=>"PARAMETRES/type parametre/Totaux type parametre", 'description'=>"Access au panel bouton total type parametre"],
                    ['id'=>102, 'code'=> "16.2.1", 'libelle'=>"PARAMETRES/type parametre/Total type parametre", 'description'=>"Access au  bouton total type parametre"],
                    ['id'=>103, 'code'=> "16.2.2", 'libelle'=>"PARAMETRES/type parametre/Tolat type parametre corbeille", 'description'=>"Access au  bouton total type parametre en corbeille"],
                    ['id'=>104, 'code'=> "16.3", 'libelle'=>"PARAMETRES/type parametre/Option optioncache type parametre", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>105, 'code'=> "16.4", 'libelle'=>"PARAMETRES/type parametre/Option RUD type parametre", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //TYPE PARAMETRE FIN
            //PARAMETRAGES FIN
            //GESTIONS DEBUT
                //HABILITATION DEBUT
                    ['id'=>106, 'code'=> "17", 'libelle'=>"HABILITATIONS/habilitation", 'description'=>"Access a l'interface habilitation"],
                    ['id'=>107, 'code'=> "17.1", 'libelle'=>"HABILITATIONS/habilitation/ajouter habilitation", 'description'=>"Access au bouton ajouter habilitation"],
                    ['id'=>108, 'code'=> "17.2", 'libelle'=>"HABILITATIONS/habilitation/Totaux habilitation", 'description'=>"Access au panel bouton total habilitation"],
                    ['id'=>109, 'code'=> "17.2.1", 'libelle'=>"HABILITATIONS/habilitation/Total habilitation", 'description'=>"Access au  bouton total habilitation"],
                    ['id'=>110, 'code'=> "17.2.2", 'libelle'=>"HABILITATIONS/habilitation/Tolat habilitation corbeille", 'description'=>"Access au  bouton total habilitation en corbeille"],
                    ['id'=>111, 'code'=> "17.3", 'libelle'=>"HABILITATIONS/habilitation/Option optioncache habilitation", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>112, 'code'=> "17.4", 'libelle'=>"HABILITATIONS/habilitation/Option RUD habilitation", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //HABILITATION FIN
                //PROFIL DEBUT
                    ['id'=>113, 'code'=> "18", 'libelle'=>"PROFILS/profil", 'description'=>"Access a l'interface profil"],
                    ['id'=>114, 'code'=> "18.1", 'libelle'=>"PROFILS/profil/ajouter profil", 'description'=>"Access au bouton ajouter profil"],
                    ['id'=>115, 'code'=> "18.2", 'libelle'=>"PROFILS/profil/Totaux profil", 'description'=>"Access au panel bouton total profil"],
                    ['id'=>116, 'code'=> "18.2.1", 'libelle'=>"PROFILS/profil/Total profil", 'description'=>"Access au  bouton total profil"],
                    ['id'=>117, 'code'=> "18.2.2", 'libelle'=>"PROFILS/profil/Tolat profil corbeille", 'description'=>"Access au  bouton total profil en corbeille"],
                    ['id'=>118, 'code'=> "18.3", 'libelle'=>"PROFILS/profil/Option optioncache profil", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>119, 'code'=> "18.4", 'libelle'=>"PROFILS/profil/Option RUD profil", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //PROFIL FIN
                 //PROFIL HABILITATION DEBUT
                    ['id'=>120, 'code'=> "19", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation", 'description'=>"Access a l'interface profil habilitation"],
                    ['id'=>121, 'code'=> "19.1", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/ajouter profil", 'description'=>"Access au bouton ajouter profil habilitation"],
                    ['id'=>122, 'code'=> "19.2", 'libelle'=>"PROFILS HABILITATIONS/profil  habilitation/Totaux profil", 'description'=>"Access au panel bouton total profil habilitation"],
                    ['id'=>123, 'code'=> "19.2.1", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Total profil", 'description'=>"Access au  bouton total profil habilitation"],
                    ['id'=>124, 'code'=> "19.2.2", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Tolat profil corbeille", 'description'=>"Access au  bouton total profil habilitation en corbeille"],
                    ['id'=>125, 'code'=> "19.3", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Option optioncache profil", 'description'=>"Access au  bouton  cache plus"],
                    ['id'=>126, 'code'=> "19.4", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Option RUD profil", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],
                //PROFIL HABILITATION FIN
            //GESTIONS FIN
            //PROFILS DEBUT
                //PROFIL DEBUT
                    ['id'=>127, 'code'=> "20", 'libelle'=>"PROFILS/profil ", 'description'=>"Access a l'interface profil "],
                    ['id'=>128, 'code'=> "20.1", 'libelle'=>"PROFILS/profil/modifier", 'description'=>"Access au bouton  modifier profil"],
                    ['id'=>129, 'code'=> "20.2", 'libelle'=>"PROFILS/profil /modifier role", 'description'=>"Access au label role"],
                    ['id'=>130, 'code'=> "20.3", 'libelle'=>"PROFILS/profil /modifier droit", 'description'=>"Access au label droit"],
                //PROFIL FIN

            //PROFILS FIN
            //CORBEILLE SUITE
                ['id'=>131, 'code'=> "8.10", 'libelle'=>"Corbeilles/habilitation", 'description'=>"Access a l'interface habilitation"],
                ['id'=>132, 'code'=> "8.11", 'libelle'=>"Corbeilles/profil", 'description'=>"Access a l'interface profil"],
                ['id'=>133, 'code'=> "8.12", 'libelle'=>"Corbeilles/profil habilitation", 'description'=>"Access a l'interface profil habilitation"],
            //CORBEILLE FIN
            //SUITE LIVRAISON
            ['id'=>134, 'code'=> "9.5", 'libelle'=>"USERS/PROFILIDLAB", 'description'=>"Access au profil id"],

                    // ['id'=>130, 'code'=> "19.2.1", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Total profil", 'description'=>"Access au  bouton total profil habilitation"],
                    // ['id'=>131, 'code'=> "19.2.2", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Tolat profil corbeille", 'description'=>"Access au  bouton total profil habilitation en corbeille"],
                    // ['id'=>132, 'code'=> "19.3", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Option optioncache profil", 'description'=>"Access au  bouton  cache plus"],
                    // ['id'=>133, 'code'=> "19.4", 'libelle'=>"PROFILS HABILITATIONS/profil habilitation/Option RUD profil", 'description'=>"Access  au bouton plus consulter , modifier supprimer"],

        ]);
    }
}
