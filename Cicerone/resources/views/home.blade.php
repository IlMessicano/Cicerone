@extends('layouts.app')

@section('content')

    <style>
        body{
            background-color: whitesmoke;
        }
        .vertical-center {
            min-height: 75%;
            min-height: 75vh;
            display: flex;
            align-items: center;
        }
    </style>

    <div class="vertical-center">

        <div class="jumbotron w-100 bg-black" id="welcome">
            <div class="container ">

                <section class="search-banner text-white py-1" id="search-banner">
                    <div class="container">
                        <div class="row text-center pb-4">
                            <div class="col-md-12">
                                <h2 class="display-4">Benvenuto in Cicerone, {{auth::user()->name}}</h2>
                                <h3>Effettua una ricerca</h3>
                            </div>
                        </div>
                        {!! Form::open(['action'=>['AttivitaController@search'],'method' => 'POST'])!!}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="font-weight-light text-dark">Dove</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">

                                                    {{Form::text ('paese','', ['class' => 'form-control', 'placeholder' => 'Cerca...','required' => 'required'])}}
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="font-weight-light text-dark">Da</label>
                                                {{Form::date ('start', '', ['class' => 'form-control', 'id' => 'from', 'onchange'=>'prendidata()','required' => 'required', 'max' => '2050-01-01'])}}


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
                                                    today = yyyy + '-' + mm + '-' + dd;
                                                    document.getElementById("from").setAttribute("min", today);

                                                </script>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="font-weight-light text-dark">A</label>
                                                {{Form::date ('stop', '', ['class' => 'form-control', 'id' => 'to','required' => 'required', 'max' => '2050-01-01'])}}

                                                <script>
                                                    function prendidata() {

                                                        var today = document.getElementById("from").value.split('-');
                                                        today[2] = parseInt(today[2]) + 1; //Oggi + 1
                                                        var tomorrow = new Date(today[0], today[1] - 1, today[2]); //Anno - Mese - Giorno

                                                        var dd = tomorrow.getDate();
                                                        var mm = tomorrow.getMonth() + 1; //January is 0!
                                                        var yyyy = tomorrow.getFullYear();
                                                        if (dd < 10) {
                                                            dd = '0' + dd
                                                        }
                                                        if (mm < 10) {
                                                            mm = '0' + mm
                                                        }
                                                        tomorrow = yyyy + '-' + mm + '-' + dd;
                                                        document.getElementById("to").setAttribute("min", tomorrow);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <label class="font-weight-light text-dark">Costo massimo</label>
                                                <div class="form-group ">

                                                    {{Form::number ('costo', '', ['class' => 'form-control', 'placeholder' => '0' ,'min' => '0'])}}
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md  text-right">
                                            {{Form::hidden('_method','PUT')}}
                                            {{Form::submit('Vai',['class' => 'btn btn-warning  pl-5 pr-5'])}}
                                        </div>



                                        {!! Form::close()!!}

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="text-center mt-4" align="center">
                    <h3 style="color: white">Oppure crea una tua attività</h3>
                    <a class="btn btn-warning btn-lg  w-25 text-white" href="/attivita/create">Crea attività</a>
                </div>
            </div>

        </div>
    </div>
    <h1 class="display-4 text-center">Trova interessanti attività create da Ciceroni provenienti da tutto il mondo</h1>







@endsection
