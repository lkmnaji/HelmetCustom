<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/helmet.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}"> --}}

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/helm.png') }}" alt=""
                    style="width: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}" style="color: black;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">About Us</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <span><a href="#" style="color: black;"><svg width="1em" height="1em"
                                viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                            </svg></a></span> &nbsp;
                    <span><a href="{{ route('customer.login') }}" style="color: black;"><svg width="1em" height="1em"
                                viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                            </svg></a></span>
                </span>
                @guest

                @else
                    <li>
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }}
                    </a>

                    <div aria-labelledby="navbarDropdown">
                     

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </li>
                @endguest
            </div>
        </div>
    </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->

        </ul>
    </div>
    </div>


    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
