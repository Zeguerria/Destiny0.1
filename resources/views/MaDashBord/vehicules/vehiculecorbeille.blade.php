

@extends('MaDashBord.menudashbord')
@section('titre')
    Corbeille
@endsection
@section('corps')

    <style>
        :root {
            --body-color: rgb(245, 250, 250);
            --nav-color: #071885;
            --side-nav: #010718;
            --text-color: #fff;
            --text-color2: #02010ec3;
            /*  */
            --c-color2:#0a244d;
            --c-colorl7:#8cabd9;
            /*  deja utilisé debut*/
            --h4-colorl1:hsl(210, 21%, 87%);
            --mesicons-colorl5:hsl(210, 21%, 87%);
            --bd-colorl2:hsl(210, 100%, 99%);
            --body-colorl3:hsl(206, 41%, 97%);
            /* deja utilisé fin  */
            --card-colorl4:hsl(24, 71%, 99%);
        /*  */
        }

        .dark {
            /*  */
            --c-color2:#0d0d0d;
            --c-colorl7:#1a1a1a;
                /* deja utilisé debut */
            --h4-colorl1:hsl(232, 96%, 49%);
            --mesicons-colorl5: rgb(21, 0, 255);
            --body-colorl3:#013D48;
            --body-color: #071885;
            --text-colorl6:rgb(21, 0, 255);

                /*deja utilisé fin  */
            --bd-colorl2:hsl(240, 5%, 96%);
            --card-colorl4: rgb(0, 191, 255);
            /*  */


            --nav-color: #18191a;
            --side-nav: #242526;
            --text-color: #ccc;
            --text-color2: red;
        }
        .lebody{
                padding:0;
                margin:0;
            background-color: var(--c-colorl2);
        }
        h4{
            padding-top: 8px;
            color: var(--h4-colorl1);
            font-size:25px;
            font-weight:bold;
            font-family: system-ui;
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
            background-color:  var(--card-colorl4);
        }
        th{
            color:var(--text-colorl6);
        }








        /* From uiverse.io by @satyamchaudharydev */
            /* this button is inspired by -- whatsapp input */
            /* == type to see fully interactive and click the close buttom to remove the text  == */

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
            height: 15px;
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
  <div class="content-wrapper lebody masection pb-5">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header pb-5">
        <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="title">
                <h4 class="mb-0 bread"><!--<i class="fas fa-trash msicons"></i>--><img src="{{asset('mesImages/icon/bin-file.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Corbeille</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Corbeilles</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Vehicules</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">

        <div class="card cardt" style="background-image: url({{asset('mesImages/theme/')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
                <div class="card-header">

                    <!-- titre Formulaire debut, a l'interrieur y a le bouton du modal et le formulaire -->


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col  d-flex nav justify-content-end">
                                <form class="form me-2" role="search" action="{{url('/searchVehiculeCorbeille')}}">
                                    <label for="search">
                                        <input required="" autocomplete="off" placeholder="Rechercher un vehicule" name="cherche" id="search" type="text">
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
                                <!------------------------->
                                <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#006affb4;"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- titre Formulaire fin -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <div class="dataTables_wrapper dt-bootstrap4 pt-1">
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
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Type de Vehicule</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Model Vehicule</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Marque Vehicule</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Matricule Vehicule</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">photo Vehicule</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Nom(s) & Prenom(s) Livreur</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" style="" aria-sort="ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($vehicules as $key => $value)
                                        <tr class="odd">
                                            <td class="dtr-control" tabindex="0">{{$key+1}}</td>
                                            <td>{{$value->typeVehicule}}</td>
                                            <td>{{$value->modelVehicule}}</td>
                                            <td style="">{{$value->marqueVehicule}}</td>
                                            <td style="">{{$value->numeroMatricule}}</td>
                                            <td style="">
                                                <center>
                                                    <img src="{{asset($value->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>
                                            <td style="">{{$value->livreur->user->name}} {{$value->livreur->user->prenom}}</td>
                                            <td style="" class="sorting_1">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class="dropdown">
                                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h msiconst" style="font-size: 30px;"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Restorer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-sync" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Restorer</a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                            </div>

                                                            <div class="modal fade" id="consulter{{$value->id}}">
                                                                <div class="modal-dialog  modal-lg">
                                                                    <div class="modal-content"><i class=""></i>
                                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter le vehicule : </h4>

                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                @csrf
                                                                                <!--corp du formulaire debut-->


                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex"><i class="fas fa-car"></i>&ensp;Type de Vehicule</label>
                                                                                                <input type="text" value="{{$value->typeVehicule}}" readonly class="form-control" id="" name="typeVehicule" placeholder="Entrer le type de vehicule">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex"><i class="fas fa-layer-group"></i>&ensp;Model</label>
                                                                                                <input type="text" value="{{$value->modelVehicule}}" readonly class="form-control" id="" name="modelVehicule" placeholder="Entrer le model">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque</label>
                                                                                                <input type="text" value="{{$value->marqueVehicule}}" readonly class="form-control" id="" name="marqueVehicule" placeholder="Entrer la marque">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex"><i class="fas fa-receipt"></i>&ensp;Matricule</label>
                                                                                                <input type="text"  value="{{$value->numeroMatricule}}" readonly class="form-control" id="" name="numeroMatricule" placeholder="Entrer le matricule">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex"><i class="fas fa-hard-hat"></i>&ensp;Livreur</label>
                                                                                                <select class="form-control" disabled id="" name="livreur_id">
                                                                                                    @foreach ($livreurs as $key => $livreur)
                                                                                                    <option value="{{$livreur->id}}" {{($livreur->id==$value->livreur_id)?"selected":""}}>{{$livreur->user->name}} {{$livreur->user->prenom}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                        {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- corbeille  --}}
                                                            <div class="modal fade" id="corbeille{{$value->id}}">
                                                                <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer le Vehicule </h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="{{route('recupVehicule')}}">
                                                                            @csrf
                                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                                <!--corp du formulaire debut-->

                                                                                <div class="">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-car"></i>&ensp;Type de Vehicule</label>
                                                                                                    <input type="text" value="{{$value->typeVehicule}}" readonly class="form-control" id="" name="typeVehicule" placeholder="Entrer le type de vehicule">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-layer-group"></i>&ensp;Model</label>
                                                                                                    <input type="text" value="{{$value->modelVehicule}}" readonly class="form-control" id="" name="modelVehicule" placeholder="Entrer le model">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque</label>
                                                                                                    <input type="text" value="{{$value->marqueVehicule}}" readonly class="form-control" id="" name="marqueVehicule" placeholder="Entrer la marque">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-receipt"></i>&ensp;Matricule</label>
                                                                                                    <input type="text"  value="{{$value->numeroMatricule}}" readonly class="form-control" id="" name="numeroMatricule" placeholder="Entrer le matricule">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-hard-hat"></i>&ensp;Livreur</label>
                                                                                                    <select class="form-control" disabled id="" name="livreur_id">
                                                                                                        @foreach ($livreurs as $key => $value)
                                                                                                        <option value="{{$value->id}}">{{$value->user->name}} {{$value->user->prenom}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                            {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                        </div>




                                                                                    </div>
                                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash"></i>&ensp; Supprimer et Fermer</button>
                                                                                    </div>
                                                                                </div>
                                                                        </form>
                                                                    </div>


                                                                </div>
                                                                </div>
                                                            </div>
                                                            {{-- supprimer  --}}
                                                            <div class="modal fade" id="supprimer{{$value->id}}">
                                                                <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supper le vehicule </h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="{{route('supprimerVehicule')}}">
                                                                            @csrf
                                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                                <!--corp du formulaire debut-->

                                                                                <div class="">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-car"></i>&ensp;Type de Vehicule</label>
                                                                                                    <input type="text" value="{{$value->typeVehicule}}" readonly class="form-control" id="" name="typeVehicule" placeholder="Entrer le type de vehicule">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-layer-group"></i>&ensp;Model</label>
                                                                                                    <input type="text" value="{{$value->modelVehicule}}" readonly class="form-control" id="" name="modelVehicule" placeholder="Entrer le model">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque</label>
                                                                                                    <input type="text" value="{{$value->marqueVehicule}}" readonly class="form-control" id="" name="marqueVehicule" placeholder="Entrer la marque">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-receipt"></i>&ensp;Matricule</label>
                                                                                                    <input type="text"  value="{{$value->numeroMatricule}}" readonly class="form-control" id="" name="numeroMatricule" placeholder="Entrer le matricule">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label class="d-flex"><i class="fas fa-hard-hat"></i>&ensp;Livreur</label>
                                                                                                    <select class="form-control" disabled id="" name="livreur_id">
                                                                                                        @foreach ($livreurs as $key => $value)
                                                                                                            <option value="{{$value->id}}">{{$value->user->name}} {{$value->user->prenom}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                            {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                                        <button type="submit" class="btn btn-primary">Supprimer et Fermer</button>
                                                                                    </div>
                                                                                </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <div class="d-flex justify-content-center pt-2">
                                {!! $vehicules->links() !!}
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
                                        <a href="deleteAllvehicule" data-bs-toggle="tooltip" title="Tout Vider" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                        <a href="recupAllvehicule" data-bs-toggle="tooltip" title="Tout Restorer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fas fa-sync-alt" style="font-size: 20px; color:#3300ff;"></i></a>&emsp;
                                        {{-- <a href="javascript:;" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a> --}}
                                    </div>
                                    <div class="col d-flex nav justify-content-end"><i class=""></i>
                                        <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="T" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
             <!-- /.card-body -->
        </div>


      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
  <!-- /.content-wrapper -->

 @endsection

