<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <title>{{config('app.name','Cicerone')}}</title>

</head>

<body style="height: auto; min-height:100%; position:relative">
    @include('inc.navbar')
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src="/Cicerone/public/js/bootstrap.min.js" type="text/javascript"></script>

    <br>
</body>


<footer class="py bg-dark text-white" style=" position:absolute; width:100%; bottom:0">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a  href="" style="color:white"><u> Cicerone.com</u></a>
    </div>
</footer>


</html>
