@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="shadow p-4 m-4 bg-white">
            <br>
            <div class="col-md-12 order-md-2">
                <h4 class="mb-3">Modifica profilo</h4>
                {!! Form::open(['action'=>['ProfileController@update',$user->id],'method' => 'POST'])!!}


                <div class="row">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('name', 'Nome')}}
                        {{Form::text ('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-md-6 mb-3">
                        {{Form::label ('cognome', 'Cognome')}}
                        {{Form::text ('cognome', $user->cognome, ['class' => 'form-control', 'placeholder' => 'Cognome'])}}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="{{$user->email}}"
                               value="{{$user->email}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('password', 'Password vecchia')}}
                        {{Form::password ('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                    <div class="col-md-6 mb-3">
                        {{Form::label ('new_password', 'Password nuova')}}
                        {{Form::password ('new_password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        {{Form::label ('sesso', 'Sesso' , ['class' => 'w-100'])}}
                        {{Form::select('sesso', array('M' => 'Uomo', 'F' => 'Donna'), $user->sesso, ['class' => 'col-sm-6 custom-select custom-select-sm w-100'])}}
                    </div>

                    <div class="col-md-6 mb-3">
                        {{Form::label ('dataNascita', 'Data di nascità')}}
                        {{Form::date ('dataNascita', $user->dataNascita, ['class' => 'form-control', 'placeholder' => 'Data di nascità'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        {{Form::label ('nazionalita', 'Nazionalità')}}
                        {{Form::text ('nazionalita', $user->nazionalita, ['class' => 'form-control', 'placeholder' => 'Nazionalità'])}}

                    </div>

                    <div class="col-md-4 mb-3">
                        {{Form::label ('cittaResidenza', 'Città di Residenza')}}
                        {{Form::text ('cittaResidenza', $user->cittaResidenza, ['class' => 'form-control', 'placeholder' => 'Città di Residenza'])}}
                    </div>

                    <div class="col-md-4 mb-3">
                        {{Form::label ('nazioneResidenza', 'Nazione di Residenza')}}
                        {{Form::text ('nazioneResidenza', $user->nazioneResidenza, ['class' => 'form-control', 'placeholder' => 'Nazione di Residenza'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        {{Form::label ('telefono', 'Telefono')}}
                        {{Form::text ('telefono', $user->telefono, ['class' => 'form-control', 'placeholder' => 'Telefono'])}}

                    </div>


                </div>
                <div class="mb-3">
                    {{Form::label ('biografia', 'Biografia')}}
                    {{Form::textarea ('biografia', $user->biografia, ['class' => 'form-control', 'placeholder' => 'Biografia','maxlength' => 255])}}

                </div>


                <hr class="mb-4">
                <div class="text-right">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Aggiorna profilo',['class' => 'btn btn-primary'])}}
                </div>
            </div>
        </div>

        {!! Form::close()!!}
    </div>

@endsection
