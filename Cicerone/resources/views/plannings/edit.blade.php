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

                        <input class="form-control" type="datetime-local" name="start" id="start" value="{{$plan->startDate}}"   required>

                    </div>


                    <div class="col-md-6 mb-3">
                        {{Form::label ('stop', 'Data fine')}}

                        <input class="form-control" type="datetime-local" id="stop" name="stop" value="{{$plan->stopDate}}" required>

                        <script>

                                var today = new Date();
                                var dd = today.getDate();
                                var mm = today.getMonth() + 1; //January is 0!
                                var yyyy = today.getFullYear();
                                if (dd < 10) {
                                    dd = '0' + dd
                                }
                                if (mm < 10) {
                                    mm = '0' + mm
                                }

                                today = yyyy + '-' + mm + '-' + dd + " 00:00";
                                document.getElementById("start").setAttribute("min", today);
                                document.getElementById("stop").setAttribute("min", today);
                           
                        </script>
                    </div>
                </div>

                <div class="form-group row col-md-12">
                    <div class="col-md-6 mb-3">
                        {{Form::label ('maxpart', 'Numero massimo partecipanti')}}
                        {{Form::number ('maxpart', $plan->maxPartecipants, ['class' => 'form-control', 'min' => '1' ,'required'=>'required'])}}

                    </div>


                    <div class="col-md-6 mb-3">
                        {{Form::label ('cost', 'Costo')}}
                        {{Form::number ('cost', $plan->cost, ['class' => 'form-control', 'min' => '0' , 'required'=>'required','step' => '0.01'])}}
                    </div>

                    <div class="form-group row col-md-12">
                        <div class="col-md-12 mb-3">
                    {{Form::label ('note', 'Note')}}
                    {{Form::textarea ('note', $plan->notes, ['class' => 'form-control', 'placeholder' => 'Note','maxlength' => 255])}}
                        </div>
                    </div>
                </div>
                {{Form::hidden('_method','PUT')}}

                <div class="col-md  text-right">
                    {{Form::submit('Salva',['class' => ' my-4 btn btn-primary'])}}
                </div>
            </div>
        </div>

        {!! Form::close()!!}
    </div>




@endsection
