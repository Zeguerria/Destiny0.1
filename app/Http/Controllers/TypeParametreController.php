<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreTypeParametreRequest;
use App\Http\Requests\UpdateTypeParametreRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class TypeParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //afficher le tableau
        // $data ['TYPEPARAMETRE'] = TypeParametre::All();
        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data ['typeparametres'] = TypeParametre::where('supprimer','=',0)->orderBy('code')->paginate(10);
       // $data ['TYPEPARAMETRE'] = TypeParametre::where('code')->orderBy('code')->get();
        return view('MaDashBord.parametrages.typeparametre')->with($data);
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
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
            TypeParametre::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('typede Paramétre ajouteé avec success','success');

        }
        catch(Exception $e) {
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeParametre $typeParametre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeParametre $typeParametre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $typeParametre = TypeParametre::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $typeParametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e) {
            toast('modification impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request)
    {
        //aller faire la modification de l'element
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->update([
                'supprimer'=>1

            ]);
            toast('Type de Parametre supprimé avec success','danger');
                }
        catch(Exception $e) {
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
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->delete();
           toast('Type de paramétre supprimé avec success','danger');

        }
        catch(Exception $e) {
            toast('Supression impossible','danger');
        }
        return back();
    }


    public function indexCorbeille()
    {
        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data ['typeparametres'] = TypeParametre::where('supprimer','=',1)->orderBy('code')->paginate(9);
        //
        // $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        // $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        // $data['typeParametres']= Typeparametre::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.parametrages.corbeilletypeParametre')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Types de Paramétres supprimés avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $typeParametre = TypeParametre::findOrFail($request->id);
        try{
            $typeParametre->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->update([
                    'supprimer' =>0
                ]);
                toast('Types de Paramétres restaurés avec success','primary');
            }
            toast('Types de Parametres restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
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
        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['typeparametres']= TypeParametre::where('supprimer','=',0)->where('code', 'LIKE', '%'.$search_text.'%')->orWhere('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);

        return view('MaDashBord.parametrages.searchT',)->with($data);

    }
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['typeparametres']= TypeParametre::where('supprimer','=',1)->where('code', 'LIKE', '%'.$search_text.'%')->orWhere('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.parametrages.searchTcCorbeille',)->with($data);

    }
}
