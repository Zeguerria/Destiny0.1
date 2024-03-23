
@extends('LivreursDashBord.livMenuDashBord')
@section('titre')
    Livraison
@endsection

@section('corps')
<div >
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
        .lecorps{
            background-color : var(--c-color2);
        }
        td{
        font-size: 18px;
        color: var(--color-t);
        font-family : 'Times New Roman', Times, serif;
        }

    </style>

    <div class="content-wrapper lecorps masection pb-5" style="min-height: 1000px;">
    <div class="main-container " >
		<div class="pd-ltr-20">

            <div class="page-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="row ">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="title">
                            <h3 class="mb-0 bread msicons"><i class="fa fa-archive msicons"></i> &ensp;Livraisons</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./livdashacceuil" style="color: rgb(0, 191, 255);">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: var( --h4-colorl1);">Livraisons</a></li>
                                <li class="breadcrumb-item "><a href="./livraisonLivreur" style="color: var( --c-colorl3);">Livraison</a></li>
                            </ol>
                        </nav>
                    </div>

                </div>


            </div>

            <div class="pd-20 card-box mb-30 tab cardt">

                <div class="table-responsive">
                    <table class="table text-center ">
                        <thead>
                            <tr style="color: var( --c-colorl3); ">
                                <th scope="col">#</th>
                                <th scope="col">Nom Produit</th>
                                <th scope="col">Image produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Nom(s) & Prenom(s) Client</th>
                                <th scope="col">Lieu Livraison</th>
                                <th scope="col">Avis Client</th>
                                <th scope="col">Nom(s) & Prenom(s) Destinataire</th>
                                <th scope="col">Contact Destinataire</th>
                                <th scope="col">Lieu recuperation</th>
                                {{-- <th scope="col">Livreur Assigné</th> --}}
                                <th scope="col">Mon Commantaire</th>
                                <th scope="col">Statut Livraison</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($livraisons as $key => $value)


                            <tr class="table-active" style="color: var( --side-nav); ">
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$value->produits->nom}}</td>
                                <td>
                                    <center>
                                        <img src="{{asset($value->produits->le_profil)}}" alt="" class="img img-fluid" width="50" height="50">
                                    </center>
                                </td>
                                <td>{{$value->prix}}</td>
                                <td>{{$value->clients->nom}} {{$value->clients->prenom}}</td>
                                <td>{{$value->lieuLivraison}}</td>
                                <td>{{$value->avisClient}}</td>
                                <td>{{$value->destinataires->nom}} {{$value->destinataires->prenom}}</td>
                                <td>{{$value->destinataires->contact}}</td>

                                <td>{{$value->lieuRecuperation}}</td>
                                {{-- <td>{{$value->livreurs->user->name}} {{$value->livreurs->user->prenom}}</td> --}}
                                <td>{{$value->commentareLivreur}}</td><i class=""></i>
                                <td style="">{{$value->statut->libelle}}</td>

                                <td>
                                    <a class="" href="#" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="icon-copy fi-widget" style="font-size: 30px; color:#a6a806b4;"></i></a>
                                    <div class="modal fade" id="modifier{{$value->id}}">
                                        <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                <h4 class="modal-title"><span><i class="fa fa-archive msicons"></i></span>&ensp;Modifier  la livraison de : {{$value->clients->nom}} {{$value->clients->prenom}} </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="background: var(--c-color2);">
                                                <form method="post" action="{{route('modifierLivraison')}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                        <!--corp du formulaire debut-->
                                                        <div>
                                                            <!--corp du formulaire debut-->
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="d-flex"style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-foundation msicons" ></i>&ensp;Lieu Livraison</label>
                                                                        <input type="text" class="form-control" value="{{$value->lieuLivraison}}" readonly  id="consulter{{$value->id}}" name="lieuLivraison" placeholder="Entrer le code">
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                                                        <input type="text" class="form-control" value="{{$value->natureColis}}"  id="consulter{{$value->id}}" name="natureColis" placeholder="Entrer la nature du Colis">
                                                                    </div>
                                                                </div> --}}
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-price-tag msicons"></i>&ensp;Produit :</label>
                                                                        <select class="form-control"  id="" disabled  name="produit_id">
                                                                            @foreach ($produits as $key => $produit)
                                                                            <option value="{{$produit->id}}"{{($produit->id==$value->produit_id)?"selected":""}} >{{$produit->nom}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-dollar msicons"></i>&ensp;Prix</label>
                                                                        <input type="number" class="form-control" value="{{$value->prix}}" readonly  id="consulter{{$value->id}}" name="prix" placeholder="Entrer le prix">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-torso msicons"></i>&ensp;Client</label>
                                                                        <select class="form-control"  id="" disabled name="client_id">
                                                                            @foreach ($clients as $key => $client)
                                                                            <option value="{{$client->id}}"{{($client->id==$value->client_id)?"selected":""}} >{{$client->nom}} {{$client->prenom}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi- msicons"></i>&ensp;Destinataire</label>
                                                                        <select class="form-control"  id="" disabled name="destinataire_id">
                                                                            @foreach ($destinataires as $key => $destinataire)
                                                                            <option value="{{$destinataire->id}}"{{($destinataire->id==$value->destinataire_id)?"selected":""}} >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex"><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>

                                                                        <select class="form-control"  id="" disabled name="livreur_id">

                                                                            @foreach ($livreurs as $key => $livreur)

                                                                            <option value="{{$livreur->id}}" {{($livreur->id==$value->livreur_id)?"selected":""}} >{{$livreur->user->name}} {{$livreur->user->prenom}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-flag msicons"></i>&ensp;Lieu Recuperation</label>
                                                                        <input type="text" class="form-control" readonly value="{{$value->lieuRecuperation}}" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-social-foursquare msicons"></i>&ensp;Statut</label>
                                                                        <select class="form-control"  id="" name="statut_id">
                                                                            @foreach ($statuts->parametres as $key => $statut)
                                                                            <option value="{{$statut->id}}" {{($statut->id==$value->satut_id)?"selected":""}} >{{$statut->libelle}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-comment-quotes msicons"></i>&ensp;Avis du Client</label>
                                                                        <input type="text" class="form-control" value="{{$value->avisClient}}"   id="consulter{{$value->id}}" name="avisClient" placeholder="Entrer le avisClient">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="icon-copy fi-text-color msicons"></i>&ensp;Mon Commentaire</label>
                                                                        <input type="text" class="form-control" value="{{$value->commentareLivreur}}"  id="consulter{{$value->id}}" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times msicons"></i>&ensp;Fermer</button>
                                                            <button type="submit" class="btn btn-primary"><i class="icon-copy fi-arrows-in"></i>&ensp;Modifier et Fermer</button>

                                                        </div>
                                                </form>
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
                        {!! $livraisons->links() !!}
                    </div>
                </div>

            </div>


        </div>
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

  </div>
</div>
 @endsection





















