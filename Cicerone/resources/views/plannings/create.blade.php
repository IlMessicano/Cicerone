@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="shadow p-4 m-4 bg-white">
            <br>

            <div class="col-md-12 order-md-2">
                <h4 class="mb-3">Modificando la pianificazione dell'attività: {{$plan->activity->nameActivity}}</h4>
                {!! Form::open(['action'=>['ActivityPlanningsController@update',$plan->planningId],'method' => 'POST','enctype' =>
                        'multipart/form-data'])!!}
                <div class="form-group row col-md-12">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('start', 'Data inizio')}}
                {{Form::date ('start', $plan->startDate, ['class' => 'form-control'])}}
                    </div>


                    <div class="col-md-6 mb-3">
                        {{Form::label ('stop', 'Data fine')}}
                        {{Form::date ('stop', $plan->stoptDate, ['class' => 'form-control'])}}
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('maxpart', 'Numero massimo partecipanti')}}
                        {{Form::number ('maxpart', $plan->maxPartecipants, ['class' => 'form-control'])}}
                    </div>


                    <div class="col-md-6 mb-3">
                        {{Form::label ('cost', 'Data fine')}}
                        {{Form::number ('cost', $plan->cost, ['class' => 'form-control'])}}
                    </div>
                </div>
                {{Form::hidden('_method','PUT')}}

                <div class="col-md  text-right">
                    {{Form::submit('Modifica',['class' => ' my-4 btn btn-primary'])}}
                </div>
            </div>
        </div>

        {!! Form::close()!!}
    </div>




@endsection
