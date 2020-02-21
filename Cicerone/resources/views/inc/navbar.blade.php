<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="" class="img-fluid" width="37" height="35">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="">Ciao</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Ciaissimo</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

<script>
    function increaseFontSize() {
        var actualFontSize = $('html').css("font-size");
        actualFontSize = parseInt(actualFontSize.slice(0,2)) + 2;
        $('html, body').css('font-size', actualFontSize+'px');
    }

    function decreaseFontSize() {
        var actualFontSize = $('html').css("font-size");
        actualFontSize = parseInt(actualFontSize.slice(0,2)) - 2;
        $('html, body').css('font-size', actualFontSize+'px');
    }
</script>
