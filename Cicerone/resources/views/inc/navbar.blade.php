<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:  #DAA520;">
<div class="container">
        <a
            class="navbar-brand"
            @if(Auth::user())
                href="{{route('home')}}"
            @else
                href="{{route('welcome')}}"
            @endif >
            <img src="" class="img-fluid" width="37" height="35"> {{ config('app.name', 'Cicerone') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::user())
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Crea attività</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Le mie attività</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Globetrotter</a>
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
