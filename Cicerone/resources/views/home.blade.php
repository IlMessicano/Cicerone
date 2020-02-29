@extends('layouts.app')

@section('content')
    <div
        style="background-image:url('/img/background.jpg'); background-repeat: no-repeat; background-size: cover;"
        class="jumbotron w-100 bg-black">
        <div class="container">


            <section class="search-banner text-white py-1" id="search-banner">
                <div class="container">
                    <div class="row text-center pb-4">
                        <div class="col-md-12">
                            <h2 class="display-4">Benvenuto in Cicerone, {{auth()->user()->name}}.</h2>
                            <h3>Effettua una ricerca</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="font-weight-light text-dark">Scegli il paese</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <input type="text" class="form-control"
                                                       placeholder="Mammata, sierda, porco dio">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="font-weight-light text-dark">Da</label>
                                            <input type="date" class="form-control" id="from" onchange="prendidata()">
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
                                            <input type="date" class="form-control" id="to">
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
                                            <label class="font-weight-light text-dark">Costo</label>
                                            <div class="form-group ">

                                                <select id="" class="form-control">
                                                    <option selected>0$ - 15$</option>
                                                    <option>15$ - 30$</option>
                                                    <option>30$ - 50$</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md  text-right">
                                        <button type="button" class="btn btn-warning  pl-5 pr-5">Vai</button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    <div class="container">

        <div class="text-right ">
            <a class="btn btn-primary text-white" href="/attivita/create">Crea Attività</a>
        </div>


    </div>

@endsection
