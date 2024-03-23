
@extends('MaDashBord.menudashbord')
@section('titre')
    Aide
@endsection
@section('corps')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
    :root {
        --color-t:  #02010ec3;
        --body-color: rgb(245, 250, 250);
        --nav-color: #071885;
        --side-nav: #010718;
        --text-color: #fff;
        --text-color2: #02010ec3;
        --titre-couleur: #010005c3;
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

            /*deja utilisé fin  */
        --bd-colorl2:hsl(240, 5%, 96%);
        --card-colorl4: rgb(0, 191, 255);
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
        background-color: var(--c-colorl2);
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



    <div class="content-wrapper lebody" style="background: var(--c-color2);">
        <div class="content-header p-1">
            <div class="content-header pb-3">
                <div class="col-md-6 col-md-12  bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                    <div class="title">
                        <h4 class="mb-0 bread"><i class="fas fa-hands-helping msicons"></i>&ensp;Help</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>
        {{-- NOTIFICATION DEBUT --}}
        <div class="d-flex nav justify-content-end text-center pb-1">
            @if(Session()->has('success'))
                <div class="alert alert-success col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('success')}}
                </div>
            @elseif(Session()->has('modifier'))
                <div class="alert alert-warning col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('modifier')}}
                </div>
            @elseif(Session()->has('supprimer'))
                <div class="alert alert-danger col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('supprimer')}}
                </div>
            @endif
        </div>
    {{-- NOTIFICATION DEBUT --}}

        <section class="content"  >
            <div class="container-fluid">


                <section class="content">

                    <div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="text-center text-decoration-underline pb-4" style="font-size : 50px; font-weight: 900;"><span ><b class="fw-bold msicons">S</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">olution</small> <b class="fw-bold msicons">R</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">apide</small></span></h2>
                                    <div>
                                        <p style=" color: var(--color-t); font-size: 21px;">Comment se <a href="#" class="" id="A">deconnecte</a> ?</p>

                                        <div class="sumenuA pb-2" id="">
                                            <hr>
                                            <div class="code-box">
                                                <div class="clearfix p-1">
                                                    <div class="container-fluid pt-2">
                                                        <div class="row">
                                                            <div class="col" >
                                                            </div>
                                                            <div class="col d-flex nav justify-content-end">
                                                                <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="Ta" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                                            </div>
                                                            <span class="pt-2" style="font-size: 15px; color: var(--color-t);">
                                                            <p class="pt-2 " style=""> Destiny met a la dispotion de tous les utilisateurs (Super Admins, Admins, Operateurs) trois (3) manieres de se deconnecter :</p>

                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 1 : Dans le menu de navigation, cliquez sur l'icon <i class="nav-icon fas fa-power-off msicons"></i> <br>.
                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 2  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis sur l'icon &ensp; <i class="fa fa-sign-out-alt msicons"></i> . <br>
                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 3  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis cliquez sur profil <i class="fa fa-user msicons"></i>&ensp; et une fois dans profil cliquez sur le bouton déconnecter <br>
                                                            </span>

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                      </div>
                                      <p style=" color: var(--color-t); font-size: 21px;">Comment ajouter une <a href="#" class="" id="B">Livraison</a> ?</p>

                                        <div class="sumenuB pb-2" id="">
                                            <hr>
                                            <div class="code-box">
                                                <div class="clearfix p-1">
                                                    <div class="container-fluid pt-2">
                                                        <div class="row">
                                                            <div class="col" >

                                                            </div>
                                                            <div class="col d-flex nav justify-content-end">
                                                                <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="Tb" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                                            </div>
                                                            <span class="pt-2" style="font-size: 15px; color: var(--color-t);">
                                                                <p class="pt-2 " style=""> Poour ajouter une livraison , rien de tres compliqué avec Destiny, pour se faire il suffit de  :</p>
                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 1 : Dans le menu de navigation, cliquez sur l'icon <i class="nav-icon fas fa-power-off msicons"></i> <br>.
                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 2  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis sur l'icon &ensp; <i class="fa fa-sign-out-alt msicons"></i> . <br>
                                                                <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 3  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis cliquez sur profil <i class="fa fa-user msicons"></i>&ensp; et une fois dans profil cliquez sur le bouton déconnecter <br>
                                                            </span>

                                                        </div>


                                                    </div>


                                                </div>
                                            </div>
                                      </div>
                                      <p style=" color: var(--color-t); font-size: 21px;">Comment Modifier une <a href="#" class="" id="C">Livraison</a> ?</p>
                                      <div class="sumenuC pb-2" id="">
                                        <hr>
                                        <div class="code-box">
                                            <div class="clearfix p-1">
                                                <div class="container-fluid pt-2">
                                                    <div class="row">
                                                        <div class="col" >

                                                        </div>
                                                        <div class="col d-flex nav justify-content-end">
                                                            <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="Tb" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                                        </div>
                                                        <span class="pt-2" style="font-size: 15px; color: var(--color-t);">
                                                            <p class="pt-2 " style=""> Pour modifier une livraison , vous devez :</p>
                                                            <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 1 : Dans le menu de navigation, cliquez sur l'icon <i class="nav-icon fas fa-power-off msicons"></i> <br>.
                                                            <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 2  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis sur l'icon &ensp; <i class="fa fa-sign-out-alt msicons"></i> . <br>
                                                            <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; Option 3  : Dans l'anglet de navigation , cliquez sur l'icon de votre photo de profil afin de faire apparaitre le menu personnel puis cliquez sur profil <i class="fa fa-user msicons"></i>&ensp; et une fois dans profil cliquez sur le bouton déconnecter <br>
                                                        </span>

                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <h2 class="text-start text-decoration-underline pb-4" style="font-size : 45px; font-weight: 900;"><span ><b class="fw-bold msicons">N</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">ous</small> <b class="fw-bold msicons">C</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">ontacter</small></span></h2>
                                    <h3 class="text-start text-decoration-underline msicons pb-4 pl-5" style="font-size : 35px; font-weight: 900;">Discuter avec le developper</h3>
                                    <button class="btn btn-primary msicons">Message</button>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="text-center text-decoration-underline pb-4" style="font-size : 50px; font-weight: 900;"><span ><b class="fw-bold msicons">D</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">etails du</small> <b class="fw-bold msicons">S</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">upport</small></span></h2>
                                    <div>
                                        <p style=" color: var(--color-t); font-size: 21px; font-family:inherit;"><i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Nom de l'application :<a href="#" class="" id=""> Destiny</a></p>
                                        <p style=" color: var(--color-t); font-size: 21px; font-family:inherit;"><i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Type : Application Web</p>
                                        <p style=" color: var(--color-t); font-size: 21px; font-family:inherit;"><i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Interface : Gestion</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </section>


            </div>
            <script>
                $('.sumenuA').fadeToggle()
                $('#A').on('click', function (){
                    $(".sumenuA").fadeToggle();
                });
                $('#Ta').on('click', function (){
                    $(".sumenuA").fadeToggle();
                });
                $('#C').on('click', function (){
                    $(".sumenuC").fadeToggle();
                });
                $('.sumenuC').fadeToggle()
                $('.sumenuB').fadeToggle()
                $('#B').on('click', function (){
                    $(".sumenuB").fadeToggle();
                });
                $('#Tb').on('click', function (){
                    $(".sumenuB").fadeToggle();
                });
            </script>


        </section>




    </div>


@endsection










