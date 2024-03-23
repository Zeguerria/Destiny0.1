<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Produit;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();

        //
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
        $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();
        $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->paginate(10);
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.produits.produit')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
        $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();
        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['produits']= Produit::where('supprimer','=',1)->orderBy('nom')->paginate(10);
        return view('MaDashBord.produits.produitcorbeille')->with($data);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/images/produits', $request->file('photo'));
        }else{
            $photo = "storage/images/produits/profil.jpg";
        }
        $nom = $request->nom;
        $poids = $request->poids;
        $taille = $request->taille;
        $qualite_id = $request->qualite_id;
        $marque_id = $request->marque_id;
        $typeP_id = $request->typeP_id;
        try{
            Produit::create([
                'nom'=>$nom,
                'poids' => $poids,
                'taille' => $taille,
                'qualite_id'=>$qualite_id,
                'marque_id'=>$marque_id,
                'typeP_id'=>$typeP_id,
                'photo'=>$photo,
            ]);
            toast('Produit ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        if(isset($request->photo) and !empty($request->photo)){
            $photo = Storage::putFile('public/images/produits', $request->file('photo'));
        }else{
            $photo = $produit->photo;
        }
        $nom= isset($request->nom)?$request->nom:$produit->nom;
        $poids= isset($request->poids)?$request->poids:$produit->poids;
        $taille= isset($request->taille)?$request->taille:$produit->taille;
        $qualite_id= isset($request->qualite_id)?$request->qualite_id:$produit->qualite_id;
        $marque_id= isset($request->marque_id)?$request->marque_id:$produit->marque_id;
        $typeP_id= isset($request->typeP_id)?$request->typeP_id:$produit->typeP_id;

        try{
            $produit->update([
                'nom'=>$nom,
                'poids' => $poids,
                'taille' => $taille,
                'qualite_id' => $qualite_id,
                'marque_id' => $marque_id,
                'photo'=>$photo,
                // 'role'=>$role,
                'typeP_id'=>$typeP_id,
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e){
            toast('modification impossible','danger');

        }
        return back();

    }
    public function corbeille(Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer'=>1,
            ]);
            toast('Produit supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->delete();
            toast('Produit supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }

    public function corbeille_all(Request $request){
        $produit = Produit::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Supression impossible','danger');
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    public function recup_corbeille(Request $request){
        $produit = Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer' =>0
            ]);
            toast('produit restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    public function recup_all(Request $request){
        $produit = Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Produits restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
     //supprimer tous les elements de la corbeille
     public function delete_all(Request $request){
        $produit = Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->delete();
            }
            toast('Supression éffectué avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
    public function search(Request $request){
        $search_text =$_GET['cherche'];
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
        $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();

        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();
        $data['produits']= Produit::where('supprimer','=',0)->where('nom', 'LIKE', '%'.$search_text.'%')->orWhere('poids', 'LIKE', '%'.$search_text.'%')->orWhere('taille', 'LIKE', '%'.$search_text.'%')->orderBy('nom')->paginate(10);

        return view('MaDashBord.produits.search',)->with($data);

    }
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
        $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();
        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();
        $data['produits']= Produit::where('supprimer','=',1)->where('nom', 'LIKE', '%'.$search_text.'%')->orWhere('poids', 'LIKE', '%'.$search_text.'%')->orWhere('taille', 'LIKE', '%'.$search_text.'%')->orderBy('nom')->paginate(10);
        return view('MaDashBord.produits.searchCorbeille',)->with($data);

    }
    public  function allproduits() {


        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();

        //echo $data;

        $pdf = PDF::loadView('MaDashBord.produits.allproduit',$data);
        return $pdf->download('vehicule.pdf');
    }
}
