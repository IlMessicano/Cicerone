@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="mt-4">


            <div class="row">


                <div class="col-md-8 mb-4">


                    <div class="card mb-4">
@if($attivita->imgActivity == 'defaultActivity.jpeg')
                            <img src="/img/defaultActivity.jpeg" class="img-fluid" alt="">
    @else
                            <img src="/storage/activityImg/{{$attivita->imgActivity}}" class="img-fluid" alt="">
    @endif


                    </div>


                    <div class="card mb-4">


                        <div class="card-body">

                            <p class="h2 mt-4 mb-0">{{$attivita->nameActivity}} </p>
                            <small class="mt-0">Creata da {{$attivita->user->name}} il {{$attivita->created_at}}</small>
                            <hr class="featurette-divider">
                            <blockquote class="blockquote text-center">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <p class="mb-0">Voti positivi: {{$attivita->upVote}}</p>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <p class="mb-0">Voti negativi: {{$attivita->downVote}}</p>
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
                                    <label for="state">Lingue parlate:</label><br>
                                    <label class="">@foreach($attivita->languages as $lang)
                                    {{$lang->Language}},
                                        @endforeach</label>
                                </div>


                            </div>

                        </div>
                    </div>




                        @foreach($attivita->planning as $plan)
                            @if(!is_null($plan->startDate))
                                @if($plan->stopDate > Carbon\Carbon::now())
                                <div class="card mb-4">
                                    <div class="card bg-light text-dark m-3">
                                        <div class="card-body">
                                            <div class="form-group row col-md-12 text-center">

                                                <div class="col-md-3 mb-1">
                                                    <label for="state">Data inizio:</label><br>
                                                    <label class="">
                                                        {{$plan->startDate}}

                                                    </label>


                                                </div>

                                                <div class="col-md-3 mb-1">
                                                    <label for="state">Data fine:</label><br>
                                                    <label class="">
                                                        {{$plan->stopDate}}

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
                                                    <label for="costo">Costo:</label><br>
                                                    <label class="">

                                                        {{$plan->cost}}

                                                    </label>
                                                </div>

                                                <div class="col text-right">

                                                    @php
                                                        $found = false;
                                                    @endphp

                                                    @auth
                                                        @if(Auth::user()->id != $attivita->user_id )

                                                            <div
                                                                class="invisible">{{$enroll =\App\Activity_Enrollments::where('User',Auth::user()->id)->where('PlanningId',$plan->planningId)->value('id') }}</div>
                                                            @if((\App\Activity_Enrollments::where('User',Auth::user()->id)->where('PlanningId',$plan->planningId)->exists()))

                                                                {!!Form::open(['action' =>['ActivityEnrollmentsController@destroy', $enroll],'method' => 'POST','class'=> 'pull-right'])!!}
                                                                {{Form::hidden('_method','DELETE')}}
                                                                {{Form::submit('Annulla prenotazione',['class' => 'btn btn-danger'])}}
                                                                {!!form::close()!!}

                                                            @else





                                                                <button type="button" class="btn btn-primary "
                                                                        data-toggle="modal"
                                                                        data-target="#alertPrenotazione{{$plan->planningId}}">
                                                                    Prenota questa attività
                                                                </button>


                                                                <div class="modal fade"
                                                                     id="alertPrenotazione{{$plan->planningId}}"
                                                                     tabindex="-1"
                                                                     role="dialog" aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    Attenzione!</h5>
                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Stai per prenotare questa attività. Ciò
                                                                                comporta che ti sarà addebitato il costo
                                                                                dell'attività. Premi conferma per
                                                                                continuare.
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                {!!Form::open(['action' =>['ActivityEnrollmentsController@update', $plan->planningId],'method' => 'POST','class'  => 'pull-right'])!!}
                                                                                {{Form::submit('Conferma',['class' => 'btn btn-primary' ])}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{Form::hidden('_method','PUT')}}
                                                                {!!form::close()!!}

                                                            @endif



                                                        @endif
                                                    @endauth


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endif
                        @endforeach



                    @auth
                        @php
                            $found = false;
                        @endphp
                        <div class="invisible">
                            PLAN: {{$plan= \App\activity_plannings::where('activity_id',$attivita->ActivityId)->where('stopDate','<',Carbon\Carbon::now())->pluck('planningId')}}</div>
                        @foreach($plan as $p)
                            <div class="invisible">
                                ENROLL: {{$enroll =\App\Activity_Enrollments::where('User',Auth::user()->id)->where('PlanningId',$p)->first() }}</div>
                            @if(!is_null($enroll))
                                @php
                                    $found = true;
                                @endphp
                            @endif
                        @endforeach
                        <div class="invisible">
                            EVALUATION: {{$evaluation =\App\Evaluations::where('User',Auth::user()->id)->where('Activity',$attivita->ActivityId)->get() }}</div>


                        @if(($found == true) && ($evaluation == '[]'))


                            <div class="card mb-4 ">
                                <div class="card-header"><h4>Valuta questa attività</h4>
                                </div>
                                <div class="card-body">

                                    {!!Form::open(['action' =>['EvaluationsController@update', $attivita->ActivityId],'method' => 'POST',
                                  'class'
                                  => 'pull-right'])!!}
                                    <div class="form-group row text-center">
                                        <div class="form-group col-md-12">
                                    {{Form::radio('rating', '1', false,['id' => 'like',"required" => 'required'])}}
                                    <label for="like"
                                           title="Sucks big time"><img
                                            class="w-25 h-25" src="/img/thumbsUp.png"></label>
                                    {{Form::radio('rating', '-1', false,['id' => 'dislike'])}}<label
                                        for="dislike"
                                        title="Sucks big tim"><img
                                            class="w-25 h-25" src="/img/thumbsDown.png"></label>
                                        </div>
                                    </div>

                                    <label for="comment" class="h4 mb-3">Scrivi un commento:</label>
                                    {{Form::textarea ('comment','', ['class' => 'form-control', 'placeholder' => 'Scrivi un commento...','rows'=> '3'])}}

                                    <div class="form-group row text-right">
                                        <div class="form-group col-md-12">
                                    {{Form::hidden('_method','PUT')}}
                                    {{Form::submit('Invia',['class' => 'btn btn-primary  mt-3'])}}
                                    {!!form::close()!!}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @elseif($found==false)


                        @endif
                    @endauth
                </div>


                <div class="col-md-4 mb-4">
                    <div class="card mb-4 text-center">

                        <div class="card-header">Dettagli Cicerone
                        </div>
                        @if($attivita->user->imgProfile == 'defaultProfile.jpeg')
                            <img src="/img/defaultProfile.jpeg"
                                 class="rounded-circle my-5" id="profileImg">
                            @else
                        <img src="/storage/profileImg/{{$attivita->user->imgProfile}}"
                             class="rounded-circle my-5" id="profileImg">
                        @endif
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
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row col-md-15">
                                        <label for="email" id="loginEmailLabel"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                        <div class="col-md-8">
                                            <input id="email" placeholder="E-Mail" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row col-md-15">
                                        <label for="password" id="psswLoginLabel"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-8">
                                            <input id="password" placeholder="Password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember" id="rememberLabel">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 offset-md-4">
                                            <button type="submit" name="button" class="btn btn-info btn-md">
                                                {{ __('Accedi') }}
                                            </button>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Password dimenticata?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                @if (Route::has('register'))
                                                    <a id="noAccountText" class="btn btn-link"
                                                       href="{{route('register')}}">
                                                        {{__('Non hai un account?')}}
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        @endif
                        @auth
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

                                    <a class="btn btn-primary btn-lg btn-block"
                                       href="http://127.0.0.1:8000/attivita/{{$attivita->ActivityId}}/showplans">Gestisci pianificazioni</a>


                                </div>

                            @endif
                        @endauth
                    </div>


                    <div class="card mb-4 ">
                        <div class="card-header">Commenti
                        </div>
                        <div class="card-body">
                            @if(count($attivita->evaluations) > 0)
                                @foreach($attivita->evaluations as $eval)

                                    Recensione scritta da:<br> {{$eval->user->name}} {{$eval->user->surname}} <br>

                                    Valutazione: @if($eval->vote == 1)
                                        <img class="w-25 h-25" src="/img/thumbsUp.png">
                                    @else
                                        <img class="w-25 h-25" src="/img/thumbsDown.png">
                                    @endif<br>

                                    Descrizione:<br> {{$eval->comment}}
                                    <hr class="featurette-divider">
                                @endforeach
                            @else
                                <div class="text-center">
                                    Nessuna commento per questa attività
                                </div>
                            @endif

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
