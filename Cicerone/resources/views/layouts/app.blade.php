<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cicerone') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.1.0.slim.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>



        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/basicStyle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css">



    </head>

    <body style="background-color: #f2e1e1">

    <div id="wrap">

        <div id="main" class="clear-top">

            @include('inc.navbar')
            @include('inc.error')
            @yield('content')

        </div>

    </div>

    <footer class="footer shadow-sm" style="background-color:#DAA520;">

        <div id="divTextFooter" class="footer-copyright text-center py-3 text-dark font-weight-bold">

            <a href="{{route('whoAreWe')}}" style="color: black">Chi siamo</a> |
            <a href="{{route('FAQ')}}" style="color: black">FAQ</a> |
            © 2020 Copyright:
            <a
                @if(Auth::user())
                    href="{{route('home')}}"
               @else
                    href="{{route('welcome')}}"
               @endif

                style="color:darkred "><u> cicerone.com</u>

            </a>

        </div>

    </footer>

    </body>

</html>
