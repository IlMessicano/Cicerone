<link href="public/css/basicStyle.css" ref="stylesheet">

<nav id="navbar" class="navbar navbar-expand-md navbar-collapse navbar-light shadow-sm">
<div class="container">
        <a style="color: white"
            @if(Auth::user())
                href="{{route('home')}}"
            @else
                href="{{route('welcome')}}"
            @endif >
            <img src="/img/Cicerone_Logo_def.png" class="img-fluid" width="256" height="128" style="position: relative; right: 15px; bottom: 5px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::user())
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/attivita/create">Crea attività</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mieattivita">Le mie attività</a>
                </li>

            </ul>


    @endif


<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/profile">
                    Visualizza Profilo

                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    @endguest
</ul>
</div>
</div>

</nav>
