@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="shadow p-4 m-4 bg-white">
            <h1 class="display-4">Pianificazioni per {{$attivita->nameActivity}} </h1>
            <a class="btn btn-primary btn-lg btn-block"
               href="http://127.0.0.1:8000/activityplannings/create/{{$attivita->ActivityId}}">Crea una nuova pianificazione</a>
            @if(count($plans)>0)
                @foreach($plans as $plan)
                    @if($plan->activity_id == $attivita->ActivityId)


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
                                        @if(is_null($plan->stopDate))
                                            Non definita
                                        @else
                                            {{$plan->stopDate}}
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
                                    <a class="btn btn-primary btn-lg btn-block"
                                       href="http://127.0.0.1:8000/activityplannings/{{$plan->planningId}}/edit">Modifica</a>
                                </div>


                            </div>

                            <div class="form-group row col-md-12 text-center">

                                <div class="col-md-3 mb-1">
                                    <label for="state">Costo:</label><br>
                                    <label class="">
                                        @if(is_null($plan->Cost))
                                            Non definito
                                        @else
                                            {{$plan->Cost}}
                                        @endif</label>


                                </div>

                                <div class="col-md-3 mb-1">
                                    <label for="state">Numero massimo partecipanti:</label><br>
                                    <label class="">
                                        @if(is_null($plan->maxPartecipants))
                                            Non definito
                                        @else
                                            {{$plan->maxPartecipants}}
                                        @endif</label>
                                </div>

                                <div class="col-md-3 mb-1">
                                    <label for="state">Numero partecipanti attuali:</label><br>
                                    <label class="">
                                        @if(is_null($plan->numPartecipants))
                                            0
                                        @else
                                            {{$plan->numPartecipants}}
                                        @endif
                                    </label>

                                </div>

                                <div class="col-md-3 mb-1">
                                    <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Elimina
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>

                    @endif
                @endforeach
            @else
                <div class="card bg-light text-dark m-3">
                    <div class="card-body text-center">
                        <h4>Nessuna pianificazione trovata</h4>
                    </div>
                </div>
            @endif

        </div>
    </div>













    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di voler cancellare questa pianificazione?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ATTENZIONE! L'operazione sarà irreversibile <br>
                    Se vuoi cancellare questa pianificazione clicca su Elimina.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    {!!Form::open(['action' =>['ActivityPlanningsController@destroy', $plan->planningId],'method' => 'POST',
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
