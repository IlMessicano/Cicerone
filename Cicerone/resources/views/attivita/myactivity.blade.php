@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="shadow p-4 m-4 bg-white">
            <h1 class="display-4">Cicerone: attività create da te</h1>

            @if(count($attivita)>0)
                @foreach($attivita as $act)
                    @if($act->user_id == auth()->user()->id)

                        <div class="card bg-light text-dark m-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <h3><a href="/attivita/{{$act->ActivityId}}">{{$act->nameActivity}}</a></h3>
                                        <small>Written on {{$act->created_at}} by {{$act->user->name}}</small>
                                        <div class="row">
                                            <div class="col-md-12 mt-3">
                                                {{$act->description}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4 mb-3 text-right">
                                        <img src="storage/activityImg/{{$act->imgActivity}}" height="150">

                                            <div class="mt-3 text-center">
                                                <a class="btn btn-primary"
                                                   href="/attivita/{{$act->ActivityId}}/edit">Modifica attività</a>
                                            </div>
                                        <div class="mt-3 text-center">
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal">
                                            Elimina attività
                                        </button>

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
                                                            {!!Form::open(['action' =>['AttivitaController@destroy', $act->ActivityId],'method' => 'POST',
                                                        'class'
                                                        => 'pull-right'])!!}
                                                            {{Form::hidden('_method','DELETE')}}
                                                            {{Form::submit('Elimina',['class' => 'btn btn-danger'])}}
                                                            {!!form::close()!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr class="featurette-divider">


                            <h4 class="ml-3">Dettagli attività:</h4>

                            <div class="row text-center">
                                <div class="col-md-2">
                                    Country: {{$act->Country}}
                                </div>
                                <div class="col-md-2">
                                    State: {{$act->State}}
                                </div>
                                <div class="col-md-2">
                                    City: {{$act->City}}
                                </div>
                                <div class="col-md-2">
                                    Post Code: {{$act->postCode}}
                                </div>
                                <div class="col-md-2">
                                    Road: {{$act->Road}}
                                </div>


                            </div>


                            <hr class="featurette-divider">
                            <div class="row text-center">
                                <div class="col-md-6 my-3">
                                    <a class="btn btn-primary "
                                       href="attivita/{{$act->ActivityId}}/showplans">Gestisci pianificazioni</a>
                                </div>
                                <div class="col-md-6 my-3">
                                    <a class="btn btn-primary "
                                       href="activityplannings/create/{{$act->ActivityId}}">Crea una nuova
                                        pianificazione</a>
                                </div>
                            </div>
                        </div>




                    @endif
                @endforeach
            @else
                <div class="card bg-light text-dark m-3">
                    <div class="card-body text-center">
                        <h4>No activity found</h4>
                    </div>
                </div>
            @endif

        </div>


        <div class="shadow p-4 m-4 bg-white">
            <h1 class="display-4">Globetrotter: attività a cui sei iscritto</h1>

            @if(count($user->enrollments) > 0)
                @foreach($user->enrollments as $enroll)


                    <div class="card bg-light text-dark m-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h3>
                                        <a href="/attivita/{{$enroll->plan->activity->ActivityId}}">{{$enroll->plan->activity->nameActivity}}</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mb-1">
                                    <label for="state">Data inizio:</label><br>
                                    <label class="">

                                        {{$enroll->plan->startDate}}

                                    </label>


                                </div>

                                <div class="col-md-3 mb-1">
                                    <label for="state">Data fine:</label><br>
                                    <label class="">

                                        {{$enroll->plan->stopDate}}

                                    </label>

                                </div>

                                <div class="col-md-3 mb-1">
                                    <label for="state">Note:</label><br>
                                    <label class="">
                                        @if(is_null($enroll->plan->notes))
                                            Nessuna nota presente
                                        @else
                                            {{$enroll->plan->notes}}
                                        @endif
                                    </label>
                                </div>

                                <div class="col-md-3 mb-1">
                                    <label for="state">Costo:</label><br>
                                    <label class="">
                                        @if(is_null($enroll->plan->cost))
                                            0
                                        @else
                                            {{$enroll->plan->cost}}
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="row text-right">
                                <div class="col my-2">
                                    {!!Form::open(['action' =>['ActivityEnrollmentsController@destroy', $enroll->id],'method' => 'POST',
    'class'
    => 'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Annulla prenotazione',['class' => 'btn btn-danger'])}}
                                    {!!form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <div class="h4 text-center m-4">
                    Non sei iscritto a nessuna attività
                </div>

            @endif
        </div>
    </div>

@endsection
