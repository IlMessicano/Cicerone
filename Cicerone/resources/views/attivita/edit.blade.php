@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="shadow p-4 m-4 bg-white">
            <br>

            <div class="col-md-12 order-md-2">
                <h4 class="mb-3">Modifica attività: {{$attivita->nameActivity}}</h4>
                {!! Form::open(['action'=>['AttivitaController@update',$attivita->ActivityId],'method' => 'POST','enctype' =>
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
                        {{Form::textarea ('descrizione', $attivita->description, ['class' => 'form-control', 'placeholder' => 'Descrizione'])}}
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        {{ Form::file('img',['class' => 'input-group-text w-100']) }}
                    </div>
                </div>
                {{Form::text ('Country', $attivita->Country, ['id'=>'Country','style' => 'display:none'])}}
                {{Form::text ('State', $attivita->State, ['id'=>'State','style' => 'display:none'])}}
                {{Form::text ('Road', $attivita->Road, ['id'=>'Road','style' => 'display:none'])}}
                {{Form::text ('City', $attivita->City, ['id'=>'City','style' => 'display:none'])}}
                {{Form::text ('postCode', $attivita->postCode, ['id'=>'postCode','style' => 'display:none'])}}
                {{Form::text ('lat', $attivita->latCoord, ['id'=>'lat','style' => 'display:none'])}}
                {{Form::text ('long', $attivita->longCoord, ['id'=>'long','style' => 'display:none'])}}
                {{Form::hidden('_method','PUT')}}

                <div class="col-md  text-right">
                    {{Form::submit('Modifica',['class' => ' my-4 btn btn-primary'])}}
                </div>
            </div>
        </div>

        {!! Form::close()!!}


    </div>

@endsection
