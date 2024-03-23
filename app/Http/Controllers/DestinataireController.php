<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Destinataire;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDestinataireRequest;
use App\Http\Requests\UpdateDestinataireRequest;

class DestinataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['DestinataireTotal']= Destinataire::where('supprimer','=',0)->orderBy('nom')->count();
        $data['DestinataireTotalC']= Destinataire::where('supprimer','=',1)->orderBy('nom')->count();

        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->paginate(10);
        //$data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('MaDashBord.destinataires.destinataire')->with($data);
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
        $nom = $request->nom;
        $prenom = $request->prenom;
        $contact = $request->contact;
        try{
            Destinataire::create([
                'nom'=>$nom,
                'prenom' => $prenom,
                'contact' => $contact,
            ]);
            toast('Destinataire ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout impossible','danger');


        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinataire $destinataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinataire $destinataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
         $nom = $request->nom;
        $prenom = $request->prenom;
        $contact = $request->contact;
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Update([
                'nom'=>$nom,
                'prenom' => $prenom,
                'contact' => $contact,
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e){
            toast('modification impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Update([
                'supprimer'=>1,

            ]);
        }
        catch(Exception $e){
            toast('Supression impossible','Error Message');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Delete();
            toast('Destinataire supprimé avec success','Error Message');

        }
        catch(Exception $e){
            toast('Supression impossible','Error Message');
        }
        return back();

    }
    public function indexCorbeille()
    {
        //
        $data['DestinataireTotal']= Destinataire::where('supprimer','=',0)->orderBy('nom')->count();
        $data['DestinataireTotalC']= Destinataire::where('supprimer','=',1)->orderBy('nom')->count();
        $data['destinataires']= Destinataire::where('supprimer','=',1)->orderBy('nom')->paginate(8);
        return view('MaDashBord.destinataires.corbeilledestinataire')->with($data);


    }
    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $destinataire = Destinataire::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Supression éffectué avec success','danger');


        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $destinataire = Destinataire::findOrFail($request->id);
        try{
            $destinataire->update([
                'supprimer' =>0
            ]);
            toast('Destinataire restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');

        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $destinataire = Destinataire::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Destinataires restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $destinataire = Destinataire::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
                $value->delete();
            }
            toast('Supression éffectué avec success','danger');

        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }

    //barre de recherche

    public function searchNom(Request $request){
         $search_text =$_GET['cherche'];
         $data['DestinataireTotal']= Destinataire::where('supprimer','=',0)->orderBy('nom')->count();
         $data['DestinataireTotalC']= Destinataire::where('supprimer','=',1)->orderBy('nom')->count();
         $data['destinataires']=Destinataire::where('supprimer','=',0)->where('nom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('contact', 'LIKE', '%'.$search_text.'%')->paginate(10);
         return view('MaDashBord.destinataires.search',)->with($data);

     }
     public function searchCorbleille(Request $request){
        $search_text =$_GET['cherche'];
        $data['DestinataireTotal']= Destinataire::where('supprimer','=',0)->orderBy('nom')->count();
        $data['DestinataireTotalC']= Destinataire::where('supprimer','=',1)->orderBy('nom')->count();
        $data['destinataires']=Destinataire::where('supprimer','=',1)->where('nom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('contact', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.destinataires.searchCorbeille',)->with($data);

    }
    public  function alldestinataires() {


        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->get();


        //echo $data;

        $pdf = PDF::loadView('MaDashBord.destinataires.alldestinataire',$data);
        return $pdf->download('destinataire.pdf');
    }

}
