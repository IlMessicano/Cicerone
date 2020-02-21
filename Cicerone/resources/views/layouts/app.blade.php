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
        <link href="{{ asset('css/effect.css') }}" rel="stylesheet" type="text/css">



    </head>

    <body style="height: auto; min-height:100%; position:relative">
        @include('inc.navbar')
        @include('inc.error')
        @yield('content')
    </body>

    <footer class="shadow-sm" style="background-color:#ffbf00; position:absolute; width:100%; bottom:0">
        <div class="footer-copyright text-center py-3 text-dark font-weight-bold">© 2020 Copyright:
            <a href="" style="color:darkred "><u> cicerone.com</u></a>
        </div>
    </footer>
</html>
