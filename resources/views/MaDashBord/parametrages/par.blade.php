 <!--  Consultation-->
 {{-- <div class="modal fade" id="consulter{{$value->id}}">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-headerbgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter le Parametre : {{$value->libelle}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: var(--c-color2);">
                <form>
                    @csrf
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i> &ensp;Code :</label>
                                    <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                    <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                    <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-cog msicons" aria-hidden="true"></i>&ensp;Type de parametres</label>
                                    <select class="form-control" id="typeparametre"  disabled name="type_parametre_id">
                                        @foreach ($type_parametres as $key => $value)
                                        <option value="{{$value->id}}" {{('$value->libelle')?"selected":""}}>{{$value->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>

                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div> --}}

<!--  Consultation-->
{{-- <div class="modal fade" id="consulter{{$value->id}}">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-headerbgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter le Parametre : {{$value->libelle}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: var(--c-color2);">
                <form>
                    @csrf
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i> &ensp;Code :</label>
                                    <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                    <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                    <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-cog msicons" aria-hidden="true"></i>&ensp;Type de parametres</label>
                                    <select class="form-control" id="typeparametre"  disabled name="type_parametre_id">
                                        @foreach ($type_parametres as $key => $value)
                                        <option value="{{$value->id}}" {{('$value->libelle')?"selected":""}}>{{$value->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>

                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div> --}}
<!-- corbeille-->
{{-- <div class="modal fade" id="corbeille{{$value->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer le Parametre : {{$value->libelle}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: var(--c-color2);">
                <form method="post" action="{{route('corbeilleParametre')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i> &ensp;Code </label>
                                    <input type="text" class="form-control" value="{{$value->code}}" readonly id="" name="code" placeholder="Entrer la code">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                    <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="" name="libelle" placeholder="Entrer le libellé">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                    <input type="text" class="form-control" value="{{$value->description}}" readonly id="description" name="description" placeholder="Entrer la description">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-cog msicons" aria-hidden="true"></i>&ensp;Type de parametres</label>
                                    <select class="form-control" id="typeparametre"  disabled name="type_parametre_id">
                                        @foreach ($type_parametres as $key => $value)
                                        <option value="{{$value->id}}" {{('$value->libelle')?"selected":""}}>{{$value->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                        <button type="submit" class="btn btn-danger"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!-- supprimer-->
{{-- <div class="modal fade" id="supprimer{{$value->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-black">
                <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer le Parametre : {{$value->libelle}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: var(--c-color2);">
                <form method="post" action="{{route('supprimerParametre')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$value->id}}">
                        <!--corp du formulaire debut-->
                        <div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="supprimer{{$value->id}}"><i class="fa fa-code msicons" aria-hidden="true"></i> &ensp;Code </label>
                                            <input type="text" class="form-control" readonly value="{{$value->code}}" id="suprimer{{$value->id}}" name="code" placeholder="Entrer le code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                            <input type="text" class="form-control" readonly value="{{$value->libelle}}" id="suprimer{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Description</label>
                                            <input type="text" class="form-control" readonly value="{{$value->description}}" id="suprimer{{$value->id}}" name="description" placeholder="Entrer la description">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-cog msicons" aria-hidden="true"></i>&ensp;Type de parametres</label>
                                            <select class="form-control" id="typeparametre"  disabled name="type_parametre_id">
                                                @foreach ($type_parametres as $key => $value)
                                                <option value="{{$value->id}}" {{('$value->libelle')?"selected":""}}>{{$value->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                        </div>
                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                            <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                            <button type="submit" class="btn bg-black"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et Fermer</button>

                        </div>
                </form>
            </div>

        </div>
    </div>
</div> --}}
