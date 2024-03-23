<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Livreur;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreVehiculeRequest;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Requests\UpdateVehiculeRequest;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $data['VehiculeTotal']= Vehicule::where('supprimer','=',0)->orderBy('domicile')->count();
            $data['VehiculeTotalC']= Vehicule::where('supprimer','=',1)->orderBy('domicile')->count();

            $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
            //$data['niveau'] =TypeParametre::where('supprimer','=',0)->where('code','=','NIVEAUX')->orderBy('code')->first();
            $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();
            $data['vehicules']= Vehicule::where('supprimer','=',0)->orderBy('typeVehicule')->paginate(10);
            return view('MaDashBord.vehicules.vehicule')->with($data);
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
        $modelVehicule = $request->modelVehicule;
        $marqueVehicule = $request->marqueVehicule;
        $typeVehicule = $request->typeVehicule;
        $numeroMatricule = $request->numeroMatricule;
        $livreur_id=$request->livreur_id;
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/images/photos_vehicule', $request->file('photo'));
        }else{
            $photo = "storage/images/photos_vehicule/profil.peg";
        }
        try{
            Vehicule::create([
                'modelVehicule'=>$modelVehicule,
                'marqueVehicule' => $marqueVehicule,
                'typeVehicule' => $typeVehicule,
                'numeroMatricule' => $numeroMatricule,
                'photo' => $photo,
                'livreur_id'=>$livreur_id,
            ]);
            toast('Véhicule ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout impossible','danger');

        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicule $vehicule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $vehicule= Vehicule::findOrFail($request->id)::findOrFail($request->id);

        $modelVehicule= isset($request->modelVehicule)?$request->modelVehicule:$vehicule->modelVehicule;
        $marqueVehicule= isset($request->namarqueVehiculeme)?$request->marqueVehicule:$vehicule->marqueVehicule;
        $typeVehicule= isset($request->typeVehicule)?$request->typeVehicule:$vehicule->typeVehicule;
        $numeroMatricule= isset($request->numeroMatricule)?$request->numeroMatricule:$vehicule->numeroMatricule;
        $livreur_id= isset($request->livreur_id)?$request->livreur_id:$vehicule->livreur_id;


        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/images/photos_vehicule', $request->file('photo'));
        }else{
            $photo = "storage/images/photos_vehicule/profil.peg";
            $photo = $vehicule->photo;
        }

        try{
            $vehicule->Update([
                'modelVehicule'=>$modelVehicule,
                'marqueVehicule' => $marqueVehicule,
                'typeVehicule' => $typeVehicule,
                'numeroMatricule' => $numeroMatricule,
                'photo' => $photo,
                'livreur_id'=>$livreur_id
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e){
            toast('modification impossible','danger');

        }
        return back();
    }

    public function corbeille(Request $request){
        // echo  111;
        $vehicule= Vehicule::findOrFail($request->id);

        try{
            $vehicule->Update([
                'supprimer'=>1
            ]);
            toast('Véhicule supprimé avec success','danger');

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
        $vehicule= Vehicule::findOrFail($request->id);
        try{
            $vehicule->Delete();
            toast('Véhicule supprimé avec success','danger');

        }

        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
    public function indexCorbeille()
    {
        //
        $data['VehiculeTotal']= Vehicule::where('supprimer','=',0)->orderBy('domicile')->count();
            $data['VehiculeTotalC']= Vehicule::where('supprimer','=',1)->orderBy('domicile')->count();
            $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();

        $data['vehicules']= Vehicule::where('supprimer','=',1)->orderBy('typeVehicule')->paginate(8);
        return view('MaDashBord.vehicules.vehiculecorbeille')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $vehicule = Vehicule::where('supprimer', 0)->orderBy('typeVehicule')->get();
        try{
            foreach($vehicule as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Véhicules restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $vehicule = Vehicule::findOrFail($request->id);
        try{
            $vehicule->update([
                'supprimer' =>0
            ]);
            toast('Véhicule restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $vehicule = Vehicule::where('supprimer', 1)->orderBy('typeVehicule')->get();
        try{
            foreach($vehicule as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Véhicules restaurés avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $vehicule = Vehicule::where('supprimer', 1)->orderBy('typeVehicule')->get();
        try{
            foreach($vehicule as $value){
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
        $data['VehiculeTotal']= Vehicule::where('supprimer','=',0)->orderBy('domicile')->count();
            $data['VehiculeTotalC']= Vehicule::where('supprimer','=',1)->orderBy('domicile')->count();
        $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();

        $data['vehicules']= Vehicule::where('supprimer','=',0)->where('marqueVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('typeVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('numeroMatricule', 'LIKE', '%'.$search_text.'%')->orWhere('modelVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('livreur_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
        $data['users']=User::where('supprimer','=',)->get();
        return view('MaDashBord.vehicules.search',)->with($data);

    }
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['VehiculeTotal']= Vehicule::where('supprimer','=',0)->orderBy('domicile')->count();
            $data['VehiculeTotalC']= Vehicule::where('supprimer','=',1)->orderBy('domicile')->count();
        $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();

        $data['vehicules']= Vehicule::where('supprimer','=',1)->where('marqueVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('typeVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('numeroMatricule', 'LIKE', '%'.$search_text.'%')->orWhere('modelVehicule', 'LIKE', '%'.$search_text.'%')->orWhere('livreur_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
        $data['users']=User::where('supprimer','=',0)->get();
        return view('MaDashBord.vehicules.searchCorbeille',)->with($data);

    }
    public  function allvehicules() {


        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();
            $data['vehicules']= Vehicule::where('supprimer','=',0)->orderBy('typeVehicule')->get();

        //echo $data;

        $pdf = PDF::loadView('MaDashBord.vehicules.allvehicule',$data);
        return $pdf->download('vehicule.pdf');
    }
}
