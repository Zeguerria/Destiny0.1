@php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp

@extends('MaDashBord.menudashbord')
@section('titre')
    Acceuil
@endsection
@section('corps')
  <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('mesImages/Jym.png')}}" alt="logo" height="90" width="90">
    </div>

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
</style>



    <div class="content-wrapper lebody pb-4">
        <div class="content-header p-1">
            <div class="content-header pb-3">
                <div class="col-md-6 col-md-12  bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                    <div class="title">
                        <h4 class="mb-0 bread"><i class="fas fa-home msicons"></i>&ensp;Acceuil</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./dashacceuil"  style="color: rgb(0, 191, 255);">Home</a></li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>

        @if(in_array("9", $droits))
            <section class="content lebody ">
                <div class="container-fluid">
                    <div class="card cardt pb p-1">
                        <div class="card-body ">
                            <div class="">
                                <div class="card-box pd-10 height-100 mb-10" >
                                    <div class="row align-items-center" >
                                        <div class="col-md-2">
                                            <img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-fluid" >
                                        </div>
                                        <div class="col-md-10">
                                            <h4 class="font-20 weight-500 mb-10 text-capitalize" style="font-size : 30px;">
                                                <span ><b class="fw-bold msicons">W</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">elcome</small> <b class="fw-bold msicons">B</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">ack</small></span>

                                                <div class="weight-600 font-30 " style="color: var(--titre-couleur);" >{{Auth::user()->name}} {{Auth::user()->prenom}}</div>
                                            </h4>
                                            <p class="font-18 max-width-600" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Vous etes connecté en tant {{Auth::user()->profil->libelle}} , et en tant que {{Auth::user()->profil->libelle}}, vous dispossez des droits d'{{Auth::user()->role->libelle}} !<br> Alors Mr,Mdme {{Auth::user()->name}} {{Auth::user()->prenom}} ,Par quoi commencons-nous ?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="content">
                        <div class="container-fluid">
                        <div class="row">
                            @if(in_array("9.1", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                    <div class="info-box mb-3 cardt">
                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-street-view msicons"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" _msttexthash="293956" _msthash="140" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Clients Total</span>
                                        <span class="info-box-number" _msttexthash="27846" _msthash="141" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$clientstotal}}</span>
                                    </div>

                                    </div>

                                </div>
                            @endif
                            @if(in_array("9.2", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                    <div class="info-box cardt">
                                    <span class="info-box-icon bg-warning elevation-1"><i class="fab fa-teamspeak msicons"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" _msttexthash="42718" _msthash="136" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Livreurs Total</span>
                                        <span class="info-box-number" _msttexthash="36231" _msthash="137" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$LivreurTotal}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            @endif
                            @if(in_array("9.3", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                <div class="info-box cardt">
                                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-lock msicons"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" _msttexthash="42718" _msthash="136" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Utilisateur Total</span>
                                        <span class="info-box-number" _msttexthash="36231" _msthash="137" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$UserTotal}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>

                                </div>
                            @endif
                            @if(in_array("9.4", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                <div class="info-box mb-3 cardt">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-box-open msicons"></i></span>

                                    <div class="info-box-content">
                                    <span class="info-box-text" _msttexthash="42718" _msthash="136" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Livraisons Total</span>
                                    <span class="info-box-number" _msttexthash="36231" _msthash="137" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$livraisontotal}}</span>
                                    </div>
                                </div>
                                </div>
                            @endif
                            <div class="clearfix hidden-md-up"></div>
                            @if(in_array("9.5", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                    <div class="info-box cardt">
                                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-car msicons"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" _msttexthash="42718" _msthash="136" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Vehicules Total</span>
                                        <span class="info-box-number" _msttexthash="36231" _msthash="137" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$VehiculeTotal}}</span>
                                    </div>
                                    </div>
                                </div>
                            @endif
                            @if(in_array("9.6", $droits))
                                <div class="col-12 col-sm-6 col-md-2">
                                    <div class="info-box mb-3 cardt">
                                    <span class="info-box-icon bg-white elevation-1"><i class="fas fa-dollar-sign msicons"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text" _msttexthash="78663" _msthash="138" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Montant Total</span>
                                        <span class="info-box-number" _msttexthash="16237" _msthash="139" style="color: var(--titre-couleur); font-family: italic; font-size:18px;">{{$sommes}}</span>
                                    </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        </div>
                    </section>
                    @if(in_array("9.7", $droits))
                        <div class="card cardt">
                            <div class="card-body">
                                <div class="section-title text-center pb-2">
                                    <span class="msicons">Meilleurs Livraisons</span>

                                </div>
                                <div class="dataTables_wrapper dt-bootstrap4 pt-1" >
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"></div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline table-responsive-sm table-striped text-center" data-toggle="table" data-show-columns="true" aria-describedby="example2_info" style="border: 1px solid black">
                                                <thead>
                                                    <tr >
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nom Produit</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Image produit</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Prix</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Nom(s) &Prenom(s) Client</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Lieu Livraison</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Avis Client</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Nom(s) &Prenom(s) Destinataire</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Lieu recuperation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Livreur Assigné</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Commantaire Livreur</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Statut Livraison</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($meilleurslivraisons as $key => $value)
                                                    <tr class="odd" >
                                                        <td class="dtr-control" tabindex="0">{{$key+1}}</td>
                                                        <td>{{$value->produits->nom}}</td>
                                                        <td style="">
                                                        <center>
                                                            <img src="{{asset($value->produits->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                        </center>
                                                        </td>
                                                        <td style="">{{$value->prix}}</td>
                                                        <td style="">{{$value->clients->nom}} {{$value->clients->prenom}}</td>
                                                        <td style="">{{$value->lieuLivraison}}</td>
                                                        <td style="">{{$value->avisClient}}</td>
                                                        <td style="">{{$value->destinataires->nom}} {{$value->destinataires->prenom}}</td>
                                                        <td style="">{{$value->lieuRecuperation}}</td>
                                                        <td style="">{{$value->livreurs->user->name}} {{$value->livreurs->user->prenom}}</td>
                                                        <td style="">{{$value->commentareLivreur}}</td>
                                                        <td style=""><a href="#" class="btn btn-success">{{$value->statut->libelle}}</a></td>
                                                    </tr>
                                                @endforeach

                                                </tbody>

                                            </table>
                                            <div class="d-flex justify-content-center pt-2">
                                                {!! $meilleurslivraisons->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                </div>
                <div class="container-fluid cardt">
                        <div class="card cardt p-1">
                            <div class="card-body">
                                <div class="row">
                                    @if(in_array("9.8", $droits))
                                        <div class="col-md-2"><ion-icon name=""></ion-icon>
                                            <div class="small-box bg-white">
                                            <div class="inner">
                                                <h3 class="msicons">{{$livraisontotal}}</h3>
                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons en Total</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-cube msicons"></i>
                                            </div>
                                            <a href="/livraison" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.9", $droits))
                                        <div class="col-md-2"><ion-icon name=""></ion-icon>
                                            <!-- small box -->
                                            <div class="small-box bg-dark">
                                            <div class="inner">
                                                <h3 class="msicons">{{$livraisonAttente}}</h3>
                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons en Attentes</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-pause msicons"></i>
                                            </div>
                                            <a href="/attente" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.10", $droits))
                                        <div class="col-md-2"><ion-icon name=""></ion-icon>
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                            <h3 class="msicons">{{$livraisonCours}}</h3>
                                            <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons en Cours</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-play msicons"></i>
                                            </div>
                                            <a href="/cours" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.11", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3 class="msicons">{{$livraisonReporter}}</h3>

                                            <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons Reportées</p> {{-- <i class="ion-cube"></i> --}}
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-arrow-return-left msicons"></i>
                                            </div>
                                            <a href="/reporte" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.12", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3 class="msicons">{{$livraisonEffectuer}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons éffectuées</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion-checkmark-circled msicons"></i>
                                            </div>
                                            <a href="/effectue" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.13", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-danger">
                                                <div class="inner">
                                                <h3 class="msicons">{{$livraisonAnnuler}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livraisons Annulées</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion-alert-circled msicons"></i>
                                                </div>
                                                <a href="/annule" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    @if(in_array("9.14", $droits))
                                        <div class="col-md-2">
                                            <div class="small-box bg-primary">
                                                <div class="inner">
                                                <h3 class="msicons">{{$TypeParametretotal}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Type parametres total</p>
                                                </div>
                                                <div class="icon">
                                                <i class="ion ion-briefcase msicons"></i>
                                                </div>
                                                <a href="/typeParametre" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.15", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3 class="msicons">{{$TypeParametreCorbeille}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Types Parametre Corbeille</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-wrench msicons"></i>
                                            </div>
                                            <a href="/typeParametreCorbeille" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.16", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3 class="msicons">{{$parametretotal}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Parametres Total</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-gear-b msicons"></i>
                                            </div>
                                            <a href="/parametre" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.17", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-danger">
                                                <div class="inner">
                                                <h3 class="msicons">{{$parametreCorbeille}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Parametres en Corbeille</p>
                                                </div>
                                                <div class="icon">
                                                <i class="ion ion-settings msicons"></i>
                                                </div>
                                                <a href="/parametreCorbeille" class="small-box-footer"style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.18", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                <h3 class="msicons">{{$LivreurCorbeille}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Livreurs en Corbeille</p>
                                                </div>
                                                <div class="icon">
                                                <i class="ion ion-sad msicons"></i>
                                                </div>
                                                <a href="/livreurCorbeille" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if(in_array("9.19", $droits))
                                        <div class="col-md-2">
                                            <!-- small box -->
                                                <div class="small-box bg-secondary">
                                                <div class="inner">
                                                <h3 class="msicons">{{$UserCorbeille}}</h3>

                                                <p style="color: var(--titre-couleur); font-family: italic; font-size:18px;">Utilisateurs en Corbeille</p>
                                                </div>
                                                <div class="icon">
                                                <i class="ion ion-person msicons"></i>
                                                </div>
                                                <a href="/userCorbeille" class="small-box-footer" style="font-size: 18px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                </div>
            </section>
        @endif



    </div>


@endsection









