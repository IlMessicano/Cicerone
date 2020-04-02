@extends('layouts.app')
@section('content')



    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css">
    <link href="https://unpkg.com/ol-geocoder/dist/ol-geocoder.min.css" rel="stylesheet">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <script src="https://unpkg.com/ol-geocoder"></script>
    <style>
        #map {
            width: 100%;
            height: 700px;
        }
        .ol-geocoder.gcd-gl-container {
            top: 270px;
        }
        .ol-geocoder .gcd-gl-control{
            height:31.4px;
            width:31.4px
        }
        .ol-geocoder .gcd-gl-expanded{
            height:2em;
            width:15.625em
        }
        .ol-geocoder .gcd-gl-btn {
            height: 25.08px;
            width: 25.08px
        }
    </style>


    <H1>Mappa:</H1>
    <div id="map" class="map"></div>
    <script>
        var map = new ol.Map({
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            target: 'map',
            view: new ol.View({
                center: ol.proj.fromLonLat([-4.00033, 40.71570]),
                zoom: 13
            }),
            controls: ol.control.defaults().extend([new ol.control.FullScreen])
        });

        //Instantiate with some options and add the Control
        var geocoder = new Geocoder('nominatim', {
            provider: 'osm',
            lang: 'it',
            placeholder: 'Cerca ...',
            limit: 5,
            debug: false,
            autoComplete: true,
            keepOpen: true
        });
        map.addControl(geocoder);
        var geocoderSource = geocoder.getSource();

        geocoder.on('addresschosen', function (evt) {
            geocoderSource.clear();
            geocoderSource.addFeature(evt.feature); // add only the last one
        });

        //Listen when an address is chosen
        geocoder.on('addresschosen', function (evt) {
            console.info(evt);
            document.getElementById("Country").value=evt.address.details.country;
            document.getElementById("State").value=evt.address.details.state;
            document.getElementById("Road").value=evt.address.details.road;
            document.getElementById("City").value=evt.address.details.city;
            document.getElementById("postCode").value=evt.address.details.postcode;
            document.getElementById("lat").value=evt.coordinate[1];
            document.getElementById("long").value=evt.coordinate[0];

                /*alert(evt.coordinate);
                alert(evt.address.details.name);
*/
        });
    </script>


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


                <div class="col-md  text-right">
                    {{Form::submit('Crea',['class' => ' my-4 btn btn-primary'])}}
                </div>

            </div>
        </div>

        {!! Form::close()!!}


    </div>










@endsection
