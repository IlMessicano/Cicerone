@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="shadow p-4 m-4 bg-white">
            <br>


            <div class="row">

                <div class="col-md-5 order-md-1 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-center">Immagine del profilo</span>

                    </h4>
                    <div class="card p-2">
                        <img src="/storage/profileImg/{{$user->imgProfile}}"
                             class="rounded-circle my-5" id="profileImg">
                        {!! Form::open(['action'=>'ProfileController@store','method' => 'POST','enctype' =>
                        'multipart/form-data'])!!}
                        {{ Form::file('img',['class' => 'input-group-text w-100']) }}
                        <div class="text-center my-2">
                            {{Form::submit('Carica Foto',['class' => 'btn btn-primary w-100'])}}
                        </div>
                        {!! Form::close()!!}


                        {!!Form::open(['action' =>['ProfileController@destroyImg', $user->id],'method' => 'POST',
                  'class'
                  => 'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Elimina foto',['class' => 'btn btn-danger w-100'])}}
                        {!!form::close()!!}

                    </div>

                    <div class="card p-2 my-2 text-center">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <small>Registrato da {{$user->created_at}}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <img src="/img/thumbsUp.png" width="30" height="30">
                                Voti positivi: {{$user->upVote}}
                            </div>
                            <div class="col-md-6 mb-3">
                                <img src="/img/thumbsDown.png" width="30" height="30">
                                Voti negativi: {{$user->downVote}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 order-md-2">
                    <h4 class="mb-3">Dati anagrafici</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="{{$user->name}}"
                                   value="{{$user->name}}" disabled>


                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control" id="cognome" placeholder="{{$user->surname}}"
                                   value="{{$user->surname}}" disabled>

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="{{$user->email}}"
                               value="{{$user->email}}" disabled>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="sesso">Sesso</label>
                            <input type="text" class="form-control" id="sesso" placeholder="{{$user->gender}}" disabled>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="dataNascita">Data di nascita</label>
                            <input type="date" class="form-control" id="dataNascita" value="{{$user->birthDate}}"
                                   disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nazionalita">Nazionalità</label>
                            <input type="text" class="form-control" id="nazionalita"
                                   placeholder="{{$user->nationality}}"
                                   disabled>

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="{{$user->phone}}"
                                   disabled>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="biografia">Biografia</label>
                        <textarea class="form-control" id="biografia" placeholder="{{$user->biography}}"
                                  disabled></textarea>
                    </div>


                    <hr class="mb-4">
                    <a class="btn btn-primary btn-lg btn-block" href="/profile/{{$user->id}}/edit">Modifica profilo</a>
                    <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                        Elimina profilo
                    </button>

                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sei sicuro di voler cancellare il tuo account?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Ci dispiace vederti andare via, ma non possiamo fermarti! <br>
                    Se vuoi cancellare il tuo account selezione Elimina.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    {!!Form::open(['action' =>['ProfileController@destroy', $user->id],'method' => 'POST',
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
