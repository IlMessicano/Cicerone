@extends('layouts.app')

@section('content')


<div class="jumbotron-fluid" id="welcome">
    <div class="container">
        <section class="search-banner text-white py-1" id="search-banner">
            <div class="container">
                <div class="row text-center pb-4">
                    <div class="col-xl-12" id="welcomeText">
                        <h2 class="display-3" style="padding-top: 50px;">Benvenuto in Cicerone</h2><br><br>
                        <h2 style="">Trova le attività che renderanno unico il tuo viaggio!</h2>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 140px; width: auto; height: auto">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="font-weight-light text-dark">Scegli dove</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <input type="text" class="form-control"
                                                   placeholder="città">
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

                                    <div class="col-md-4 mt-3">
                                        <label class="font-weight-light text-dark">Tipologia</label>
                                        <div class="form-group ">

                                            <select id="" class="form-control">
                                                <option selected>Natura</option>
                                                <option>Divertimento</option>
                                                <option>Cultura</option>
                                                <option>Esperienze culinarie</option>
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

<div>

    <div class="container-sm">
        <section">
            <h1 class="display-4" style="text-align: center; padding-top: 50px; padding-bottom: 50px">
                Scegli tra le diverse tipologie di attività, create da Ciceroni provenienti da tutto il mondo
            </h1>
        </section>
    </div>

<div class="container-md pre-scrollable">

        <div class="card mb-3">
            <a href="">
            <img class="card-img-top" src="/img/Natura-894x270.jpg" alt="Card image cap" v-text="coa">
            </a>
        </div>

        <div class="card mb-3">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Divertimento</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

    <div class="card mb-3">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Cultura</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

        <div class="card mb-3">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Esperienze culinarie</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

</div>


    <!--
    <div class="card bg-dark text-white">
        <img class="card-img responsive" src="/img/Natura-894x270.jpg" alt="Card image" style="background-size: 100% auto; ">
        <div class="card-img-overlay">
            <h5 class="card-title" style="text-align: center">Natura</h5>
        </div>
    </div>

    <div class="card bg-dark text-white">
        <img class="card-img responsive" src="/img/Natura-894x270.jpg" alt="Card image" style="background-size: 100% auto; ">
        <div class="card-img-overlay">
            <h5 class="card-title" style="text-align: center">Natura</h5>
        </div>
    </div>

    <div class="card bg-dark text-white">
        <img class="card-img responsive" src="/img/Natura-894x270.jpg" alt="Card image" style="background-size: 100% auto; ">
        <div class="card-img-overlay">
            <h5 class="card-title" style="text-align: center">Natura</h5>
        </div>
    </div>

    <div class="card bg-dark text-white">
        <img class="card-img responsive" src="/img/Natura-894x270.jpg" alt="Card image" style="background-size: 100% auto; ">
        <div class="card-img-overlay">
            <h5 class="card-title" style="text-align: center">Natura</h5>
        </div>
    </div> -->

@endsection
