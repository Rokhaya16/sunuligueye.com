<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
         <style>
        html {
            scroll-behavior: smooth;
        }
        
        [x-cloak] {
            display: none !important;
        }
        </style>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.2/dist/alpine.min.js" defer></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-weight:bold;font-style: italic;font-size: 20px;">
                    SUNULIGUEYE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <livewire:search/>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                      
                    <div class="topnav">
                      <ul  style="margin-right: -2px;">
                        <a class="active" href="{{ route('home') }}">Dashboard</a>
                        <a  href="{{ route('conversations.index') }}">Messages</a>
                        <a  href="{{ route('jobs.index') }}">Missions</a>
                        {{-- <button class="btn btn-success" style="margin-right: 1px;padding-top: 1px;padding-bottom: 1px"><a href="{{ route('form.add') }}" style="color:white;text-decoration:none;">Ajout job</a></button> --}}
                      </ul>
                     </div>
                  
                    <!-- Right Side Of Navbar -->
                    <button class="btn btn-success"><a href="{{ route('form.add') }}" style="color:white;text-decoration:none;">Ajouter mission</a></button>
                    <!--<button class="btn btn-success" style="margin-right: 2px;"><a href="{{ route('jobs.index') }}" style="color:white;text-decoration:none;">Editer mission</a></button> -->

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size: 17px;font-weight:bold;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="font-size: 17px;font-weight:bold;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <livewire:flash/>
            @yield('content')
        </main>
         @livewireScripts
    </div>
</body>
</html>
