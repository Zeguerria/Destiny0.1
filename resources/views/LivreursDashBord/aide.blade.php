





@extends('LivreursDashBord.livMenuDashBord')
@section('titre')
    Aide
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
                            <h3 class="mb-0 bread msicons"><i class="fa fa-question-circle msicons"></i> &ensp;Help</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./livdashacceuil" style="color: rgb(0, 191, 255);">Home</a></li>
                                <li class="breadcrumb-item "><a href="./aideUtLivreur" style="color: var( --c-colorl3);">Help</a></li>

                            </ol>
                        </nav>
                    </div>

                </div>


            </div>
            <div class="card-box pd-20 height-100-p mb-30">
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

			</div>
            </div>


		</div>
	</div>


@endsection
