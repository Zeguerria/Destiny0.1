
@php
  $droits = array();

  foreach(Auth::user()->profil->profil_habilitations as $key => $value){
      $droits[$key] = $value->habilitation->code;
  }
@endphp
@extends('MaDashBord.menudashbord')
@section('titre')
    Habilitation
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
                <h4 class="modal-title">Ajouter une Habilitation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" style="background: var(--c-color2);">
                    <form method="post" action="{{route('ajouterHabilitation')}}">
                        @csrf
                        <!--corp du formulaire debut-->
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                    <input type="text" class="form-control" id="" name="code" placeholder="Entrer le code">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                    <input type="text" class="form-control" id="" name="libelle" placeholder="Entrer le Libelle">
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description :</label>
                                    <input type="text" class="form-control" id="" name="description" placeholder="Entrer la Description">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                            <button type="submit" class="btn btn-primary"><i class="far fa-thumbs-up"></i>&ensp;Enregistrer</button>
                        </div>
                    </form>
                </div>
        </div>
        </div>
    </div>
    <div class="content-wrapper lebody masection pb-5" style="min-height: 2080.32px;">
        <div class="content-header pb-5">
            <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title">
                    <h4 class="mb-0 bread"><!--<i class="fas fa-users msicons"></i>--><img src="{{asset('mesImages/icon/folder.gif')}}" alt="" class="img img-circle msicons" width="50" height="50">&ensp;Habilitations</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" >Gestions</li>
                        <li class="breadcrumb-item active" aria-current="page" >Habilitation</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if(in_array("17", $droits))
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card cardt">
                                <div class="card-header">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                @if(in_array("17.1", $droits))
                                                    <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus" style="font-size: 20px; color:#7bff00;"></i></button>
                                                @endif
                                            </div>
                                            <div class="col  d-flex nav justify-content-end">
                                                @if(in_array("17.2", $droits))
                                                    <div class="form-group">
                                                        @if(in_array("17.2.1", $droits))
                                                            <label for=""><a href="#" class="btn " id="" data-bs-toggle="tooltip" title="total habilitations"><i class="fa fa-user-circle msicons" style="font-size: 20px;"></i><sup >{{$HabilitationTotal}}</sup></a></label>
                                                        @endif
                                                        @if(in_array("17.2.2", $droits))
                                                            <label for=""><a href="#" class="btn " id="" data-bs-toggle="tooltip" title="total habilitations corbeille"><i class="fa fa-trash msicons" style="font-size: 20px;"></i><sup >{{$HabilitationTotalC}}</sup></a></label>
                                                        @endif
                                                    </div>
                                                @endif
                                                <form class="form me-2" role="search" action="{{url('/searchHabilitation')}}">
                                                    <label for="search">
                                                        <input required="" autocomplete="off" placeholder="Rechercher une Habilitation" name="cherche" id="search" type="text">
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

                                                {{-- <form class="d-flex" role="search" action="{{url('/search')}}">
                                                    <input class="form-control me-2"  placeholder="Rechercher un cours" name="cherche" type="search" placeholder="Search" aria-label="search">
                                                    <button class="btn " type="submit"><i class="fas fa-search"></i></button>
                                                </form> --}}
                                                <!------------------------->
                                                @if(in_array("17.3", $droits))
                                                    <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v msiconst" style="font-size: 20px;"></i></a>
                                                @endif
                                            </div>
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
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Code</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Libelle</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Description</th>
                                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" style="" aria-sort="ascending">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($habilitations as $key => $value)
                                                            <tr class="odd">
                                                                <td class="dtr-control" tabindex="0">{{$key+1}}</td>
                                                                <td>{{$value->code}}</td>
                                                                <td>{{$value->libelle}}</td>
                                                                <td style="">{{$value->description}}</td>
                                                                <td style="" class="sorting_1">
                                                                    <div class="btn-group">
                                                                        <div style="">
                                                                            @if(in_array("17.4", $droits))
                                                                                <div class="dropdown">
                                                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">

                                                                                        <i class="fas fa-ellipsis-h msiconst" style="font-size: 30px;"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Modifier</a>
                                                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                                                    </div>
                                                                                    <!--  Consultation-->
                                                                                <!--  Consultation-->
                                                                                <div class="modal fade" id="consulter{{$value->id}}">
                                                                                    <div class="modal-dialog  modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter l'Habilitation' : {{$value->libelle}}</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                                                            <form>
                                                                                                @csrf
                                                                                                <!--corp du formulaire debut-->
                                                                                                <div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code :</label>
                                                                                                                <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                                                                                                <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                                                                                                <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </form>

                                                                                        </div>

                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modification-->
                                                                                <div class="modal fade" id="modifier{{$value->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Modifier l'Habilitation' : {{$value->libelle}}</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                                                <form method="post" action="{{route('modifierHabilitation')}}">
                                                                                                        @csrf
                                                                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                                                                        <!--corp du formulaire debut-->
                                                                                                    <div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code </label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->code}}"  id="" name="code" placeholder="Entrer le code">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">

                                                                                                                <div class="form-group">
                                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->libelle}}"  id="" name="libelle" placeholder="Entrer le libellé">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group">
                                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                                                                                                    <input type="text" class="form-control" value="{{$value->description}}"  id="contact" name="description" placeholder="Entrer la description">
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>

                                                                                                    </div>

                                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                                                                <button type="submit" class="btn btn-warning"><i class="far fa-thumbs-up"></i>&ensp;Modifier et Fermer</button>
                                                                                                            </div>
                                                                                                    </form>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- corbeille-->

                                                                                <div class="modal fade" id="corbeille{{$value->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer l'Habilitation' : {{$value->libelle}}</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                                                            <form method="post" action="{{route('corbeilleHabilitation')}}">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                                                    <!--corp du formulaire debut-->
                                                                                                        <div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-6">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code </label>
                                                                                                                        <input type="text" class="form-control" value="{{$value->code}}" readonly id="" name="code" placeholder="Entrer la code">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-6">

                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                                                        <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="" name="libelle" placeholder="Entrer le libellé">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                                                                                                        <input type="text" class="form-control" value="{{$value->description}}" readonly id="description" name="description" placeholder="Entrer la description">
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                                                <button type="submit" class="btn btn-danger"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et fermer</button>
                                                                                                            </div>
                                                                                                </form>
                                                                                        </div>

                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- supprimer-->
                                                                                <div class="modal fade" id="supprimer{{$value->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header bg-black">
                                                                                                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer l'Habilitation
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                                                <form method="post" action="{{route('supprimerHabilitation')}}">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                                                        <!--corp du formulaire debut-->
                                                                                                        <div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-6">

                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="supprimer{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code </label>
                                                                                                                        <input type="text" class="form-control" readonly value="{{$value->code}}" id="suprimer{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-6">

                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                                                        <input type="text" class="form-control" readonly value="{{$value->libelle}}" id="suprimer{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                                                                                                        <input type="text" class="form-control" readonly value="{{$value->description}}" id="suprimer{{$value->id}}" name="description" placeholder="Entrer la description">
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                                            <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                                            <button type="submit" class="btn bg-black"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et Fermer</button>

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

                                                </table>
                                                <div class="d-flex justify-content-center pt-2">
                                                    {!! $habilitations->links() !!}
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
                                                    <div class="col" >
                                                        <div class="col" >
                                                            {{-- <a href="corbeilleAllhabilitation" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp; --}}

                                                            {{-- <a href="corbeilleAll" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                                            <a href="javascript:;" data-bs-toggle="tooltip" title="Cards" class="btn   btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-id-card" style="font-size: 20px; color:#56ff02b4;"></i></a>&emsp;
                                                            <a href="javascript:;" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a> --}}
                                                        </div>
                                                    </div>
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


    </div>

    <script>
        $('.sumenu').fadeToggle()
       $('#A').on('click', function (){
           $(".sumenu").fadeToggle();
       });
       $('#T').on('click', function (){
           $(".sumenu").fadeToggle();
       });

    </script>
