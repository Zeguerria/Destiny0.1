@php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
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
            --color-ti:  #e0def7c3;
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
                --color-ti:  rgb(0, 191, 255);
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Destiny :@yield('titre')</title>



<link rel="icon" type="image/x-icon" href="mesImages/Jym.png">
  <script type="text/javascript" src="{{asset('jquery/jquery.js')}}"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  @yield('header')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

         {{-- <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('mesImages/Jym.png')}}" alt="logo" height="90" width="90">
    </div> --}}

        <!-- Navbar -->
  <nav class="ligne main-header navbar navbar-expand navbar-white navbar-light bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat; filter:grayscale(20%);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars msicons"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" id="change"  title="" href="#" role="button">
                <i class="fas fa-moon msicons" id="soleil"></i>
                <i class="fas fa-sun msicons" id="lune"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profil" href="#">
                <span class="">
                    <img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-circle" width="30" height="30">
                </span>

            </a>
        </li>
            <div class=" mprofil dropdown-menu dropdown-menu-right dropdown-menu-icon-list ">
                <a class="dropdown-item" href="./profilAdmin" style="color: var(--titre-couleur); font-family: italic;"><i class="fa fa-user msicons"></i>&ensp; Profil</a>
                <a class="dropdown-item" href="./help" style="color: var(--titre-couleur); font-family: italic;"><i class="fa fa-lightbulb msicons"></i>&ensp;  Help</a>

                <form action="{{route('logout')}}" method="POST">
                    @csrf

                    <button class="dropdown-item btn" type="submit" style="color: var(--titre-couleur); font-family: italic;"><i class="fa fa-sign-out-alt msicons"></i>&ensp; Log Out</button>
                </form>

            </div>

        <li class="nav-item ">
            <a class="nav-link" data-widget="fullscreen" data-toggle="tooltip" title="Etendre l'application" href="#" role="button">
            <i class="fas fa-expand-arrows-alt msicons"></i>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  {{-- <a class="navbar-brand" href="/"><span><b>K</b><small>wanadis</small> </span><b>A</b><small>cademy</small></a> --}}
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bgmenu" style="background-image: url({{asset('mesImages/theme/t1.png')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
    <!-- Brand Logo -->
    <a href="./dashacceuil" class="brand-link">
      <img src="{{asset('mesImages/D2.png')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b><span><b>D</b><small>estiny</small></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset(Auth::user()->le_profil)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="./profilAdmin" class="msicons d-block" >{{Auth::user()->pseudo}}</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="./dashacceuil" class="nav-link">
              <i class="nav-icon fas fa-home msicons"></i>
              <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                Home
              </p>
            </a>
          </li>
          @if(in_array("1", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users msicons"></i>
                <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                    Users
                    <i class="fas fa-angle-left right msicons"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("1.1", $droits))
                        <li class="nav-item">
                            <a href="./user" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("1.2", $droits))
                        <li class="nav-item">
                            <a href="./livreur" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Livreur</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("1.3", $droits))
                        <li class="nav-item">
                            <a href="./client" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Client</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("1.4", $droits))
                        <li class="nav-item">
                            <a href="./destinataire" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Destinataire</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
            @endif
            @if(in_array("2", $droits))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon nav-icon fas fa-car msicons"></i>
                        <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                            Vehicule
                        <i class="fas fa-angle-left right msicons"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        @if(in_array("2.1", $droits))
                            <li class="nav-item">
                                <a href="./vehicule" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vehicule</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
            @if(in_array("3", $droits))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt msicons"></i>
                        <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                            Produits
                            <i class="fas fa-angle-left right msicons"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(in_array("3.1", $droits))
                            <li class="nav-item">
                                <a href="./produit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p >Produit</p>
                                </a>
                            </li>
                        @endif

                    </ul>
                </li>
            @endif
          @if(in_array("4", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-boxes msicons"></i>
                    <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                        Livraisons
                        <i class="fas fa-angle-left right msicons"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("4.1", $droits))
                        <li class="nav-item">
                            <a href="./livraison" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Livraison</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
          @endif
          @if(in_array("5", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-toolbox msicons"></i>
                    <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                        Parametrages
                        <i class="fas fa-angle-left right msicons"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("5.1", $droits))
                        <li class="nav-item">
                            <a href="./parametre" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Parametre</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("5.2", $droits))
                        <li class="nav-item">
                            <a href="./typeParametre" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Type de Parametre</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
          @endif
          @if(in_array("6", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list msicons"></i>
                    <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                        Gestions
                        <i class="fas fa-angle-left right msicons"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("6.1", $droits))
                        <li class="nav-item">
                            <a href="./habilitation" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Habilitation</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("6.2", $droits))
                        <li class="nav-item">
                            <a href="./profil" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Profil</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("6.3", $droits))
                        <li class="nav-item">
                            <a href="./profilhabilitation" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p >Profil Habilitation</p>
                            </a>
                        </li>
                    @endif

                </ul>
            </li>
          @endif
          @if(in_array("7", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-alt msicons"></i>
                    <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                        Profils
                        <i class="fas fa-angle-left right msicons"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("7.1", $droits))
                        <li class="nav-item">
                            <a href="/profilAdmin" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profil</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
          @endif
          @if(in_array("8", $droits))
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-trash msicons"></i>
                    <p style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;">
                        Corbeille
                        <i class="fas fa-angle-left right msicons"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(in_array("8.1", $droits))
                        <li class="nav-item">
                            <a href="./clientCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Client</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.2", $droits))
                        <li class="nav-item">
                            <a href="./destinataireCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Destinataire</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.10", $droits))
                        <li class="nav-item">
                            <a href="./habilitationCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Habilitation</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.3", $droits))
                        <li class="nav-item">
                            <a href="./livraisonCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Livraison</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.4", $droits))
                        <li class="nav-item">
                            <a href="./livreurCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Livreur</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.5", $droits))
                        <li class="nav-item">
                            <a href="./parametreCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Parametre</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.6", $droits))
                        <li class="nav-item">
                            <a href="./produitCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Produit</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.11", $droits))
                        <li class="nav-item">
                            <a href="./profilCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profil</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.12", $droits))
                        <li class="nav-item">
                            <a href="./profilhabilitationCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profil Habilitation</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.7", $droits))
                        <li class="nav-item">
                            <a href="./typeParametreCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Type de Parametre</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.8", $droits))
                        <li class="nav-item">
                            <a href="./userCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Users</p>
                            </a>
                        </li>
                    @endif
                    @if(in_array("8.9", $droits))
                        <li class="nav-item">
                            <a href="./vehiculeCorbeille" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Vehicule</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
          @endif
          <li class="nav-item">
            <hr>
            <li class="nav-item">
                {{-- <form action="{{route('logout')}}" method="POST">
                    <a type="submit" class=" btn nav-link">
                        <i class="nav-icon fas fa-power-off msicons"></i>
                    </a>
                </form> --}}

              </li>
            <form action="{{route('logout')}}" method="POST">@csrf
                <button type="submit" class="btn nav-link d-flex">
                    <i class="nav-icon fas fa-power-off msicons"></i>
                  </button>
              </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 76.3514%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>




   {{-- NOTIFICATION DEBUT --}}
   {{-- <div class="pl-5">
    <div class=" pb-1">
        @if(Session()->has('success'))
            <div class="alert alert-success col-md-3 pb-1">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                {{session()->get('success')}}
            </div>
        @elseif(Session()->has('modifier'))
            <div class="alert alert-warning col-md-3 pb-1">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                {{session()->get('modifier')}}
            </div>
        @elseif(Session()->has('supprimer'))
            <div class="alert alert-danger col-md-3 pb-1">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                {{session()->get('supprimer')}}
            @elseif(Session()->has('restorer'))
                <div class="alert alert-primary col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                    {{session()->get('restorer')}}
                </div>
            @elseif(Session()->has('recuperertous'))
                <div class="alert alert-primary col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                    {{session()->get('recuperertous')}}
                </div>
            @elseif(Session()->has('supprimertous'))
                <div class="alert alert-danger col-md-3 pb-1">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                    {{session()->get('supprimertous')}}
                </div>
        @endif
    </div>
   </div> --}}

