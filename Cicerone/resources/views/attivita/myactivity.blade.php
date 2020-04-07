@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="shadow p-4 m-4 bg-white">
            <h1 class="display-4">Attività da Cicerone</h1>

            @if(count($attivita)>0)
                @foreach($attivita as $act)
                    @if($act->user_id == auth()->user()->id)

                        <div class="card bg-light text-dark m-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <h3><a href="/attivita/{{$act->ActivityId}}">{{$act->nameActivity}}</a></h3>
                                        <small>Written on {{$act->created_at}} by {{$act->user->name}}</small>
                                    </div>

                                    <div class="col-md-4 mb-3 text-right">
                                        <img src="storage/activityImg/{{$act->imgActivity}}" height="150">
                                    </div>
                                </div>
                                <a class="btn btn-primary btn-lg btn-block"
                                   href="attivita/{{$act->ActivityId}}/showplans">Gestisci pianificazioni</a>

                                <a class="btn btn-primary btn-lg btn-block"
                                   href="activityplannings/create/{{$act->ActivityId}}">Crea una nuova
                                    pianificazioni</a>
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
