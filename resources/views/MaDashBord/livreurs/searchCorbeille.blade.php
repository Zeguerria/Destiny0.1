

@php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp
@extends('MaDashBord.menudashbord')
@section('titre')
    Corbeille
@endsection
@section('corps')
<style>
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
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <h4 class="modal-title"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Ajouter un Livreur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: var(--c-color2);">
            <form method="post" action="{{route('ajouterLivreur')}}">
                @csrf
                        <!--corp du formulaire debut-->
                        <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-house-user msicons"></i>&ensp;Domicile</label>
                                <input type="text" class="form-control" id="" name="domicile" placeholder="Entrer le Domicile">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="far fa-id-card msicons"></i>&ensp;Numero permis</label>
                                <input type="text" class="form-control" id="" name="numeroPermis" placeholder="Entrer le Numero du permis">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt msicons"></i>&ensp;Numero telephone</label>
                                <input type="phone" class="form-control" id="" name="phone" placeholder="Entrer le numero de telephone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-check msicons"></i>&ensp;Choisir l'utilisateur</label>
                                <select class="form-control" id="" name="user_id">
                                    @foreach ($users as $key => $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>
            </div>
            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
        </div>
    </div>


<div class="content-wrapper lebody masection pb-5">
  <div class="content-header pb-5">
    <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
        <div class="title">
            <h4 class="mb-0 bread"><!--<i class="fas fa-trash msicons"></i>--><img src="{{asset('mesImages/icon/bin-file.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Corbeille</h4>
        </div>
        <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" >Corbeilles</li>
                <li class="breadcrumb-item active" aria-current="page" >Livreur</li>
            </ol>
        </nav>
    </div>
  </div>
  @if(in_array("9.2", $droits))
      <section class="content">
        {{-- NOTIFICATION DEBUT --}}
            <div class="d-flex nav justify-content-end pb-1">
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
            </div>
        {{-- NOTIFICATION DEBUT --}}
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card cardt" >
                          <div class="card-header">
                              <div class="container-fluid">
                                  <div class="row">
                                      @if(in_array("9.2.1", $droits))
                                          <div class="col">
                                              {{-- <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus msicons" style="font-size: 20px; color:#7bff00;"></i></button> --}}
                                          </div>
                                      @endif
                                      @if(in_array("9.2.2", $droits))
                                          <div class="col  d-flex nav justify-content-end">
                                              <div class="form-group">
                                                  <label for=""><a href="#" class="btn " id="" data-bs-toggle="tooltip" title="total livreurs"><i class="fa fa-user-circle msicons" style="font-size: 20px;"></i><sup >{{$LivreurTotal}}</sup></a></label>
                                                  <label for=""><a href="#" class="btn " id="" data-bs-toggle="tooltip" title="total livreurs"><i class="fa fa-trash msicons" style="font-size: 20px;"></i><sup >{{$LivreurTotalC}}</sup></a></label>
                                              </div>
                                              <form class="form me-2" role="search" action="{{url('/searchLivreurCorbeille')}}">
                                                <label for="search">
                                                    <input required="" autocomplete="off" placeholder="Rechercher un livreur" name="cherche" id="search" type="text">
                                                    <div class="icon">
                                                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
                                                        </svg>
                                                        <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                                            <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round"></path>
                                                        </svg>
                                                    </div>
                                                    <button type="reset" class="close-btn">
                                                        <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </label>
                                            </form>

                                              <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#000307b4;"></i></a>
                                          </div>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="card-body ">
                              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                  <div class="row">
                                      <div class="col-sm-12 col-md-6"></div>
                                      <div class="col-sm-12 col-md-6"></div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <table id="example2" class="table table-bordered table-hover dataTable dtr-inline table-responsive-sm table-striped text-center" data-toggle="table" data-show-columns="true" aria-describedby="example2_info">
                                              <thead>
                                                  <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Domicile</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Numero Permis</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Num Telephone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Nom et Prenom Livreur</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Photo du Livreur</th>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" style="" aria-sort="ascending">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach($livreurs as $key => $value)
                                                      <tr class="odd">
                                                        <td class="dtr-control" tabindex="0">{{$key+1}}</td>
                                                            <td>{{$value->domicile}}</td>

                                                            <td>{{$value->numeroPermis}}</td>
                                                            <td style="">{{$value->phone}}</td>

                                                            <td style="">
                                                                {{$value->user->name}} {{$value->user->prenom}}
                                                            </td>
                                                            <td style="">
                                                                <center>
                                                                    <img src="{{asset($value->user->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                                </center>
                                                            </td>

                                                          <td style="" class="sorting_1">
                                                              <div class="btn-group">
                                                                  <div style="">
                                                                      @if(in_array("9.2.3", $droits))
                                                                          <div class="dropdown">
                                                                              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                                  <i class="fas fa-ellipsis-h" style="font-size: 30px; color:#000307b4;"></i>
                                                                              </a>
                                                                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                                                  <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                                                  <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Restorer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-sync" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Restorer</a>
                                                                                  <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                                              </div>

                                                                              <!--CONSULTER-->
                                                                              <div class="modal fade" id="consulter{{$value->id}}">
                                                                                <div class="modal-dialog  modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <h4 class="modal-title">Consulter le Livreur</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body" style="background: var(--c-color2);">
                                                                                    <form>
                                                                                        @csrf
                                                                                                <!--corp du formulaire debut-->
                                                                                                <div class="row">
                                                                                                <div class="col-md-6">

                                                                                                    <div class="form-group">
                                                                                                        <label for="consulter{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-house-user msicons"></i>&ensp;Domicile</label>
                                                                                                        <input type="text" class="form-control" value="{{$value->domicile}}" readonly id="consulter{{$value->id}}" name="codes" placeholder="Entrer le code">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">

                                                                                                    <div class="form-group">
                                                                                                        <label for="consulter{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="far fa-id-card msicons"></i>&ensp;Numero permis</label>
                                                                                                        <input type="text" class="form-control" value="{{$value->numeroPermis}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group">
                                                                                                        <label for="consulter{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt msicons"></i>&ensp;Numero telephone</label>
                                                                                                        <input type="text" class="form-control" value="{{$value->phone}}" readonly id="consulter{{$value->id}}" name="Description" placeholder="Entrer la description">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-check msicons"></i>&ensp;Choisir l'utilisateur</label>
                                                                                                        <select class="form-control" id="typeparametre"  disabled name="user_id">
                                                                                                            @foreach ($users as $key => $user)

                                                                                                            <option value="{{$user->id}}" {{($user->id===$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                    </div>
                                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>


                                                                                    </div>

                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                               <!--CORBEILLE-->
                                                                               <div class="modal fade" id="corbeille{{$value->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                <h4 class="modal-title">Restorer le Livreu : </h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                                                <form method="post" action="{{route('recupLivreur')}}">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                                                        <!--corp du formulaire debut-->
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-6">

                                                                                                                <div class="form-group">
                                                                                                                    <label for="consulter{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-house-user msicons"></i>&ensp;Domicile</label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->domicile}}" readonly id="" name="domicile" placeholder="Entrer le domicile">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">

                                                                                                                <div class="form-group">
                                                                                                                    <label for="consulter{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="far fa-id-card msicons"></i>&ensp;Numero permis</label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->numeroPermis}}" readonly id="" name="numeroPermis" placeholder="Entrer le libellé">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="consulter{{$value->id}}" class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt msicons"></i>&ensp;Numero telephone</label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->phone}}" readonly id="phone" name="phone" placeholder="Entrer le numero">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-check msicons"></i>&ensp;Choisir l'utilisateur</label>
                                                                                                                    <select class="form-control" id="typeparametre"  disabled name="user_id">
                                                                                                                        @foreach ($users as $key => $user)

                                                                                                                            <option value="{{$user->id}}" {{($user->id===$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                                            <button type="submit" class="btn btn-primary"><i class="fas fa-undo-alt msicons"></i>&ensp;Restorer et Fermer</button>
                                                                                                        </div>
                                                                                                </form>


                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                              <!--SUPPRIMER-->
                                                                              <div class="modal fade" id="supprimer{{$value->id}}">
                                                                                <div class="modal-dialog modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <h4 class="modal-title">Supprimer Livreur</h4>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body" style="background: var(--c-color2);">
                                                                                        <form method="post" action="{{route('supprimerLivreur')}}">
                                                                                            @csrf
                                                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                                                <!--corp du formulaire debut-->
                                                                                                <div class="row">
                                                                                                <div class="col-md-6">

                                                                                                    <div class="form-group">
                                                                                                        <label for="supprimer{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-house-user msicons"></i>&ensp;Domicile</label>
                                                                                                        <input type="text" class="form-control" readonly value="{{$value->domicile}}" id="suprimer{{$value->id}}" name="codes" placeholder="Entrer le code">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">

                                                                                                    <div class="form-group">
                                                                                                        <label for="suprimer{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="far fa-id-card msicons"></i>&ensp;Numero Permis</label>
                                                                                                        <input type="text" class="form-control" readonly value="{{$value->nueroPermis}}" id="suprimer{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group">
                                                                                                        <label for="suprimer{{$value->id}}" class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt msicons"></i>&ensp;Numero telephone</label>
                                                                                                        <input type="text" class="form-control" readonly value="{{$value->phone}}" id="suprimer{{$value->id}}" name="Description" placeholder="Entrer la description">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-check msicons" ></i>&ensp;Choisir l'utilisateur</label>
                                                                                                        <select class="form-control" id="typeparametre" disabled name="type_parametre_id">
                                                                                                            @foreach ($users as $key => $user)

                                                                                                            <option value="{{$user->id}}" {{($user->id===$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                    <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                                    <button type="submit" class="btn bg-black">Supprimer et Fermer</button>

                                                                                                </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                                </div>
                                                                            </div>

                                                                          </div>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                          </td>
                                                      </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                          <div class="d-flex justify-content-center pt-2">
                                              {!! $livreurs->links() !!}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="sumenu card-footer" id="">
                              <hr>
                              <div class="code-box">
                                  <div class="clearfix p-1">
                                      <div class="container-fluid pt-2">
                                          <div class="row">
                                              @if(in_array("9.2.4", $droits))
                                                  <div class="col" >
                                                      @if(in_array("9.2.2", $droits))
                                                      <a href="deleteAlllivreur" data-bs-toggle="tooltip" title="Tout Vider" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                                      <a href="recupAlllivreur" data-bs-toggle="tooltip" title="Tout Restorer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fas fa-sync-alt" style="font-size: 20px; color:#3300ff;"></i></a>&emsp;
                                                         {{-- <a href="javascript:;" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a> --}}
                                                      @endif
                                                  </div>
                                              @endif
                                              <div class="col d-flex nav justify-content-end">
                                                  <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="T" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endif
  <script>
      $('.sumenu').fadeToggle()
      $('#A').on('click', function (){
          $(".sumenu").fadeToggle();
      });
      $('#T').on('click', function (){
          $(".sumenu").fadeToggle();
      });
  </script>
</div>


@endsection
