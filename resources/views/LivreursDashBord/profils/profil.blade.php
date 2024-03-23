





@extends('LivreursDashBord.livMenuDashBord')
@section('titre')
    Profil
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
        .lecorps{
            background-color : var(--c-color2);
        }
        td{
        font-size: 18px;
        color: var(--color-t);
        font-family : 'Times New Roman', Times, serif;
        }

    </style>






    <div class="main-container lecorps" style="min-height: 1000px;">
        <div class="page-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="row ">
                <div class="col-md-12 col-sm-12 ">
                    <div class="title">
                        <h3 class="mb-0 bread msicons"><i class="fa fa fa-lock msicons"></i> &ensp;Profile</h3>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./livdashacceuil" style="color: rgb(0, 191, 255);">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" style="color: var( --h4-colorl1);">Profile</a></li>
                        </ol>
                    </nav>
                </div>

            </div>


        </div>
		<div class="min-height-200px">

            <div class="row">
                {{-- NOTIFICATION DEBUT --}}
                    {{-- <div class="d-flex nav justify-content-end pb-1">
                        @if(Session()->has('success'))
                            <div class="alert alert-success text-center col-md-2 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('success')}}
                            </div>
                        @elseif(Session()->has('modifier'))
                            <div class="alert alert-warning col-md-2 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('modifier')}}
                            </div>
                        @elseif(Session()->has('supprimer'))
                            <div class="alert alert-danger col-md-2 pb-1">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                {{session()->get('supprimer')}}
                            @elseif(Session()->has('restorer'))
                                <div class="alert alert-primary col-md-3 pb-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                    {{session()->get('restorer')}}
                                </div>
                            @elseif(Session()->has('recuperertous'))
                                <div class="alert alert-primary col-md-2 pb-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                    {{session()->get('recuperertous')}}
                                </div>
                            @elseif(Session()->has('supprimertous'))
                                <div class="alert alert-danger col-md-2 pb-1">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-exclamation-triangle"></i></button>
                                    {{session()->get('supprimertous')}}
                                </div>
                        @endif
                    </div> --}}
                {{-- NOTIFICATION DEBUT --}}
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p cardt">

                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil msicons"></i></a>
                            <img src="{{asset(Auth::user()->le_profil)}}" alt="" class="img img-fluid">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="{{asset(Auth::user()->le_profil)}}" alt="Picture">

                                                @foreach($users as $key => $value)
                                                <form method="post" action="{{route('modifierUser')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                        <!--corp du formulaire debut-->
                                                        <div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">

                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="d-flex"><i class="fa fa-camera-retro"></i>&ensp;Photo</label>
                                                                            <input type="file" class="form-control" id="" name="photo" placeholder="Entrer la photo">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i>&ensp;Modifier et Fermer</button>
                                                        </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <h5 class="text-center h5 mb-0">{{Auth::user()->name}} {{Auth::user()->prenom}}</h5>
                        <p class="text-center text-muted font-14">{{Auth::user()->pseudo}}</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue text-center">Information Du Livreur</h5>
                            <ul>
                                <li>
                                    <span style="color: var(--color-t)"><i class="icon-copy fi-mail"></i>&ensp;Email Address :</span>
                                    {{Auth::user()->email}}
                                </li>
                                {{-- <li>
                                    <span style="color: var(--color-t)">Numero de Telephone :{{Auth::user()->livreur->phone}}</span>
                                    {{$livreurs->user()->domicile}}
                                </li> --}}

                                {{-- <li>
                                    <span>Domicile :</span>
                                    1807 Holden Street<br>
                                    San Diego, CA 92115
                                </li> --}}
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30 cardt">
                    <div class="card-box height-100-p overflow-hidden cardt">
                        <div class="profile-tab height-100-p cardt">
                            <div class="tab height-100-p ">
                                <ul class="nav nav-tabs customtab " role="tablist">
                                    {{-- <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab" aria-selected="true">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a>
                                    </li> --}}
                                    <li class="nav-item ">
                                        <a class="nav-link " data-toggle="tab" href="#setting" role="tab" aria-selected="false">Operateur</a>
                                    </li>
                                </ul>
                                <div class="tab-content cardt">
                                    <div class="p-4">
                                    <h4 class="pb-4 text-center">Je suis un livreur donc un agent multifonctionnel sur le terrain et en tant que livreur je me doit de toujours :</h4>
                                    <span class="pt-2" style="font-size: 15px; color: var(--color-t);">

                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp; gérer Mon trajet. <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;M’assurer que toutes les marchandises à livrer soient complètes et accompagnées de tous les documents nécessaires. <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Contacter les clients pour les informer de la livraison ou encore confirmer l’emplacement de la marchandise. <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Conduire le véhicule de livraison et respecter le Code de la route. <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Maintenir le véhicule de livraison et signaler à Mon supérieur toute détérioration.
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Assurer le déplacement des marchandises de son véhicule à l’emplacement de livraison. <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;M’assurer avec le client de la conformité de la marchandise livrée (comptage et bon état). <br>
                                        <i class="fa fa-arrow-right msicons" aria-hidden="true"></i>&ensp;Faire un rapport à mon supérieur de toute non-conformité signalée par le client.
                                    </span>

                                    </div>
                                    <!-- Timeline Tab start -->
                                    {{-- <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="profile-timeline">
                                                <div class="timeline-month">
                                                    <h5>August, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 Aug</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 Aug</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="timeline-month">
                                                    <h5>July, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 July</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 July</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="timeline-month">
                                                    <h5>June, 2020</h5>
                                                </div>
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <li>
                                                            <div class="date">12 June</div>
                                                            <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 June</div>
                                                            <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                        <li>
                                                            <div class="date">10 June</div>
                                                            <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                            <div class="task-time">09:30 am</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Timeline Tab End -->
                                    <!-- Tasks Tab start -->
                                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                            <div class="container pd-0">
                                                <!-- Open Task start -->
                                                <div class="task-title row align-items-center">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Open Tasks (4 Left)</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
                                                    </div>
                                                </div>
                                                <div class="profile-task-list pb-30">
                                                    <ul>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-1">
                                                                <label class="custom-control-label" for="task-1"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-2">
                                                                <label class="custom-control-label" for="task-2"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-3">
                                                                <label class="custom-control-label" for="task-3"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-4">
                                                                <label class="custom-control-label" for="task-4"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2019</span></div></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Open Task End -->
                                                <!-- Close Task start -->
                                                <div class="task-title row align-items-center">
                                                    <div class="col-md-12 col-sm-12">
                                                        <h5>Closed Tasks</h5>
                                                    </div>
                                                </div>
                                                <div class="profile-task-list close-tasks">
                                                    <ul>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-1" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-1"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-2" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-2"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-3" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-3"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox mb-5">
                                                                <input type="checkbox" class="custom-control-input" id="task-close-4" checked="" disabled="">
                                                                <label class="custom-control-label" for="task-close-4"></label>
                                                            </div>
                                                            <div class="task-type">Email</div>
                                                            Lorem ipsum dolor sit amet. Id ea earum.
                                                            <div class="task-assign">Assigned to Ferdinand M. <div class="due-date">due date <span>22 February 2018</span></div></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Close Task start -->
                                                <!-- add task popup start -->
                                                <div class="modal fade customscroll mCustomScrollbar _mCS_4 mCS_no_scrollbar" id="task-add" tabindex="-1" role="dialog" style=""><div id="mCSB_4" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Tasks Add</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body pd-0">
                                                                <div class="task-list-form">
                                                                    <ul>
                                                                        <li>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Type</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Message</label>
                                                                                    <div class="col-md-8">
                                                                                        <textarea class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Assigned to</label>
                                                                                    <div class="col-md-8">
                                                                                        <div class="dropdown bootstrap-select show-tick form-control"><select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text="{0} people selected" tabindex="-98">
                                                                                            <option>Ferdinand M.</option>
                                                                                            <option>Don H. Rabon</option>
                                                                                            <option>Ann P. Harris</option>
                                                                                            <option>Katie D. Verdin</option>
                                                                                            <option>Christopher S. Fulghum</option>
                                                                                            <option>Matthew C. Porter</option>
                                                                                        </select><button type="button" class="btn dropdown-toggle btn-outline-primary bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Not Chosen"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Not Chosen</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-0">
                                                                                    <label class="col-md-4">Due Date</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control date-picker">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" class="remove-task" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove Task"><i class="ion-minus-circled"></i></a>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Type</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Task Message</label>
                                                                                    <div class="col-md-8">
                                                                                        <textarea class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4">Assigned to</label>
                                                                                    <div class="col-md-8">
                                                                                        <div class="dropdown bootstrap-select show-tick form-control"><select class="selectpicker form-control" data-style="btn-outline-primary" title="Not Chosen" multiple="" data-selected-text-format="count" data-count-selected-text="{0} people selected" tabindex="-98">
                                                                                            <option>Ferdinand M.</option>
                                                                                            <option>Don H. Rabon</option>
                                                                                            <option>Ann P. Harris</option>
                                                                                            <option>Katie D. Verdin</option>
                                                                                            <option>Christopher S. Fulghum</option>
                                                                                            <option>Matthew C. Porter</option>
                                                                                        </select><button type="button" class="btn dropdown-toggle btn-outline-primary bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Not Chosen"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Not Chosen</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-0">
                                                                                    <label class="col-md-4">Due Date</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control date-picker">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="add-more-task">
                                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add Task"><i class="ion-plus-circled"></i> Add More Task</a>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary">Add</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                                                <!-- add task popup End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-10">
                                                        <h4 class="text-blue h5 mb-20 text-center" >Envoyer un Mail</h4>
                                                        <div class="form-group">
                                                            <label style=" color: var(--color-t);">Votre Mail</label>
                                                            <input value="{{Auth::user()->email}}" readonly class="form-control form-control-lg" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label style=" color: var(--color-t);">Motif</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>

                                                        <div class="form-group">
                                                            <label style=" color: var(--color-t);">Message :</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>

                                                    </li>
                                                    <li class="weight-500 col-md-2 ">
                                                        <h4 class="text-blue h5 mb-20 pb-4">Autres</h4>

                                                        <div class="form-group ">

                                                            <a href="#" class="btn bg-success"><i class="icon-copy fi-telephone"></i></a>
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="#" class="btn bg-success"><i class="icon-copy fi-telephone"></i></a>
                                                        </div>


                                                    </li>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn btn-primary" type="submit">Send</button>

                                                    </div>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







		</div>
	</div>


@endsection
