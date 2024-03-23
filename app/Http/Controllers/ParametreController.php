<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreParametreRequest;
use App\Http\Requests\UpdateParametreRequest;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.parametrages.parametre')->with($data);
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
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        try{
            Parametre::create([
                'code'=>$code,
                'libelle' => $libelle,
                'description' => $description,
                'type_parametre_id'=>$type_parametre_id
            ]);
            toast('Parametre ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Parametre $parametre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parametre $parametre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description,
                'type_parametre_id'=>$type_parametre_id
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e){
            toast('modification impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>1
            ]);
            toast('Paramétre supprimé avec success','danger');

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
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->delete();
            toast('Paramétre supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }


    public function indexCorbeille()
    {
        //
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();

        $data['parametres']= Parametre::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.parametrages.corbeilleparametre')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $parametre = Parametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>0
            ]);
            toast('Parametre restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('paramétres restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
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
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('code', 'LIKE', '%'.$search_text.'%')->orWhere('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.parametrages.searchP',)->with($data);

    }
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['parametres']= Parametre::where('supprimer','=',1)->where('code', 'LIKE', '%'.$search_text.'%')->orWhere('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.parametrages.searchPcCorbeille',)->with($data);

    }
}
