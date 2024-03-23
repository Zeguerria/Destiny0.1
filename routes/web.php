<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashacceuil', 'App\Http\Controllers\AcceuillDashbordController@index')->name("Acceuil DashBord");
    Route::get('/help', 'App\Http\Controllers\AcceuillDashbordController@help')->name("Help");
    Route::get('/livdashacceuil', 'App\Http\Controllers\AcceuillDashbordController@indexliv')->name("Acceuil livreurDashBord");

    //route en get type de parametre, nom de la route , lien du controller , @ function
    Route::get('typeParametre', 'App\Http\Controllers\TypeParametreController@index');
     //tout supprimer
     Route::get('deleteAlltypeparametre', 'App\Http\Controllers\TypeParametreController@delete_all');
     //tout mettre en corbeille azertyui
     Route::get('corbeilleAlltypeparametre', 'App\Http\Controllers\TypeParametreController@corbeille_all')->name('corbeilleAlltypeparametre');
     Route::get('recupAlltypeparametre', 'App\Http\Controllers\TypeParametreController@recup_all')->name('recupAlltypeparametre');
     //route corbeille
     Route::get('typeParametreCorbeille', 'App\Http\Controllers\TypeParametreController@indexCorbeille');
    //fonction type de parametre
    Route::post('ajouterTypeParametre', 'App\Http\Controllers\TypeParametreController@store')->name('ajouterTypeParametre');
    Route::post('modifierTypeParametre', 'App\Http\Controllers\TypeParametreController@update')->name('modifierTypeParametre');
    Route::post('supprimerTypeParametre', 'App\Http\Controllers\TypeParametreController@destroy')->name('supprimerTypeParametre');
    Route::post('corbeilleTypeParametre', 'App\Http\Controllers\TypeParametreController@corbeille')->name('corbeilleTypeParametre');
    Route::post('recuptypeParametre', 'App\Http\Controllers\TypeParametreController@recup_corbeille')->name('recupTypeParametre');
    Route::get('/searchTypeParametre' ,'App\Http\Controllers\TypeParametreController@search');
    Route::get('/searchTypeParametreCorbeille' ,'App\Http\Controllers\TypeParametreController@searchCorbeille');


    //route de parametre
    Route::get('parametre', 'App\Http\Controllers\ParametreController@index');
     //tout supprimer
     Route::get('deleteAllparametre', 'App\Http\Controllers\ParametreController@delete_all');
     //tout mettre en corbeille
     Route::get('corbeilleAllparametre', 'App\Http\Controllers\ParametreController@corbeille_all')->name('corbeilleAllparametre');
     Route::get('recupAllparametre', 'App\Http\Controllers\ParametreController@recup_all')->name('recupAllparametre');
     //route corbeille
     Route::get('parametreCorbeille', 'App\Http\Controllers\ParametreController@indexCorbeille');
    //fonction de parametre
    Route::post('ajouterParametre', 'App\Http\Controllers\ParametreController@store')->name('ajouterParametre');
    Route::post('modifierParametre', 'App\Http\Controllers\ParametreController@update')->name('modifierParametre');
    Route::post('supprimerParametre', 'App\Http\Controllers\ParametreController@destroy')->name('supprimerParametre');
    Route::post('corbeilleParametre', 'App\Http\Controllers\ParametreController@corbeille')->name('corbeilleParametre');
    Route::post('recupParametre', 'App\Http\Controllers\ParametreController@recup_corbeille')->name('recupParametre');
    Route::get('/searchParametre' ,'App\Http\Controllers\ParametreController@search');
    Route::get('/searchParametreCorbeille' ,'App\Http\Controllers\ParametreController@searchCorbeille');

    //route de Livreur
    Route::get('livreur', 'App\Http\Controllers\LivreurController@index');
    //mettre en pdf tous les livreurs
    Route::get('livreurspdf', 'App\Http\Controllers\LivreurController@alllivpdf');


    //tout supprimer
    Route::get('deleteAlllivreurclient', 'App\Http\Controllers\LivreurController@delete_all');
    //tout mettre en corbeille
    Route::get('corbeilleAlllivreurclient', 'App\Http\Controllers\LivreurController@corbeille_all')->name('corbeilleAlllivreurclient');
    Route::get('recupAlllivreurclient', 'App\Http\Controllers\LivreurController@recup_all')->name('recupAlllivreurclient');
    //route corbeille
    Route::get('livreurCorbeille', 'App\Http\Controllers\LivreurController@indexCorbeille');
    //fonction de Livreur
    Route::post('ajouterLivreur', 'App\Http\Controllers\LivreurController@store')->name('ajouterLivreur');
    //Route::get('TriDom', 'App\Http\Controllers\LivreurController@indexTrieDomAdc');
    Route::post('modifierLivreur', 'App\Http\Controllers\LivreurController@update')->name('modifierLivreur');
    Route::post('supprimerLivreur', 'App\Http\Controllers\LivreurController@destroy')->name('supprimerLivreur');
    Route::post('corbeilleLivreur', 'App\Http\Controllers\LivreurController@corbeille')->name('corbeilleLivreur');
    Route::post('recupLivreur', 'App\Http\Controllers\LivreurController@recup_corbeille')->name('recupLivreur');

    //

    //client debut
    //barre de recherche
    Route::get('/searchLivreur' ,'App\Http\Controllers\LivreurController@search');
    Route::get('/searchLivreurCorbeille' ,'App\Http\Controllers\LivreurController@searchCorbeille');
    //
    //
    //route de Vehicule
    Route::get('vehicule', 'App\Http\Controllers\VehiculeController@index');
    //fonction de Vehicule
    Route::post('ajouterVehicule', 'App\Http\Controllers\VehiculeController@store')->name('ajouterVehicule');
    Route::post('modifierVehicule', 'App\Http\Controllers\VehiculeController@update')->name('modifierVehicule');
    Route::post('supprimerVehicule', 'App\Http\Controllers\VehiculeController@destroy')->name('supprimerVehicule');
    Route::post('corbeilleVehicule', 'App\Http\Controllers\VehiculeController@corbeille')->name('corbeilleVehicule');
    //
    Route::get('vehiculeCorbeille', 'App\Http\Controllers\VehiculeController@indexCorbeille');
    Route::get('deleteAllvehicule', 'App\Http\Controllers\VehiculeController@delete_all');
    Route::get('recupAllvehicule', 'App\Http\Controllers\VehiculeController@recup_all')->name('recupAllvehicule');
    Route::post('recupVehicule', 'App\Http\Controllers\VehiculeController@recup_corbeille')->name('recupVehicule');

    //barre de rechercherecup_corbeille
    Route::get('/searchVehicule' ,'App\Http\Controllers\VehiculeController@search');
    Route::get('/searchVehiculeCorbeille' ,'App\Http\Controllers\VehiculeController@searchCorbeille');
    Route::get('vehiculespdf', 'App\Http\Controllers\VehiculeController@allvehicules')->name('vehiculespdf');




    ///vehicule fin allvehicules


    //route de Client
    Route::get('client', 'App\Http\Controllers\ClientController@index');
     //route corbeille
     Route::get('clientCorbeille', 'App\Http\Controllers\ClientController@indexCorbeille');
     Route::get('destinatairevehicule', 'App\Http\Controllers\ClientController@delete_all');
     //tout mettre en corbeille
     Route::get('corbeilleAllclient', 'App\Http\Controllers\ClientController@corbeille_all')->name('corbeilleAllclient');
     Route::get('recupAllclient', 'App\Http\Controllers\ClientController@recup_all')->name('recupAllclient');
    //fonction de Client
    Route::post('ajouterClient', 'App\Http\Controllers\ClientController@store')->name('ajouterClient');
    Route::post('modifierClient', 'App\Http\Controllers\ClientController@update')->name('modifierClient');
    Route::post('supprimerClient', 'App\Http\Controllers\ClientController@destroy')->name('supprimerClient');
    Route::post('corbeilleClient', 'App\Http\Controllers\ClientController@corbeille')->name('corbeilleClient');
    Route::post('recupClient', 'App\Http\Controllers\ClientController@recup_corbeille')->name('recupClient');
     //barre de recherche
     Route::get('/searchClient' ,'App\Http\Controllers\ClientController@search');
     Route::get('/searchClientCorbeille' ,'App\Http\Controllers\ClientController@searchCorbeille');
    Route::get('clientspdf', 'App\Http\Controllers\ClientController@allclients')->name('clientspdf');

    //Route::get('/searchClient' ,'App\Http\Controllers\ClientController@searchPrenom');



    //client fin





    //destinataire debut

    //route de destinataire
    Route::get('destinataire', 'App\Http\Controllers\DestinataireController@index');
    //route corbeille
    Route::get('destinataireCorbeille', 'App\Http\Controllers\DestinataireController@indexCorbeille');
    Route::get('deleteAlldestinatairevehicule', 'App\Http\Controllers\DestinataireController@delete_all');
    //tout mettre en corbeille
    Route::get('corbeilleAlldestinatairevehicule', 'App\Http\Controllers\DestinataireController@corbeille_all')->name('corbeilleAlldestinatairevehicule');
    Route::get('recupAlldestinatairevehicule', 'App\Http\Controllers\DestinataireController@recup_all')->name('recupAlldestinatairevehicule');
    //fonction de destinataire
    Route::post('ajouterDestinataire', 'App\Http\Controllers\DestinataireController@store')->name('ajouterDestinataire');
    Route::post('modifierDestinataire', 'App\Http\Controllers\DestinataireController@update')->name('modifierDestinataire');
    Route::post('supprimerDestinataire', 'App\Http\Controllers\DestinataireController@destroy')->name('supprimerDestinataire');
    Route::post('corbeilleDestinataire', 'App\Http\Controllers\DestinataireController@corbeille')->name('corbeilleDestinataire');
    Route::post('recupDestinataire', 'App\Http\Controllers\DestinataireController@recup_corbeille')->name('recupDestinataire');
    //barre de recherche
    Route::get('/searchDestinataire' ,'App\Http\Controllers\DestinataireController@searchNom');
    Route::get('/searchDestinataireCorbeille' ,'App\Http\Controllers\DestinataireController@searchCorbleille');
    Route::get('destinatairespdf', 'App\Http\Controllers\DestinataireController@alldestinataires')->name('destinatairespdf');




    //destinataire fin

    //route de livraison

    //pdf
    Route::get('livraisonspdf', 'App\Http\Controllers\LivraisonController@alllivpdf')->name('livraisonspdf');
    Route::get('livraisonpdf/{id}', 'App\Http\Controllers\LivraisonController@onelivraison');
    Route::get('livraison', 'App\Http\Controllers\LivraisonController@index');
    //tout supprimer
    Route::get('deleteAlllivraison', 'App\Http\Controllers\LivraisonController@delete_all');
    //tout mettre en corbeille
    Route::get('parametretypeparametre', 'App\Http\Controllers\LivraisonController@corbeille_all')->name('corbeilleAlllivraison');
    Route::get('recupAlllivraison', 'App\Http\Controllers\LivraisonController@recup_all')->name('recupAlllivraison');
    //route corbeille
    Route::get('livraisonCorbeille', 'App\Http\Controllers\LivraisonController@indexCorbeille');
    //fonction de livraison
    Route::post('ajouterLivraison', 'App\Http\Controllers\LivraisonController@store')->name('ajouterLivraison');
    Route::post('modifierLivraison', 'App\Http\Controllers\LivraisonController@update')->name('modifierLivraison');
    Route::post('supprimerLivraison', 'App\Http\Controllers\LivraisonController@destroy')->name('supprimerLivraison');
    Route::post('corbeilleLivraison', 'App\Http\Controllers\LivraisonController@corbeille')->name('corbeilleLivraison');
    Route::post('recupLivraison', 'App\Http\Controllers\LivraisonController@recup_corbeille')->name('recupLivraison');
    Route::get('/searchLivraisonG' ,'App\Http\Controllers\LivraisonController@search');
    Route::get('/searchLivraison' ,'App\Http\Controllers\LivraisonController@searchLiv');
    Route::get('/searchLivraisonCorbeilleG' ,'App\Http\Controllers\LivraisonController@searchCorbeille');
    //tries
    // Route::get('/imprimer_retrait/{id}', 'App\Http\Controllers\RetraitController@imprimer_retrait');
    //
    Route::get('attente', 'App\Http\Controllers\LivraisonController@attente');
    Route::get('annule', 'App\Http\Controllers\LivraisonController@annule');
    Route::get('reporte', 'App\Http\Controllers\LivraisonController@reporte');
    Route::get('cours', 'App\Http\Controllers\LivraisonController@cours');
    Route::get('effectue', 'App\Http\Controllers\LivraisonController@effectue');


    //indexAdmin


    //route de user
    Route::get('userspdf', 'App\Http\Controllers\UserController@allusers')->name('userspdf');

    //barre de recherche
    Route::get('/searchUser' ,'App\Http\Controllers\UserController@search');
    Route::get('/searchUserCorbeille' ,'App\Http\Controllers\UserController@searchCorbeille');
    Route::get('user', 'App\Http\Controllers\UserController@index');
    //route de profil
    Route::get('profilAdmin', 'App\Http\Controllers\UserController@indexAdmin');
    //tout supprimer
    Route::get('deleteAlluser', 'App\Http\Controllers\UserController@delete_all');
    //tout mettre en corbeille
    Route::get('corbeilleAlluser', 'App\Http\Controllers\UserController@corbeille_all')->name('corbeilleAlluser');
    Route::get('recupAlluser', 'App\Http\Controllers\UserController@recup_all')->name('recupAlluser');
    //route corbeille
    Route::get('userCorbeille', 'App\Http\Controllers\UserController@indexCorbeille');
    //fonction de user
    Route::post('ajouterUser', 'App\Http\Controllers\UserController@store')->name('ajouterUser');
    Route::post('modifierUser', 'App\Http\Controllers\UserController@update')->name('modifierUser');
    Route::post('supprimerUser', 'App\Http\Controllers\UserController@destroy')->name('supprimerUser');
    Route::post('corbeilleUser', 'App\Http\Controllers\UserController@corbeille')->name('corbeilleUser');
    Route::post('recupUser', 'App\Http\Controllers\UserController@recup_corbeille')->name('recupUser');
    //





    //habilitation debut





    //route de Habilitation
    Route::get('habilitation', 'App\Http\Controllers\HabilitationController@index');
    Route::get('habilitationCorbeille', 'App\Http\Controllers\HabilitationController@indexCorbeille');

    //fonction de Habilitation
    Route::post('ajouterHabilitation', 'App\Http\Controllers\HabilitationController@store')->name('ajouterHabilitation');
    Route::post('modifierHabilitation', 'App\Http\Controllers\HabilitationController@update')->name('modifierHabilitation');
    Route::post('supprimerHabilitation', 'App\Http\Controllers\HabilitationController@destroy')->name('supprimerHabilitation');
    Route::post('corbeilleHabilitation', 'App\Http\Controllers\HabilitationController@corbeille')->name('corbeilleHabilitation');
    Route::post('recupHabilitation', 'App\Http\Controllers\HabilitationController@recup_corbeille')->name('recupHabilitation');

    //barre de recherche
    Route::get('/searchHabilitation' ,'App\Http\Controllers\HabilitationController@search');
    Route::get('/searchHabilitationCorbeille' ,'App\Http\Controllers\HabilitationController@searchCorbeille');
    Route::get('deleteAllhabilitation', 'App\Http\Controllers\HabilitationController@delete_all');
    Route::get('corbeilleAllhabilitation', 'App\Http\Controllers\HabilitationController@corbeille_all')->name('corbeilleAllhabilitation');
    Route::get('recupAllhabilitation', 'App\Http\Controllers\HabilitationController@recup_all')->name('recupAllhabilitation');

    //habilitation fin
    //


    //profil debut


    //route de Profil
    Route::get('profil', 'App\Http\Controllers\ProfilController@index');
    Route::get('profilCorbeille', 'App\Http\Controllers\ProfilController@indexCorbeille');
    Route::get('deleteAllprofil', 'App\Http\Controllers\ProfilController@delete_all');
    Route::get('corbeilleAllprofil', 'App\Http\Controllers\ProfilController@corbeille_all')->name('corbeilleAllprofil');
    Route::get('recupAllprofil', 'App\Http\Controllers\ProfilController@recup_all')->name('recupAllprofil');

    //fonction de Profil
    Route::post('ajouterProfil', 'App\Http\Controllers\ProfilController@store')->name('ajouterProfil');
    Route::post('modifierProfil', 'App\Http\Controllers\ProfilController@update')->name('modifierProfil');
    Route::post('supprimerProfil', 'App\Http\Controllers\ProfilController@destroy')->name('supprimerProfil');
    Route::post('corbeilleProfil', 'App\Http\Controllers\ProfilController@corbeille')->name('corbeilleProfil');
    Route::post('recupProfil', 'App\Http\Controllers\ProfilController@recup_corbeille')->name('recupProfil');

    //barre de recherche
    Route::get('/searchProfil' ,'App\Http\Controllers\ProfilController@search');
    Route::get('/searchProfilCorbeille' ,'App\Http\Controllers\ProfilController@searchCorbeille');
    //profil fin
    //


    //profilhabilitation debut


    //route de ProfilHabilitation
    Route::get('profilhabilitation', 'App\Http\Controllers\ProfilHabilitationController@index');
    Route::get('profilhabilitationCorbeille', 'App\Http\Controllers\ProfilHabilitationController@indexCorbeille');

    Route::get('deleteAllprofilhabilitation', 'App\Http\Controllers\ProfilHabilitationController@delete_all');
    Route::get('corbeilleAllprofilhabilitation', 'App\Http\Controllers\ProfilHabilitationController@corbeille_all')->name('corbeilleAllprofilhabilitation');
    Route::get('recupAllprofilhabilitation', 'App\Http\Controllers\ProfilHabilitationController@recup_all')->name('recupAllprofilhabilitation');
    //fonction de ProfilHabilitation
    Route::post('ajouterProfilHabilitation', 'App\Http\Controllers\ProfilHabilitationController@store')->name('ajouterProfilHabilitation');
    Route::post('modifierProfilHabilitation', 'App\Http\Controllers\ProfilHabilitationController@update')->name('modifierProfilHabilitation');
    Route::post('supprimerProfilHabilitation', 'App\Http\Controllers\ProfilHabilitationController@destroy')->name('supprimerProfilHabilitation');
    Route::post('corbeilleProfilHabilitation', 'App\Http\Controllers\ProfilHabilitationController@corbeille')->name('corbeilleProfilHabilitation');
    Route::post('recupProfilHabilitation', 'App\Http\Controllers\ProfilHabilitationController@recup_corbeille')->name('recupProfilHabilitation');


    //barre de recherche
    Route::get('/searchProfilHabilitation' ,'App\Http\Controllers\ProfilHabilitationController@search');
    Route::get('/searchProfilHabilitationCorbeille' ,'App\Http\Controllers\ProfilHabilitationController@searchCorbeille');
    //profilHabilitation fin
    //






    //routes et fonctions des livreurs
    Route::get('livraisonLivreur', 'App\Http\Controllers\LivraisonController@indexLivreur');
    Route::get('profilLivreur', 'App\Http\Controllers\UserController@indexLivreur');
    Route::get('modeUtLivreur', 'App\Http\Controllers\UserController@indexLivreurGuide');
    Route::get('aideUtLivreur', 'App\Http\Controllers\UserController@indexLivreurAide');




    //route de Produit
    Route::get('produit', 'App\Http\Controllers\ProduitController@index');
    //tout supprimer
    Route::get('deleteAllproduit', 'App\Http\Controllers\ProduitController@delete_all');
    //tout mettre en corbeillelivraison
    Route::get('corbeilleAllproduit', 'App\Http\Controllers\ProduitController@corbeille_all')->name('corbeilleAllproduit');
    Route::get('recupAllproduit', 'App\Http\Controllers\ProduitController@recup_all')->name('recupAllproduit');
    //route corbeille
    Route::get('produitCorbeille', 'App\Http\Controllers\ProduitController@indexCorbeille');
    //fonction de livraison
    Route::post('ajouterProduit', 'App\Http\Controllers\ProduitController@store')->name('ajouterProduit');
    Route::post('modifierProduit', 'App\Http\Controllers\ProduitController@update')->name('modifierProduit');
    Route::post('supprimerProduit', 'App\Http\Controllers\ProduitController@destroy')->name('supprimerProduit');
    Route::post('corbeilleProduit', 'App\Http\Controllers\ProduitController@corbeille')->name('corbeilleProduit');
    Route::post('RecupProduit', 'App\Http\Controllers\ProduitController@recup_corbeille')->name('RecupProduit');
    //
    Route::get('/searchLeProduit' ,'App\Http\Controllers\ProduitController@search');
    Route::get('/searchProduitCorbeille' ,'App\Http\Controllers\ProduitController@searchCorbeille');
    Route::get('produitspdf', 'App\Http\Controllers\ProduitController@allproduits')->name('produitspdf');


    // coté livreur
    // Route::get('/searchLivraison' ,'App\Http\Controllers\LivraisonController@searchLiv');



});
//controller fait pour la gestion et redirection des users
Route::get('redirects', 'App\Http\Controllers\HomeController@index');









