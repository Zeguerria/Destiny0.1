@php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp
@extends('MaDashBord.menudashbord')
@section('titre')
    Profil
@endsection
@section('corps')
<style>
    .im{
        background-image: url("../../../../public/mesImages/m.png");


    }
    .section-title {
    text-align: center;
    padding: 30px 0;
    /* position: relative; */
    position: relative;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    }
    .section-title h4 {
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 0;
    color: #070707;
    position: relative;
    z-index: 2;
    }
    .section-title span{
        position: absolute;
            top: 30px;
            color: var(--liv-titre);
            left: 0;
            right: 0;
            z-index: 1;
            font-weight: 600;
            font-size: 52px;
            text-transform: uppercase;
            line-height: 0;
    }
    :root {
    --color-t:  #02010ec3;
    --body-color: rgb(245, 250, 250);
    --nav-color: #071885;
    --side-nav: #010718;
    --text-color: #fff;
    --text-color2: #02010ec3;
    --titre-couleur: #010005c3;
    --pour-couleur: hsl(24, 71%, 99%);
    --pour-couleur2: hsl(24, 71%, 99%);
    --liv-titre : #f3f5f5;
    /*  */
    --c-color2:#ffffff;
    --c-colorl7:#8cabd9;
    /*  deja utilisé debut*/
    --h4-colorl1:hsl(210, 21%, 87%);
    --mesicons-colorl5:hsl(210, 21%, 87%);
    --mesiconst-colorl5:hsl(209, 15%, 48%);
    --bd-colorl2:hsl(210, 100%, 99%);
    --body-colorl3:hsl(206, 41%, 97%);
    /* deja utilisé fin  */
    --card-colorl4:hsl(24, 71%, 99%);
    /*  */
    }
    .dark {
    /*  */
    --c-color2:#031b1b;
    --c-colorl7:#1a1a1a;
        /* deja utilisé debut */
        --color-t:  #7b72e2c3;
    --h4-colorl1:hsl(232, 96%, 49%);
    --mesicons-colorl5: rgb(21, 0, 255);
    --mesiconst-colorl5: rgb(21, 0, 255);
    --body-colorl3:#013D48;
    --body-color: #071885;
    --text-colorl6:rgb(21, 0, 255);
    --titre-couleur: rgb(0, 191, 255);
    --pour-couleur: rgb(0, 191, 255);
    --pour-couleur2: rgb(21, 88, 110);

        /*deja utilisé fin  */
    --bd-colorl2:hsl(240, 5%, 96%);
    --card-colorl4: rgb(0, 191, 255);
    --liv-titre : rgb(21, 0, 255);
    /*  */


    --nav-color: #18191a;
    --side-nav: #242526;
    --text-color: #ccc;
    --text-color2: red;
    }
    .titre{
    color: var(--side-nav);
    font-family: italic;
    font-weight: 600;

    }
    .lebody{
        padding:0;
        margin:0;
        background-color: var(--c-color2);
        height: 100%;
    }
    h4{
    padding-top: 8px;
    color: var(--h4-colorl1);
    font-size:25px;
    font-weight:bold;
    font-family: system-ui;
    }
    .msiconst{
    color: var(--mesiconst-colorl5);
    }
    .msicons{
    color: var(--mesicons-colorl5);
    }
    .masection{
    padding: 0px;
    margin: 0px;
    background-color:  var(--body-colorl3);
    }
    .cardt{
    background-color:  var(--pour-couleur2);
    }
    th{
    color:var(--text-colorl6);
    }
    table tr, td, th{
    border: 0.8px solid var(--titre-couleur) !important;
    }
    td{
    font-size: 18px;
    color: var(--color-t);
    font-family : 'Times New Roman', Times, serif;
    }
    .form {
        --input-bg: #ffffff8a;
        /*  background of input */
        --padding: 1.5em;
        --rotate: 80deg;
        /*  rotation degree of input*/
        --gap: 2em;
        /*  gap of items in input */
        --icon-change-color: #15A986;
        /*  when rotating changed icon color */
        --height: 40px;
        /*  height */
        width: 300px;
        padding-inline-end: 1em;
        /*  change this for padding in the end of input */
        background: var(--input-bg);
        position: relative;
        border-radius: 4px;
        }

        .form label {
        display: flex;
        align-items: center;
        width: 100%;
        height: var(--height);
        }

        .form input {
        width: 100%;
        padding-inline-start: calc(var(--padding) + var(--gap));
        outline: none;
        background: none;
        border: 0;
        }
        /* style for both icons -- search,close */
        .form svg {
        /* display: block; */
        color: #111;
        transition: 0.3s cubic-bezier(.4,0,.2,1);
        position: absolute;
        height: 1px;
        }
        /* search icon */
        .icon {
        position: absolute;
        left: var(--padding);
        transition: 0.3s cubic-bezier(.4,0,.2,1);
        display: flex;
        justify-content: center;
        align-items: center;
        }
        /* arrow-icon*/
        .swap-off {
        transform: rotate(-80deg);
        opacity: 0;
        visibility: hidden;
        }
        /* close button */
        .close-btn {
        /* removing default bg of button */
        background: none;
        border: none;
        right: calc(var(--padding) - var(--gap));
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #111;
        padding: 0.1em;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        transition: 0.3s;
        opacity: 0;
        transform: scale(0);
        visibility: hidden;
        }

        .form input:focus ~ .icon {
        transform: rotate(var(--rotate)) scale(1.3);
        }

        .form input:focus ~ .icon .swap-off {
        opacity: 1;
        transform: rotate(-80deg);
        visibility: visible;
        color: var(--icon-change-color);
        }

        .form input:focus ~ .icon .swap-on {
        opacity: 0;
        visibility: visible;
        }

        .form input:valid ~ .icon {
        transform: scale(1.3) rotate(var(--rotate))
        }

        .form input:valid ~ .icon .swap-off {
        opacity: 1;
        visibility: visible;
        color: var(--icon-change-color);
        }

        .form input:valid ~ .icon .swap-on {
        opacity: 0;
        visibility: visible;
        }

        .form input:valid ~ .close-btn {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
        transition: 0s;
        }
