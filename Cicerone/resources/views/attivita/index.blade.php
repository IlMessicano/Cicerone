@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="shadow p-4 m-4 bg-white">
            <br>
            <div class="col-md-12 order-md-2">
                <h4 class="mb-3">Creazione attività</h4>
                {!! Form::open(['action'=>'AttivitaController@store','method' => 'POST','enctype' =>
                        'multipart/form-data'])!!}


                <div class="row">
                    <div class="col-md-12 mb-3">
                        {{Form::label ('nomeAttivita', 'Nome Attività')}}
                        {{Form::text ('nomeAttivita', $attivita->nameActivity, ['class' => 'form-control', 'placeholder' => 'Nome Attività'])}}
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        {{Form::label ('descrizione', 'Descrizione')}}
                        {{Form::text ('descrizione', $attivita->description, ['class' => 'form-control', 'placeholder' => 'Descrizione'])}}
                    </div>

                </div>
                <div class="row">
                    {{ Form::file('img',['class' => 'input-group-text w-100']) }}
                </div>


                    {{Form::submit('Crea',['class' => 'btn btn-primary'])}}

            </div>
        </div>

        {!! Form::close()!!}
    </div>



@endsection
