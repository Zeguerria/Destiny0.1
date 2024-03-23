<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        return view('MaDashBord.gestions.profil')->with($data);
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
            Profil::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Profil ajouteé avec success','success');

        }
        catch(Exception $e) {
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $profil = Profil::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $profil->update([
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
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $profil = Profil::findOrFail($request->id);

        try {
           $profil->update([
                'supprimer'=>1

            ]);
            toast('Profil supprimé avec success','danger');

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
        $profil = Profil::findOrFail($request->id);
        try {
            $profil->delete();
            toast('Profil supprimé avec success','danger');

         }
         catch(Exception $e) {
            toast('Supression impossible','danger');
         }
         return back();
    }
    public function indexCorbeille()
    {
        //
        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data['profils']= Profil::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.gestions.corbeilleprofil')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $profil = Profil::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($profil as $value){
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
        $profil = Profil::findOrFail($request->id);
        try{
            $profil->update([
                'supprimer' =>0
            ]);
            toast('Profil restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $profil = Profil::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($profil as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Profils restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $profil = Profil::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($profil as $value){
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
        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data['profils']=Profil::where('supprimer','=',0)->where('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('code', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchP')->with($data);

    }
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data['profils']=Profil::where('supprimer','=',1)->where('libelle', 'LIKE', '%'.$search_text.'%')->orWhere('code', 'LIKE', '%'.$search_text.'%')->orWhere('description', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchPCorbeille')->with($data);

    }



}
