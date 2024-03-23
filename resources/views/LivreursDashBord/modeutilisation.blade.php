





@extends('LivreursDashBord.livMenuDashBord')
@section('titre')
    Mode d'utilisation
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
           --c-color3:#8cabd9;
           --h4-colorl1:hsl(210, 21%, 87%);

           --bd-colorl2:hsl(210, 100%, 99%);
           --c-colorl3:hsl(210, 89%, 64%);
           --c-colorl4:hsl(25,70%,45%);
           --mesicons-colorl5:hsl(210, 21%, 87%);
       /*  */
    }

    .dark {
           /*  */
           --c-color2:#0d0d0d;
           --c-color3:#1a1a1a;
           --h4-colorl1:hsl(232, 96%, 49%);
            --mesicons-colorl5: rgb(0, 191, 255);
           --bd-colorl2:hsl(240, 5%, 96%);
           --c-colorl3:hsl(246, 91%, 50%);
           --c-colorl4:hsl(25,70%,45%);
           /*  */
           --body-color: #071885;


           --nav-color: #18191a;
           --side-nav: #0bfcfc;
           --text-color: #ccc;
           --text-color2: red;
    }
       .liens{
        color: var(--h4-colorl1);
       }
       .lebody{
           background-color: var(--c-colorl2);
       }
       h4{
        padding-top: 8px;
        color: var(--h4-colorl1);
        font-size:25px;
        font-weight:bold;
        font-family: system-ui;
       }
       .h4{
        padding-top: 8px;
        color: var(--bd-colorl2);
        font-size:25px;
        font-weight:bold;
        font-family: system-ui;
       }
       h5{
        padding-top: 8px;
        color: var(--h4-colorl1);
        font-size:25px;
        font-weight:bold;
        font-family: system-ui;
       }
       .clas{
        padding-top: 8px;
        color: var(--h4-colorl1);
        font-size:25px;
        font-weight:bold;
        font-family: system-ui;
       }
       .msicons{
        color: var(--mesicons-colorl5);
       }
       .tab{
        background : var(--mesicons-colorl5);;
       }
</style>

















    <div class="main-container">
		<div class="pd-ltr-20">

            <div class="page-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h3 class="mb-0 bread msicons"><i class="fa fa-info-circle msicons"></i> &ensp;Guide</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./livdashacceuil" style="color: rgb(0, 191, 255);">Home</a></li>
                                <li class="breadcrumb-item "><a href="./modeUtLivreur" style="color: var( --c-colorl3);">Guide</a></li>

                            </ol>
                        </nav>
                    </div>

                </div>


            </div>
            <div class="card-box pd-20 height-100-p mb-30">

                <h4 class="text-center">Introduction</h4>
                <p class="pt-3">Ce guide d’utilisation de l’application Web Destiny s’adresse à tous les livreurs qui interagiront avec l’application dans le cadre la gestion de livraison. </p>
                <p>L’application Destiny vous permet de gerer les démarches liées à la gestion de livraisons et de livreurs
                    de manière électronique. Cette application remplace les anciennes procédures manuelles : elle permet de
                    valider ou corriger les données d'enreigistrement de commande jusqu'a sa delivration aupres du client.
                   </p>
                   <p>Dans ce guide d’utilisation, vous trouvez toutes les informations nécessaires pour vous familiariser avec
                    l’application. Ce guide se divise en deux parties. </p>
                    <p>La première vous informe des pré-requis nécessaires quant à l’installation et l’utilisation de l’application,
                        de l’accès à l’application et des étapes à suivre lors du premier accès à l’application. <br><br>
                        Dans la deuxième partie de ce guide, nous nous focalisons sur les différentes fonctionnalités de
                        l’application Destiny. Vous y trouvez une multitude de conseils afin d’utiliser l’application correctement.</p>

                        <h4 class="text-center pb-2">Partie 1 : Informations Genérales</h4>
                        <h5 class="pb-2">Pré-requis à l’utilisation de l’application</h5>
                        <p>
                            <span>INTERNET : une connexion à Internet est indispensable. Votre
                                service informatique doit vous donner accès aux domaines nécessaires pour utiliser Destiny.
                            </span><br>
                            <span>Navigateur : Le fonctionnement optimal de Destiny suppose l’utilisation des navigateurs</span>
                            <br>
                            <span>
                                PROFIL : disposer d’un profil standard dans la base de données valider par un adminitrateur afin de permettre votre
                                identification et les differentes actions au dans l'application.
                            </span>
                        </p>
                        <h5 class="pb-2">Identification de l’utilisateur et accès à l’application</h5>
                        <p>Afin d’accéder à l’application Destiny, il vous faut préalablement vous identifier et vous authentifier au moyen de votre nom d’utilisateur, votre mot de passe, et votre Token. <br>
                            Une fois authentifié, l’accès à Destiny vous est octroyé selon le « rôle user » que votre adminitrateur vous a attribué.
                            </p>

                            <h4 class="text-center pb-2">Partie 2 : Fonctionnalités de Destiny</h4>
                            <p class="pt-3">Vous trouverez ci-dessous l'ensemble de possibilité, de fonctionnalités qu'offre cette appliation aux differents utilisateurs selon le role.</p>


			</div>
            </div>


		</div>
	</div>


@endsection
