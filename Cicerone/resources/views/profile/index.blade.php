@extends('layouts.app')

@section('content')
<div class="container">
    <div class="shadow p-4 m-4 bg-white">
        <br>


        <div class="row">

            <div class="col-md-5 order-md-1 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Immagine del profilo</span>

                </h4>
                <div class="card p-2">
                    <img src="/storage/profileImg/{{$user->imgProfilo}}" class="img-responsive m-3" width="350"
                        height="300">
                    <div class="input-group">
                        <div class="input-group-append">
                            {!! Form::open(['action'=>'ProfileController@store','method' => 'POST','enctype' =>
                            'multipart/form-data'])!!}

                            <div class="custom-file">
                                {{ Form::file('img',['class' => 'input-group-text']) }}
                            </div>
                            <div class="input-group-append">
                                {{Form::submit('Upload',['class' => 'btn btn-primary'])}}

                            </div>

                            {!! Form::close()!!}


                        </div>
                    </div>
                </div>
                <div class="card p-2 my-2 text-center">
                <div class="row ">
                    <div class="col-md-6 mb-3">
                        <img src="/img/thumbsUp.png" width="30" height="30">
                        Voti positivi: {{$user->votiPos}}
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/img/thumbsDown.png" width="30" height="30">
                        Voti negativi: {{$user->VotiNeg}}
                    </div>
                </div>
                </div>
            </div>



            <div class="col-md-7 order-md-2">
                <h4 class="mb-3">Modifica profilo</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="{{$user->name}}"
                                value="{{$user->name}}" required="">

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cognome">Cognome</label>
                            <input type="text" class="form-control" id="cognome" placeholder="{{$user->cognome}}"
                                value="{{$user->cognome}}" required="">

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="{{$user->email}}"
                            value="{{$user->email}}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="sesso">Sesso</label>
                            <input type="text" class="form-control" id="sesso" placeholder="{{$user->sesso}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="dataNascita">Data di nascita</label>
                            <input type="date" class="form-control" id="dataNascita" value="{{$user->dataNascita}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="nazionalita">Nazionalità</label>
                            <input type="text" class="form-control" id="nazionalita" placeholder="{{$user->nazionalita}}"
                                required="">

                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cittaResidenza">Città di residenza</label>
                            <input type="text" class="form-control" id="cittaResidenza"
                                placeholder="{{$user->cittaResidenza}}">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nazioneResidenza">Nazione di residenza</label>
                            <input type="text" class="form-control" id="nazioneResidenza"
                                placeholder="{{$user->nazioneResidenza}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="biografia">Biografia</label>
                        <input type="textarea" class="form-control" id="biografia" placeholder="{{$user->biografia}}">
                    </div>


                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Aggiorna profilo</button>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection