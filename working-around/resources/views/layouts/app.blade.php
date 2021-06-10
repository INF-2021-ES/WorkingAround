<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Working Around') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" id="nav">
            <div class="container">
                <div class="mr-3" id="logo-container">
                    <img src="/img/working_around_icon_round_login.png" alt="logo" width="50px" height="50px">
                </div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Working Around') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="{{route('categories.index')}}" class="nav_link px-2 text-white">{{__('Categories')}}</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{route('login')}}" class="nav_link px-2 text-white">{{__('Log In')}}</a></li>
                            <li><a href="{{route('register')}}" class="nav_link px-2 text-white">{{__('Register')}}</a></li>
                        @else                 
                            <li></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->name}}<span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('user.index')}}" onclick="event.preventDefault();document.getElementById('profile').submit()">Profile</a>
                                    <a class="dropdown-item" href="{{route('jobs.index')}}">Jobs</a>
                                    <form id="profile" action="{{route('user.index')}}" method="GET">@csrf</form>
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">@csrf</form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main id="main">
            @yield('content')
        </main>
        <footer class="bg-dark text-center text-white">
          <div class="container p-4 pb-0">
            <div class="d-flex justify-content-center">
              <img src="/img/working_around_icon_round_login.png" width="75px" height="75px">
              <div class="d-flex align-items-center">
                <h4 class="align-middle">Working Around</h4>
              </div>
            </div>
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-white" href="https://workingaround.com/">workingaround.com</a>
            © 2021 Copyright
          </div>
        </footer>
    </div>
</body>
</html>
