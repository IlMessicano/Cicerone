@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="mt-4">


            <div class="row">


                <div class="col-md-8 mb-4">


                    <div class="card mb-4">

                        <img src="/storage/activityImg/{{$attivita->imgActivity}}" class="img-fluid" alt="">

                    </div>


                    <div class="card mb-4">


                        <div class="card-body">

                            <p class="h2 mt-4 mb-0">{{$attivita->nameActivity}} </p>
                            <small class="mt-0">Creata da {{$attivita->user->name}} il {{$attivita->created_at}}</small>
                            <hr class="featurette-divider">
                            <blockquote class="blockquote text-center">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <p class="mb-0">Voti positivi: {{$attivita->upVote}}</p>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <p class="mb-0">Voti negativi: {{$attivita->downVote}}</p>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <p class="mb-0">Costo: </p>
                                    </div>
                                </div>
                            </blockquote>
                            <hr class="featurette-divider">
                            <p class="h5 mt-4 mb-2">Descrizione attività </p>
                            <p> {{$attivita->description}}</p>

                            <hr class="featurette-divider">
                            <div class="form-group row col-md-12 text-center">

                                <div class="col-md-4 mb-3">
                                    <label for="state">Stato:</label><br>
                                    <label class="">{{$attivita->Country}}</label>


                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="state">Regione:</label><br>
                                    <label class="">{{$attivita->State}}</label>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="state">Città:</label><br>
                                    <label class="">{{$attivita->City}}</label>
                                </div>


                            </div>

                            <div class="form-group row col-md-12 text-center">

                                <div class="col-md-4 mb-3">
                                    <label for="state">CAP:</label><br>
                                    <label class="">{{$attivita->postCode}}</label>


                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="state">Via:</label><br>
                                    <label class="">{{$attivita->Road}}</label>
                                </div>

                                <div class="col-md-4 mb-3">

                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">


                        @foreach($attivita->planning as $plan)

                            <div class="card bg-light text-dark m-3">
                                <div class="card-body">
                                    <div class="form-group row col-md-12 text-center">

                                        <div class="col-md-3 mb-1">
                                            <label for="state">Data inizio:</label><br>
                                            <label class="">
                                                @if(is_null($plan->startDate))
                                                    Non definita
                                                @else
                                                    {{$plan->startDate}}
                                                @endif
                                            </label>


                                        </div>

                                        <div class="col-md-3 mb-1">
                                            <label for="state">Data fine:</label><br>
                                            <label class="">
                                                @if(is_null($plan->startDate))
                                                    Non definita
                                                @else
                                                    {{$plan->startDate}}
                                                @endif
                                            </label>

                                        </div>

                                        <div class="col-md-3 mb-1">
                                            <label for="state">Note:</label><br>
                                            <label class="">
                                                @if(is_null($plan->notes))
                                                    Nessuna nota presente
                                                @else
                                                    {{$plan->notes}}
                                                @endif
                                            </label>

                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <a class="btn btn-primary" href="">Prenota questa attività</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>


                </div>


                <div class="col-md-4 mb-4">
                    <div class="card mb-4 text-center">

                        <div class="card-header">Dettagli Cicerone
                        </div>

                        <img src="/storage/profileImg/{{$attivita->user->imgProfile}}"
                             class="rounded-circle my-5" id="profileImg">
                        <div class="card-body">


                            <label class="grey-text">{{$attivita->user->name}}  {{$attivita->user->surname}}</label>

                            <br>

                            <label class="grey-text">Voti positivi: {{$attivita->user->upVote}} Voti
                                negativi: {{$attivita->user->downVote}}</label>


                            <div class="text-center mt-4">

                            </div>


                        </div>

                    </div>

                    <div class="card mb-4 ">
                        @if(Auth::guest())
                            <div class="card-header">Non hai ancora effettuato l'accesso.<br> Accedi per prenotare
                                questa
                                attività.
                            </div>
                            <div class="card-body">
                                <form>
                                    <label for="email" class="grey-text">E-mail</label>
                                    <input type="email" id="email" class="form-control">
                                    <br>
                                    <label for="password" class="grey-text">Password</label>
                                    <input type="text" id="password" class="form-control">
                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md" type="submit">Sign up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @endif

                        @if(Auth::user()->id == $attivita->user_id)
                            <div class="card-header">Pannello di controllo attività
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary btn-lg btn-block"
                                   href="/attivita/{{$attivita->ActivityId}}/edit">Modifica attività</a>
                                <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Elimina attività
                                </button>
                            </div>
                        @endif


                    </div>


                    <div class="card mb-4">

                        <div class="card-header">Attività simili in {{$attivita->City}}</div>


                        <div class="card-body">

                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="d-flex mr-3"
                                         src="/img/thumbsDown.png"
                                         alt="Generic placeholder image" height="100">
                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">TITOLO</h5>
                                        </a>
                                        Descrizione
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


            </div>


        </section>
    </div>








    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di voler cancellare questa attività?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ATTENZIONE! L'operazione sarà irreversibile <br>
                    Se vuoi cancellare questa attività clicca su Elimina.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    {!!Form::open(['action' =>['AttivitaController@destroy', $attivita->ActivityId],'method' => 'POST',
                'class'
                => 'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Elimina',['class' => 'btn btn-danger'])}}
                    {!!form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
