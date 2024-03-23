<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Profil;
use App\Models\Habilitation;
use Illuminate\Http\Request;
use App\Models\ProfilHabilitation;
use App\Http\Requests\StoreProfilHabilitationRequest;
use App\Http\Requests\UpdateProfilHabilitationRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ProfilHabilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['ProfilHabilitationTotal']= ProfilHabilitation::where('supprimer','=',0)->count();
        $data['ProfilHabilitationTotalC']= ProfilHabilitation::where('supprimer','=',1)->count();
        $data['profilhabilitations']= ProfilHabilitation::where('supprimer','=',0)->paginate(10);
        $data['profils']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['habilitations']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.gestions.profilhabilitation')->with($data);
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
        $habilitation_id= $request->habilitation_id;
        $profil_id= $request->profil_id;
        try {
            ProfilHabilitation::create([
                'habilitation_id'=>$habilitation_id,
                'profil_id'=>$profil_id,

            ]);
            toast('Profil Habilitation ajouteé avec success','success');

        }
        catch(Exception $e) {
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilHabilitation $profilHabilitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilHabilitation $profilHabilitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $profil_habilitation= ProfilHabilitation::findOrFail($request->id);
        $habilitation_id= isset($request->habilitation_id)?$request->habilitation_id:$profil_habilitation->habilitation_id;
        // $habilitation_id= isset($request->habilitation_id)?$request->habilitation_id:1;
        $profil_id= isset($request->profil_id)?$request->profil_id:$profil_habilitation->profil_id;
        try {
            $profil_habilitation->update([
                'habilitation_id'=>$habilitation_id,
                'profil_id'=>$profil_id,

            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e) {
            toast('modification impossible','danger');

        }
        // echo $profil_habilitation;

        return back();
    }
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $profil_habilitation= ProfilHabilitation::findOrFail($request->id);

        try {
           $profil_habilitation->update([
                'supprimer'=>1

            ]);
            toast('Profil Habilitation supprimé avec success','danger');

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
        $profil_habilitation= ProfilHabilitation::findOrFail($request->id);
        try {
            $profil_habilitation->delete();
            toast('Profil habilitation supprimé avec success','danger');

         }
         catch(Exception $e) {
            toast('Supression impossible','danger');
         }
         return back();
    }


    public function indexCorbeille()
    {
        //
        $data['ProfilHabilitationTotal']= ProfilHabilitation::where('supprimer','=',0)->count();
        $data['ProfilHabilitationTotalC']= ProfilHabilitation::where('supprimer','=',1)->count();
        $data['profilhabilitations']= ProfilHabilitation::where('supprimer','=',1)->paginate(10);
        $data['profils']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['habilitations']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        //
        // $data['profils']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        // $data['habilitations']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        // $data['ProfilHabilitationTotal']= ProfilHabilitation::where('supprimer','=',0)->count();
        // $data['ProfilHabilitationTotalC']= ProfilHabilitation::where('supprimer','=',1)->count();
        // $data['profil_habilitations']= ProfilHabilitation::where('supprimer','=',1)->orderBy('profil_id')->paginate(8);
        return view('MaDashBord.gestions.corbeilleprofil_habilitation')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $profil_habilitation = ProfilHabilitation::where('supprimer', 0)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Profils Habilitations supprimés avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $profil_habilitation = ProfilHabilitation::findOrFail($request->id);
        try{
            $profil_habilitation->update([
                'supprimer' =>0
            ]);
            toast('Profil Habilitation restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $profil_habilitation = ProfilHabilitation::where('supprimer', 1)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->update([
                    'supprimer' =>0
                ]);
                toast('Profils Habilitations restauré avec success','primary');
            }
            toast('Profils Habilitations restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $profil_habilitation = ProfilHabilitation::where('supprimer', 1)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->delete();
            }
            toast('Supression éffectué avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }



    //probleme a regler
    public function search(Request $request){

        $search_text =$_GET['cherche'];
        $data['ProfilHabilitationTotal']= ProfilHabilitation::where('supprimer','=',0)->count();
        $data['ProfilHabilitationTotalC']= ProfilHabilitation::where('supprimer','=',1)->count();
        $data['profils']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['habilitations']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        $data['profilhabilitations']=ProfilHabilitation::where('supprimer','=',0)->where('habilitation_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchPH')->with($data);

    }
    public function searchCorbeille(Request $request){

        $search_text =$_GET['cherche'];
        $data['ProfilHabilitationTotal']= ProfilHabilitation::where('supprimer','=',0)->count();
        $data['ProfilHabilitationTotalC']= ProfilHabilitation::where('supprimer','=',1)->count();
        $data['profils']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['habilitations']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        $data['profilhabilitations']=ProfilHabilitation::where('supprimer','=',1)->where('habilitation_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchPHCorbeille')->with($data);

    }
}