@endsection










{{--

 /*** @media all  ***/

 *
   box-sizing border-box

 html
   height 100%

 body
   min-height 100%
   margin 0
   display flex
   flex-flow  column nowrap
   justify-content center
   align-items  sretch
   font  12pt/1.5 'Raleway','Cambria', sans-serif
   font-weight 300
   background  #fff
   color #666
   -webkit-print-color-adjust  exact

 header
   padding 16px
   position  relative
   color #888
   h1,h2
     font-weight 200
     margin 0
   h1
     font-size 27pt
     letter-spacing 4px

 body > *
   width 100%
   max-width 7in
   margin 3px auto
   background #F0f0f0
   text-align center

 footer
   padding 16px
   p
     font-size 9pt
     margin 0
     font-family 'Nunito'
     color #777

 section, table
   padding 8px 0
   position  relative

 dl
   margin 0
   letter-spacing -4px
   dt,dd
     letter-spacing normal
     display inline-block
     margin 0
     padding 0px 6px
     vertical-align top

 dl.bloc > dt
 dl:not(.bloc) dt:not(:last-of-type)
 dl:not(.bloc) dd:not(:last-of-type)
   border-bottom 1px solid #ddd
 dl:not(.bloc) dt
   border-right 1px solid #ddd
 dt
   width 49%
   text-align right
   letter-spacing 1px !important
   overflow hidden
 dd
   width 49%
   text-align left
 dd,tr>td
   font-family 'Nunito'

 section.flex
   display flex
   flex-flow row wrap
   padding 8px 16px
   justify-content space-around

 dl.bloc
   padding 0
   flex 1
   vertical-align top
   min-width 240px
   margin 0 8px 8px

 dl.bloc>dt
   text-align left
   width 100%
   margin-top 12px

 dl.bloc>dd
   text-align left
   width 100%
   padding 8px 0 5px 16px
   line-height 1.25
   //background #fefefe

 dl.bloc>dd>dl dt
   width 33%
 dl.bloc>dd>dl dd
   width 60%
 dl.bloc dl
   margin-top 12px
 dl.bloc dd
   font-size 11pt

 table
   width 100%
   padding 0
   border-spacing 0px
   tr
     margin 0
     padding 0
     background  #fdfdfd
     border-right 1px solid #ddd
     width 100%
     td, th
       border  1px solid #e3e3e3
       border-top 1px solid white
       border-left-color #fff
       font-size 11pt
       background #fdfdfd

   thead th
     background #E9E9E9
     background linear-gradient(to bottom, #f9f9f9, #e9e9e9) !important
     font-weight 300
     letter-spacing 1px
     padding 15px 0 5px
     /*&:not(:last-child)*/
     border none !important


   tbody
     tr:last-child td
       border-bottom 1px solid #ddd
     td
       min-width 75px
       padding  3px 6px
       line-height 1.25

   tfoot tr
     td
       /*border 1px solid #e3e3e3
       border-top 1px solid white
       border-left-color #fff*/
       height 40px
       padding 6px 0 0
       color #000
       text-shadow 0 0 1px rgba(0,0,0,.25)
       font-family 'Cambria','Raleway', sans-serif
       font-weight 400
       letter-spacing 1px
     td:first-child
       font-style italic
       color #997B7B

 a
   color #992C2C
 a:hover
   color #BB0000
 @page
   margin .5cm


 /*** @media screen  ***/

 html,body
   background #333231

 header:before // CORNER PAGE EFFECT
   content ''
   position absolute
   top 0
   right 0
   border-top 12px solid #333
   border-left 12px solid #ddd
   width 0
   box-shadow 1px 1px 2px rgba(0,0,0,.18)






 head
  meta(charset="UTF-8")
  title Facture José Roux
  link(href="https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300", rel="stylesheet", type="text/css")

body
  header
    h1 FACTURE
      h2 José Roux − Interactive Design

  section(class="flex")
    dl
      dt Facture #
      dd 20140603
      dt Date de facturation
      dd 03.06.2014

  section(class="flex")
    dl(class="bloc")
      dt Facturé à:
      dd
        | Company X &amp; Son Inc.<br>
        | 2789 Some street,<br>
        | Big City, Québec, J3X 1J1
        dl
          dt Attn
          dd Le Big Boss
          dt Téléphone
          dd (450) 555-2663
          dt Courriel
          dd bigboss@bigcompanylonglongemail.com
    dl(class="bloc")
      dt Description de service:
      dd Développement AIR
      dt Période totale:
      dd 24 Mai au 2 Juin 2014

  table
    thead
      tr
        th Période
        th Description
        th Heures
        th Taux
        th Montant
    tbody
      tr
        td 24 Mai au 2 Juin
        td Dévelopement du jeu Tomatina
        td 24&#8202;h
        td 20&#8202;$/h
        td 480&#8202;$
    tfoot
      tr
        td(colspan="3") − Faire les chèques payable au nom de moi −
        td Total:
        td 480&#8202;$

  footer
    p Moi – Informatique − Développement WEB | <a href="http://joseroux.com">joseroux.com</a>
    p 1777 some street in the woods, Wentworth-Nord, Qc, J0T 1Y0 | Tél. 450-555-1000 | <a href="mailto:mail@me.com">mail@me.com</a>
 --}}