</style>

  <!--corps du modal fin -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper lebody masection pb-5">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header pb-5">
        <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="title">
                <h4 class="mb-0 bread"><i class="fas fa-users msicons"></i>&ensp;Profil</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Profils</li>
                    <li class="breadcrumb-item active" aria-current="page" >Profil</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @if(in_array("12", $droits))
        <section class="content">
        <div class="container-fluid">







            <section class="content">
                {{-- NOTIFICATION DEBUT --}}
                {{-- <div class="d-flex nav justify-content-end pb-1">
                    @if(Session()->has('success'))
                        <div class="alert alert-success text-center col-md-2 pb-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                            {{session()->get('success')}}
                        </div>
                    @elseif(Session()->has('modifier'))
                        <div class="alert alert-warning col-md-2 pb-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                            {{session()->get('modifier')}}
                        </div>
                    @elseif(Session()->has('supprimer'))
                        <div class="alert alert-danger col-md-2 pb-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                            {{session()->get('supprimer')}}
                        @elseif(Session()->has('restorer'))
                            <div class="alert alert-primary col-md-3 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('restorer')}}
                            </div>
                        @elseif(Session()->has('recuperertous'))
                            <div class="alert alert-primary col-md-2 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('recuperertous')}}
                            </div>
                        @elseif(Session()->has('supprimertous'))
                            <div class="alert alert-danger col-md-2 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('supprimertous')}}
                            </div>
                    @endif
                </div> --}}
            {{-- NOTIFICATION DEBUT --}}
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card cardt card-primary card-outline">
                        <div class="card-body   box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{asset(Auth::user()->le_profil)}}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center weight-600 font-30"  style="color: var(--titre-couleur);">{{Auth::user()->name}}&ensp;{{Auth::user()->prenom}}</h3>

                        <p class="text-muted text-center" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">{{Auth::user()->pseudo}}</p>

                        <ul class="list-group list-group-unbordered mb-3 ">
                            <li class="list-group-item cardt">
                            <b>Profil :</b> <a class="float-right ">{{Auth::user()->profil->libelle}}</a>
                            </li>
                            <li class="list-group-item cardt">
                                <b>Droit :</b> <a class="float-right">{{Auth::user()->role->libelle}}</a>
                            </li>
                            <li class="list-group-item cardt">
                            <b>Adresse :</b> <a class="float-right">{{Auth::user()->email}}</a>
                            </li>
                            <li class="list-group-item cardt">
                                <div class="d-flex justify-content-center">
                                    @foreach($users as $key => $user)
                                        @if(in_array("20.1", $droits))
                                            <a class=" btn btn-warning" type="button" data-toggle="modal" data-target="#modifier{{$user->id}}"><i class="fa fa-edit msicons">&ensp;Modifier</i></a>
                                        @endif
                                        <div class="modal fade " id="modifier{{$user->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title"><span><i class="fas fa-user-edit msicons"></i></span>&ensp;Modifier  Mon Profil</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body" style="background: var(--c-color2);">
                                                    <form method="post" action="{{route('modifierUser')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$user->id}}">
                                                            <!--corp du formulaire debut-->
                                                            <div>
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-edit"></i>&ensp;Nom </label>
                                                                                    <input type="text" class="form-control" value="{{$user->name}}"  id="" name="name" placeholder="Entrer le nom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">

                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-edit"></i>&ensp;Prenom </label>
                                                                                    <input type="text" class="form-control" id="" value="{{$user->prenom}}"  name="prenom" placeholder="Entrer le Prenom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-ninja"></i>&ensp;Pseudo</label>
                                                                                    <input type="text" class="form-control" id="" value="{{$user->pseudo}}"  name="pseudo" placeholder="Entrer la marque">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-paper-plane"></i>&ensp;Email</label>
                                                                                    <input type="email" class="form-control" id="" value="{{$user->email}}"  name="email" placeholder="Entrer l'email">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col m-2" style="background-image: url({{asset($user->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                            {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <div class="container-fluid">

                                                                    <div class="row">
                                                                        @if(in_array("20.2", $droits))
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fa fa-audio-description" aria-hidden="true"></i>&ensp;Role</label>
                                                                                    <select class="form-control" id="" name="role_id">
                                                                                        @foreach ($role as $key => $rol)
                                                                                        <option value="{{$rol->id}}" {{($rol->id==$user->role_id)?"selected":""}}>{{$rol->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        @if(in_array("20.3", $droits))
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fa fa-universal-access" aria-hidden="true"></i>&ensp;Droit d'acces</label>
                                                                                    <select class="form-control" id="" name="profil_id">
                                                                                        @foreach ($profil as $key => $val)
                                                                                        <option value="{{$val->id}}" {{($val->id==$user->profil_id)?"selected":""}}>{{$val->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-shield"></i>&ensp;Password</label>
                                                                                <input type="password" class="form-control" id=""  name="password" placeholder="Entrer le password">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-camera-retro"></i>&ensp;Photo</label>
                                                                                <input type="file" class="form-control" id="" name="photo" placeholder="Entrer la photo">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                <button type="submit" class="btn btn-primary"><i class="far fa-thumbs-up msicons"></i>&ensp;Modifier et Fermer</button>
                                                            </div>
                                                    </form>





                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </li>
                            {{-- <li class="list-group-item">
                            <b>Friends</b> <a class="float-right">13,287</a>
                            </li> --}}
                        </ul>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center col-md-6">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="nav-icon fas fa-power-off msicons">&ensp;<b>Se deconnecter</b></i>
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>







                    </div>



                    <div class="col-md-9">
                        <div class="card cardt">

                        <div class="card-body">
                            <div class="tab-content">



                            <div class="tab-pane active" id="timeline" style="height: 51vh">
                                <div class="im d-flex justify-content-center">
                                    <img src="{{asset('mesImages/m.png')}}"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>

                            </div>



                            </div>

                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>


        </div>
        </section>
    @endif
    <!-- /.content -->


  </div>

 @endsection
