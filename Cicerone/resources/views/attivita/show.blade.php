@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="mt-4">


            <div class="row">


                <div class="col-md-8 mb-4">


                    <div class="card mb-4">

                        <img src="/img/thumbsUp.png" class="img-fluid" alt="">

                    </div>


                    <div class="card mb-4">


                        <div class="card-body">

                            <p class="h2 my-4">{{$attivita->nameActivity}} </p>
                            <small>Creata da {{$attivita->user->name}}</small>


                            <blockquote class="blockquote">
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

                            <p class="h5 my-4">Descrizione attività </p>

                            <p> {{$attivita->description}}</p>

                        </div>

                    </div>

                    <div class="card mb-4">

                        <a class="btn btn-primary" href="">Prenota questa attività</a>

                    </div>


                </div>


                <div class="col-md-4 mb-4">
                    <div class="card mb-4 text-center">

                        <div class="card-header">Dettagli Cicerone
                        </div>


                        <div class="card-body">


                            <label  class="grey-text">{{$attivita->user->name}}  {{$attivita->user->surname}}</label>


                            <br>


                            <label  class="grey-text">Voti positivi: {{$attivita->user->upVote}} Voti negativi: {{$attivita->user->downVote}}</label>


                            <div class="text-center mt-4">

                            </div>


                        </div>

                    </div>

                    <div class="card mb-4 ">

                        <div class="card-header">Non hai ancora effettuato l'accesso.<br> Accedi per prenotare questa
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

                    </div>


                    <div class="card mb-4">

                        <div class="card-header">Attività simili in NOMEPAESE</div>


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
@endsection
