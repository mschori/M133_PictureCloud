<!Doctype>
<html lang="en">
<head>
    <title>@yield('title', 'MST-Tools')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><i class="fa fa-database nav-bar-icon"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link nav-bar-link" href="/myHome">myHome <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link nav-bar-link" href="/library">Library</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-bar-link nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <span class="navbar-text">
                @guest
                    @if(Route::has('register'))
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="/login" class="nav-link nav-bar-link mr-2">Login</a>
                            </li>
                            <li class="nav-item active">
                                <a href="/register" class="nav-link nav-bar-link">Register</a>
                            </li>
                        </ul>
                    @endif
                @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </span>
        </div>
    </nav>

    <!-- Title -->
    <div class="container">
        <h1 class="display-2 text-center mt-5">@yield('title')</h1>

        <!-- Divider -->
        <p class="border-top border-dark mt-4 mb-4"></p>
    </div>
</header>

<body>

<div class="container body-content">
    @yield('content')
</div>

</body>

<!-- Footer -->
<footer class="fixed-bottom footer-top">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-aut py-1">

                <!-- Facebook -->
                <a href="#">
                    <i class="fa fa-facebook-square m-2 text-white" style="font-size: 38px;"></i>
                </a>

                <!-- Twitter -->
                <a href="#">
                    <i class="fa fa-twitter-square m-2 text-white" style="font-size: 38px;"></i>
                </a>

                <!-- Linkedin -->
                <a href="#">
                    <i class="fa fa-linkedin-square m-2 text-white" style="font-size: 38px;"></i>
                </a>

            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center pb-3 footer-bottom text-white">© 2019 Copyright: Michael Schori
    </div>
</footer>

</html>
