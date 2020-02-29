@extends('layouts.app')

@section('content')
<div
    style="background-image:url('https://besthqwallpapers.com/Uploads/16-4-2018/48522/thumb2-travel-concepts-wooden-plane-seashells-summer-travel-blue-boards.jpg'); background-repeat: no-repeat; background-size: cover;"
    class="jumbotron w-100 bg-black">
    <div class="container">
        <section class="search-banner text-white py-1" id="search-banner">
            <div class="container">
                <div id="welcome" class="row text-center pb-4">
                    <div class="col-md-12">
                        <h2 class="display-4">Benvenuto in Cicerone!</h2>
                        <h3>Effettua una ricerca</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="font-weight-light text-dark">Dove</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <input type="text" class="form-control"
                                                   placeholder="Città">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="font-weight-light text-dark">Data</label>
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
@endsection
