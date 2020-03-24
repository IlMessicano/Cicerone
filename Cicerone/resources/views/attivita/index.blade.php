@extends('layouts.app')
@section('content')




    <div class="container">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
              integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
              crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
                integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                crossorigin=""></script>

        <style>
            #mapid { height:500px; }
        </style>
        <div id="mapid"></div>

        <script>


            var map = L.map('mapid').setView([51.505, -0.09], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            /*L.marker([51.5, -0.09]).addTo(map)
                .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                .openPopup();*/

            map.on('click', function(e){
                var coord = e.latlng;
                var lat = coord.lat;
                var lng = coord.lng;
                console.log("You clicked the map at latitude: " + lat + " and longitude: " + lng);
            });




        </script>

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
                        {{Form::textarea ('descrizione', $attivita->description, ['class' => 'form-control', 'placeholder' => 'Descrizione'])}}
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