{{-- NOTIFICATION DEBUT --}}
  @yield('corps')



  <footer class="main-footer bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
    <div class="conainer">
        <div class="row">

          <!--bouton mention legale fin-->
          <!--containeur icon debut-->
          <div class="col-12 col-md-3 text-md-end">

            <ul class="list-inline">
              <li class="list-inline-item">
                <a type="button" class="btn " data-toggle="modal" data-target="#staticBackdrop">
                   <span class="class" style="font-size: 20px; color: var(--color-ti); font-family : 'Times New Roman', Times, serif;"> Mention Legale</span>
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
          <div class="col-12 col-md-3 text-md-end">
            <ul class="list-inline pt-2">
              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Localisation"><i class="fas fa-map-marker-alt" style="font-size: 30px; color:#fc0707;"></i></a></li>&thinsp;&thinsp;

              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Facebook"><i class="fab fa-facebook " style="font-size: 30px; color:#3B5998;"></i></a></li>
              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="WhatsApp"><i class="fab fa-whatsapp " style="font-size: 30px; color:	#25D366;"></i></a></li>
              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="Email"><i class="fas fa-envelope " style="font-size: 30px; color:	#db4a39;"></i></a></li>
              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="TikTok"><i class="fab fa-tiktok" style="font-size: 30px; color:	#010101;"></i></a></li>
            </ul>
          </div>
          <div class="col-12 col-md-5">
            <!--bouton metion legale debut-->
            <div class="mention">
              <ul >
                  <a href="#" class="text-decoration-none " >
                    <h5 class="bold">Copyright © 2023 - <a href="#">Okawe Jeremy</a> . Tous droits réservés. <a href="#">CNPE</a></h5>
                    </a>
              </ul>
            </div>

          </div>
          <!--container icon fin-->
          <div class="col-12 col-md-1 d-flex justify-content-end">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"  data-bs-toggle="tooltip" title="home"><img src="" alt="" class="brand-image img-circle elevation-3"  width="40"></a></li>
            </ul>
          </div>
        </div>
    </div>
  </footer>
  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>


{{-- len de --}}

{{-- <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> --}}

{{-- <script src="table/jqueryT.js"></script>
<script src="table/jquerydatamin.js"></script>
<script src="table/jqueryboot.js"></script>
<script src="table/po.js"></script>
<link rel="stylesheet" href="table/boot.css">
<link rel="stylesheet" href="table/boot4.css">
<script>
    new DataTable('#example');
</script>--}}
<script>
        $('.mprofil').hide()
        $('#profil').on('click', function (){
        $(".mprofil").fadeToggle();
        });


        //

        $("#lune").toggle();
        $("#change").click(function(){

    if($("body").hasClass("dark")){
        $("body").removeClass("dark");

        $("#soleil").toggle();
        $("#lune").toggle();
        //background-image menu
        $(".bgmenu").css("background-image","url({{asset('mesImages/theme/t1.png')}})");
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
@yield('footer')

@include('sweetalert::alert')
</body>
</html>
