<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Destiny-@yield('titre')</title>
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
               --side-nav: #242526;
               --text-color: #ccc;
               --text-color2: red;
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


       </style>

	<!-- Site favicon -->
    {{-- <script type="text/javascript" src="jquery/jquery.js"></script> --}}

	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('mesImages/Jym.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('mesImages/Jym.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('mesImages/Jym.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="text/javascript" src="{{asset('jquery/jquery.js')}}"></script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('livreurs/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('livreurs/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('livreurs/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('livreurs/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('livreurs/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
    @yield('header')

</head>
<body>
        {{-- <div class="pre-loader">
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
        </div> --}}


        <div class="header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat; filter:grayscale(20%);">
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>
                <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
                <div class="header-search">
                    <form role="searchLivL" action="{{url('/searchLivraison')}}">
                        <div class="form-group mb-0">
                            <i class="dw dw-search2 search-icon"></i>
                            <input type="text" name="cherche" class="form-control search-input" placeholder="Chercher une livraison" >

                        </div>
                    </form>
                </div>
            </div>
            <div class="header-right">
                <div class="user-notification">
                    <div class="dropdown show"><i class=""></i><i class=""></i>
                        <a class="dropdown-toggle no-arrow" id="change" href="#" role="button" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-sun-o msicons" id="soleil"></i>
                            <i class="fa fa-moon-o msicons" id="lune"></i>
                        </a>
                    </div>
                </div>
                <div class="user-info-dropdown">


                    <div class="dropdown">


                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">

                                <span class="user-icon " style="background-image: url({{asset(Auth::user()->le_profil)}}) ;  background-size: cover; background-repeat: no-repeat; filter:grayscale(20%);">
                                </span>
                                <span class="user-name " style="color: var( --h4-colorl1);">{{Auth::user()->name}} {{Auth::user()->prenom}}</span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="./profilLivreur"><i class="dw dw-user1"></i> Profile</a>
                            <a class="dropdown-item" href="./aideUtLivreur"><i class="dw dw-help"></i> Help</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="btn dropdown-item" type="submit" ><i class="dw dw-logout"></i> Log Out</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <a href="/tableau-de-bord.ks" class="brand-link">
            <img src="{{asset('mesImages/D2.png')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><b><span><b>D</b><small>estiny</small></b></span>
          </a> --}}

        <div class="left-side-bar bgmenu" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="{{asset('mesImages/Jym.png')}}" alt="" class="dark-logo" height="60" width="60">
                    <img src="{{asset('mesImages/Jym.png')}}" alt="" class="light-logo" height="60" width="60">&ensp;
                    <span class="brand-text font-weight-light"><b><span><b>D</b><small>estiny</small></b></span>
                </a>

                <div class="dropdown-divider"></div>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li>
                            <a href="./livdashacceuil" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-pin-2"></span><span class="mtext">Mes Livraisons</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="./livraisonLivreur">Livraison</a></li>
                                {{-- <li><a href="advanced-components.html">Advanced Components</a></li> --}}

                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="datatable.html">DataTables</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <div class="sidebar-small-cap">Autres</div>
                        </li>
                        <li>
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-invoice"></span><span class="mtext">Plus</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="./profilLivreur">Mon Profil</a></li>
                                <li><a href="./modeUtLivreur">Mode d'utilisation</a></li>
                                <li><a href="./aideUtLivreur">Help</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-paper-plane1"></span>
                                <span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay" ></div>
    @yield('corps')

	<div class="main-container lecorps" >

		<div class="pb-1 ">


			<div class="footer-wrap fixed-bottom fixed-bottom pd-20 mb-20 card-box bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="conainer">
                    <div class="row">

                      <!--bouton mention legale fin-->
                      <!--containeur icon debut-->
                      <div class="col-12 col-md-3 text-md-end">

                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a type="button" class="btn " data-toggle="modal" data-target="#staticBackdrop" style="text-decoration:none;">
                               <span class="clas"> Mention Legale</span>
                              </a>
                          </li>
                          <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                        <h4 class="modal-title"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Mention Légale</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <section>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-flex justify-content-center pb-1">
                                                                    <h5 >En vigeur Aux Utilisateur</h5>

                                                                </div>
                                                                <div>
                                                                    <p>Conforment aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l"economie numérique, dite L.C.E.N, il est porté a la connaissance des utilisateurs et visiteurs de Destiny les présentes mentions légales. </p>
                                                                    <p>La connexion et la navigation sur Destiny par l'utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.</p>
                                                                    <p>Ces derniere sont accessibles sur le site rubrique <a href="#">Mention legale</a>.</p>
                                                                    <div class="d-flex justify-content-start ">
                                                                        <h5 pb-1 >Article 1</h5>
                                                                    </div>
                                                                    <p>l'utilisateur {{Auth::user()->name}} {{Auth::user()->prenom}}.</p>
                                                                        <p>Destiny Assure a {{Auth::user()->name}} {{Auth::user()->prenom}} la collecte et un traitement d'informations personnelles dans le respect de la vie privée conforment a la <a href="#">loi n°78-17</a> du 6 janvier 1978 relative a l'information, aux fichiers et aux libertés.</p>
                                                                        <p>En vertu de la loi informatique et Libertés, en date du 6 janvier 1978, l'utilisateur {{Auth::user()->name}} {{Auth::user()->prenom}} dispose d'un droit d'acces, de redaction, de suppression et d'opposition de ses données personnelles. L'utilisateur {{Auth::user()->name}} {{Auth::user()->prenom}} exerce ce droit : </p>
                                                                        <p>Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie de l'application, sans autorisation du developper <a href="#">Okawe Jeremy</a> est prohibée et pourra entrainée des actions de poursuites judiciaires telles que notament prévues par le Code de la propriété intellectuelle et le Code Civil. </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                         </div>


                                    </div>
                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                        <button type="submit" class="btn btn-primary"><i class="far fa-thumbs-up"></i>&ensp;Enregistrer</button>

                                    </div>
                                </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                      <div class="col-12 col-md-2 text-md-end">
                        <ul class="list-inline pt-2">
                          <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Localisation"><i class="fas fa-map-marker-alt" style="font-size: 30px; color:#fc0707;"></i></a></li>&thinsp;&thinsp;

                          <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Facebook"><i class="fa fa-facebook " style="font-size: 30px; color:#3B5998;"></i></a></li>
                          <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="WhatsApp"><i class="fa fa-whatsapp " style="font-size: 30px; color:	#25D366;"></i></a></li>
                          <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Email"><i class="fa fa-envelope " style="font-size: 30px; color:	#db4a39;"></i></a></li>
                        </ul>
                      </div>
                      <div class="col-12 col-md-7">
                        <!--bouton metion legale debut-->
                        <div class="mention">
                          <ul >
                              <a href="#" class="text-decoration-none " >
                                <h5 class="bold">Copyright © 2023 - <a href="#">Okawe Jeremy</a> . Tous droits réservés. <a href="#">CNPE</a></h5>
                                </a>
                          </ul>
                        </div>

                      </div>

                    </div>
                </div>
			</div>

		</div>
	</div>

	<!-- js -->
	<script src="{{asset('livreurs/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('livreurs/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('livreurs/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('livreurs/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('livreurs/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('livreurs/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('livreurs/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('livreurs/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('livreurs/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('livreurs/vendors/scripts/dashboard.js')}}"></script>
    @include('sweetalert::alert')

    <script>


        $("#lune").toggle();
        $("#change").click(function(){

    if($("body").hasClass("dark")){
        $("body").removeClass("dark");

        $("#soleil").toggle();
        $("#lune").toggle();
        //background-image menu
        $(".bgmenu").css("background-image","url({{asset('mesImages/theme/t1.jpg')}})");
         //background-image nav
         $(".bgnav").css("background-image","url({{asset('mesImages/theme/t1.jpg')}})");
    }else{
        $("body").addClass("dark");
        $("#lune").toggle();
        $("#soleil").toggle();
        //background-image menu
        $(".bgmenu").css("background-image","url({{asset('mesImages/theme/t4.jpg')}})");
         //background-image nav
         $(".bgnav").css("background-image","url({{asset('mesImages/theme/t4.jpg')}})");


    }
    });
</script>
</body>
</html>
