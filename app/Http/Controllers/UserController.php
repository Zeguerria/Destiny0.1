<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Profil;

use App\Models\Parametre;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\TypeParametre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
Use Alert;

class UserController extends Controller
{
    //

    public function index()
    {
        // toast('Modifiaction éffectuée avec success','warning');
        $data['UserTotal']= User::where('supprimer','=',0)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->orderBy('name')->count();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->paginate(10);
        return view('MaDashBord.users.user')->with($data);


    }
    public function indexCorbeille()
    {
        //
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        $data['UserTotal']= User::where('supprimer','=',0)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->orderBy('name')->count();
        $data['users']= User::where('supprimer','=',1)->orderBy('name')->paginate(10);
        return view('MaDashBord.users.corbeilleuser')->with($data);


    }
    public function store(Request $request)
    {
        //
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/images/users', $request->file('photo'));
        }else{
            $photo = "storage/images/users/profil.jpg";
        }
        $name = $request->name;
        $prenom = $request->prenom;
        $pseudo = $request->pseudo;
        $role=$request->role;
        $email=$request->email;
        $profil_id=$request->profil_id;
        $role_id=$request->role_id;
        $password=$request->password;


        try{
            User::create([
                'name'=>$name,
                'profil_id' => 1,
                'role_id' => $role_id,
                'prenom' => $prenom,
                'pseudo' => $pseudo,
                'photo'=>$photo,
                'role'=>$role,
                'email'=>$email,
                'password' => Hash::make($request['password']),
            ]);
            toast('Utilisateur ajouteé avec success','success');

        }
        catch(Exception $e){
            // die($e->getMessage());
            toast('ajout impossible','danger');
        }
        return back();
    }
    public function update(Request $request)
    {

        //
        $user = User::findOrFail($request->id);
        if(isset($request->photo) and !empty($request->photo)){
            $photo = Storage::putFile('public/images/users', $request->file('photo'));
        }else{
            $photo = $user->photo;
        }
        $name= isset($request->name)?$request->name:$user->name;
        $profil_id= isset($request->profil_id)?$request->profil_id:$user->profil_id;
        $role_id= isset($request->role_id)?$request->role_id:$user->role_id;
        $prenom= isset($request->prenom)?$request->prenom:$user->prenom;
        $pseudo= isset($request->pseudo)?$request->pseudo:$user->pseudo;
        //$role= isset($request->role)?$request->role:$user->role;
        $email= isset($request->email)?$request->email:$user->email;

        if(!isset($request->password)){
            $password = $user->password;
        }
        else{
            $password = Hash::make($request->password);
        }

        try{
            $user->update([
                'name'=>$name,
                'prenom' => $prenom,
                'profil_id' => $profil_id,
                'role_id' => $role_id,
                'pseudo' => $pseudo,
                'photo'=>$photo,
                // 'role'=>$role,
                'email'=>$email,
                'password' => $password,

            ]);
            toast('Modifiaction éffectuée avec success','warning');
        }
        catch(Exception $e){
            toast('modification impossible','danger');
        }
        return back();
    }
    public function corbeille(Request $request)
    {
        //
        $user = User::findOrFail($request->id);
        try{
            $user->update([
                'supprimer' =>1
            ]);
            toast('Utilisateur supprimé avec success','danger');
        }
        catch(Exception $e){
            toast('suppression impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $user = User::findOrFail($request->id);
        try{
            $user->delete();
            toast('Utilisateur supprimé avec success','Error Message');
        }
        catch(Exception $e){
            toast('suppression impossible','Error Message');

        }
        return back();
    }
    //mettre tous les cours en corbeille
    public function corbeille_all(){
        $users = User::where('supprimer', 0)->orderBy('name')->get();
        try{
            foreach($users as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Utilisateurs supprimés avec success','danger');
        }
        catch(Exception $e){
            toast('suppression impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $users = User::findOrFail($request->id);
        try{
            $users->update([
                'supprimer' =>0
            ]);
            toast('Utilisateur restauré avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $user = User::where('supprimer', 1)->orderBy('name')->get();
        try{
            foreach($user as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Utilisateurs restaurés avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $users = User::where('supprimer', 1)->get();
        try{
            foreach($users as $value){
                $value->delete();
            }
            toast('Supression éffectué avec success','danger');
        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }




    public function indexAdmin()
    {
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        return view('MaDashBord.profils.profil')->with($data);


    }
    //profil livreur

    public function indexLivreur()
    {
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        return view('livreursDashBord.profils.profil')->with($data);


    }
    public function indexLivreurGuide()
    {

        return view('livreursDashBord.modeutilisation');


    }
    public function indexLivreurAide()
    {

        return view('livreursDashBord.aide');


    }


    //recherche
    public function search(Request $request){
        $search_text =$_GET['cherche'];

        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['UserTotal']= User::where('supprimer','=',0)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->orderBy('name')->count();
        $data['users']=User::where('name', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('pseudo', 'LIKE', '%'.$search_text.'%')->orWhere('email', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.users.search',)->with($data);

    }
    //barre de recherche pour la corbeille
    public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['UserTotal']= User::where('supprimer','=',0)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->orderBy('name')->count();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();

        $data['users']=User::where('supprimer','=',1)->where('name', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('pseudo', 'LIKE', '%'.$search_text.'%')->orWhere('email', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.users.searchCorbeille',)->with($data);

    }
    // public function allusers(){

    //     $data['users'] = User::where('supprimer','=',0)->orderBy('prenom')->get();;
    //     $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();



    //     $pdf = PDF::loadView('MaDashBord.users.alluser',$data);
    //     return $pdf->download('utilisateur.pdf');

    // }
    public  function allusers() {


        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        $data['users'] = User::where('supprimer','=',0)->get();
        //echo $data;

        $pdf = PDF::loadView('MaDashBord.users.alluser',$data);
        return $pdf->download('utilisateur.pdf');
    }


}
