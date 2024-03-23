





@extends('LivreursDashBord.livMenuDashBord')
@section('titre')
    Acceuil
@endsection
@section('corps')
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="{{asset('mesImages/D2.png')}}" alt="" width="100" height="100"></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>
    </div>
    <style>
        /* h3{
            font-weight: 300!important;
            font-size: 25px !important;
        }

        h4{
            font-size: 18px !important;
            font-weight: 300 !important;
        }


        footer{
            margin-top:100px;
            color: #555;
            background: #fff;
            padding: 25px;
            font-weight: 300;

        } */
        .card.card-carousel {
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px ;
            color: rgba(0,0,0,.87);
            background: var(--c-color2);
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
        }

        .card.card-carousel img{
            border-radius: 6px;
        }



        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 10px;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }

        .carousel .carousel-indicators {
            bottom: 5px;
        }

        .carousel .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            text-indent: -999px;
            cursor: pointer;
            border: 1px solid #fff;
            border-radius: 10px;
            background: var(--mesicons-colorl5);
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12), 0 1px 5px 0 rgba(0,0,0,.2);
            border-radius: 2px;
        }

        .carousel .carousel-indicators .active{
            margin: 11px 10px;
        }

        .carousel .carousel-indicators li {
            margin: 11px 10px;
        }
        .carousel .carousel-indicators .active {
            margin-top: 10px;
            transform: scale(1.5);
            box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-item {
            position: relative;
            display: none;
            align-items: center;
            width: 100% !important;
            transition: transform .6s ease;
            backface-visibility: hidden;
            perspective: 1000px;
        }

        .carousel-item.active {
            display: block;
        }

        .carousel .carousel-caption {
            padding-bottom: 45px;
        }

        .carousel .carousel-caption .material-icons {
            position: relative;
            top: 5px;
        }

        .carousel .carousel-control-next .material-icons{
            z-index: 5;
            display: inline-block;
            font-size: 50px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50px;
            margin: auto;
        }

        .carousel .carousel-control-prev .material-icons {
            z-index: 5;
            display: inline-block;
            font-size: 50px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50px;
            margin: auto;
        }
        .footer p{
            margin-bottom: 0;
        }
        footer p a{
            color: #555;
            font-weight: 400;
        }

        footer p a:hover{
            color: #9f26aa;
            text-decoration: none;
        }
        .cannon{
        background-image : url({{asset('mesImages/theme/t1.jpg')}});
        height : 50vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
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
        .lecorps{
            background-color : var(--c-color2);
        }




    </style>

















    <div class="main-container lecorps ">
		<div class="pd-ltr-20">

            <div class="page-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h3 class="mb-0 bread msicons"><i class="fa fa-home msicons"></i> &ensp;Aceuil</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./livdashacceuil" style="color: rgb(0, 191, 255);">Home</a></li>
                            </ol>
                        </nav>
                    </div>

                </div>


            </div>

            <div class="card-box pd-20 height-100-p mb-30 cardt">
				<div class="row align-items-center ">
					<div class="col-md-2">
						<img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-fluid" width="200">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
                            <span ><b class="fw-bold msicons">W</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">elcome</small> <b class="fw-bold msicons">B</b><small class="fst-italic titre" style="color: var(--titre-couleur); font-family: italic;">ack</small></span>

						    <div class="weight-600 font-30 text-blue" style="color: var(--titre-couleur);">{{Auth::user()->name}} {{Auth::user()->prenom}} !</div>
						</h4>
						<p class="font-18 max-width-600" style="font-size: 20px; color: var(--color-t); font-family : 'Times New Roman', Times, serif;">Vous etes connecté en tant que {{Auth::user()->role->libelle}} !<br> Alors Mr,Mdme {{Auth::user()->name}} {{Auth::user()->prenom}} ,Par quoi commencons-nous ?</p>
					</div>
				</div>





			</div>
            <div class="pd-20 card-box   tab cardt" >
                <div class="container-fluid">
                    <div class="row">
                        {{-- <div class="col-md-12 cannon">
                            <img src="" class="img-fluid" alt="...">

                        </div> --}}
                        <div class="col-md-12 mr-auto ml-auto">

                            <!-- Carousel Card -->
                            <div class="card card-raised card-carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="{{asset('mesImages/theme/cannon.jpg')}}"
                                      alt="First slide">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <label for="">
                                            <i class=" material-icons fa fa-object-ungroup msicons" aria-hidden="true">&ensp;Allez
                                                <span class="pt-4">
                                                    On y Va !!!
                                                </span>
                                            </i>



                                            </label>
                                        </h4>
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="{{asset(Auth::user()->le_profil)}}"  alt="Second slide">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <label for="">
                                                <span class="pt-4">
                                                    Juste Moi
                                                </span>
                                                <i class=" material-icons fa fa-mouse-pointer msicons" aria-hidden="true">

                                                </i></label>
                                        </h4>
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="{{asset('mesImages/theme/t5.webp')}}" alt="Third slide">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <label for="">
                                                <i class=" material-icons fa fa-cubes msicons" aria-hidden="true">&ensp;Stay
                                                    <span class="pt-4">
                                                        Focus
                                                    </span>
                                                </i>
                                                </label>
                                        </h4>
                                      </div>
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    {{-- <i class="material-icons">keyboard_arrow_left</i> --}}
                                    <i class="material-icons fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    {{-- <i class="material-icons">keyboard_arrow_right</i> --}}
                                    <i class="material-icons fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </div>
                            <!-- End Carousel Card -->

                        </div>
                    </div>
                </div>
                <div>

                </div>

            </div>
            </div>


		</div>
	</div>


@endsection
