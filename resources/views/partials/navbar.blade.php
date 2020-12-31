  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="box-shadow: 1px 5px 7px 1px solid;">
            {{-- <div class="container"> --}}
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 20px;">
                   SunuLiguey
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="margin-left: 90px;">
                        <a class="nav-item nav-link active" href="#" id="das">Dashboard</a>
                        <a class="nav-item nav-link active" href="" id="message">Messages</a>
                        <a class="nav-item nav-link active" href="" id="mission">Missions</a>
                        <a class="nav-item nav-link active" href="" id="freelance">Ajout Job</a>
                    </ul>
                    <form action="" class="form-inline">
                        <div class="form-group">
                        <input type="text" name="" class="form-control">
                        <input type="text" name="" class="form-control">
                        </div>
                    </form>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"> My profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    {{-- <a class="dropdown-item" href="{{ route('admin.users.index') }}">Listes des utilisateurs</a> --}}
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
          {{--   </div> --}}
        </nav>