@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="shadow p-4 m-4 bg-white">
            <h1 class="display-4">Attività</h1>

            @if(count($attivita)>0)
                @foreach($attivita as $act)


                        <div class="card bg-light text-dark m-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <h3><a href="/attivita/{{$act->ActivityId}}">{{$act->nameActivity}}</a></h3>
                                        </div>

                                    <div class="col-md-4 mb-3 text-right">
                                        <img src="storage/activityImg/{{$act->imgActivity}}" height="150">
                                    </div>
                                </div>

                            </div>
                        </div>




                @endforeach
            @else
                <div class="card bg-light text-dark m-3">
                    <div class="card-body text-center">
                        <h4>No activity found</h4>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
