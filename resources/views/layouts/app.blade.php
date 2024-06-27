{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					@auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
                    </ul>
					@endauth()
					
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
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

        <main class="py-2">
            @yield('content')
        </main>
    </div>
    @livewireScripts
<script type="text/javascript">
	window.livewire.on('closeModal', () => {
		$('#createDataModal').modal('hide');
	});
</script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!--asdadasd-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorteos RD - @yield('title')</title>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    {{-- para el favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {!! htmlScriptTagJsApi() !!}

    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>


    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/Country+State+District-City-Data.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Barra de navegacion -->

    {{-- @include('sweet::alert') --}}
    @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2e47a5">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logosorteos.png') }}"
                        alt="" style="width: 115px; margin-left:40px; margin-right:-80px;" class="logo-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                                href="{{ route('index') }}">Inicio</a>
                        </li>

                        <!--<li class="nav-item" style="margin-right: 25px; important!">
                                                                <a class="nav-link"
                                                                    href="https://tienda.sorteosrd.com">Tienda</a>
                                                            </li>-->


                        <!-- <li class="nav-item" style="margin-right: 25px; important!">
                                <a class="nav-link {{ request()->routeIs('trivias.index') ? 'active' : '' }}"
                                    href="{{ route('trivias.index') }}">Trivia</a>
                            </li> -->

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link {{ request()->routeIs('resultadosloteriasanteriores.index') ? 'active' : '' }}"
                                href="{{ route('resultadosloteriasanteriores.index') }}">Sorteos Anteriores</a>
                        </li>

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link {{ request()->routeIs('noticiasactualidad.index') ? 'active' : '' }}"
                                href="{{ route('noticiasactualidad.index') }}">Noticias</a>
                        </li>

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                                href="{{ route('nosotros') }}">Quienes Somos</a>
                        </li>

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                                href="{{ route('contacto') }}">Contacto</a>
                        </li>

                        <li class="nav-item" style="margin-right: 25px; important!">
                            <a class="nav-link nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                                href="{{ route('user') }}">Pantalla</a>
                        </li>
                        

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    @show
    <!-- Fin Barra de navegacion -->

    <!-- Contenido Principal -->
    <div class="container">
        @yield('content')
    </div>
    <!-- Fin Contenido Principal -->

    <!-- Footer -->
    <footer class="footer mt-auto text-center py-3 bg-light">


        <div class="row col-12 justify-content-center">



            <div class="col">
                <div class="container">
                    <span class="text-muted copyright">Copyright © 2024 Sorteos RD. Todos los Derechos
                        Reservados.</span>
                </div>
            </div>

            <div class="col-sm-12 col-md-5 col-lg-1">
                <div class="sociales d-flex">
                    <p class="siguenos">Síguenos</p>

                    <a href="https://www.facebook.com/sorteosrd.oficial/?locale=es_LA">
                        <img src="{{ asset('img/facebook.png') }}" alt="" class="iconos-sociales">
                    </a>
                    <a href="https://www.instagram.com/sorteosrd.oficial">
                        <img src="{{ asset('img/instagram.png') }}" alt="" class="iconos-sociales">
                    </a>
                    <a href="https://twitter.com/sorteosrd?lang=es">
                        <img src="{{ asset('img/twitter.png') }}" alt="" class="iconos-sociales">
                    </a>
                    <a href="https://www.youtube.com/user/sorteosrd">
                        <img src="{{ asset('img/youtube.png') }}" alt="" class="iconos-sociales">
                    </a>
                </div>
            </div>


        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('closeModal', () => {
            $('#createDataModal').modal('hide');
        });
    </script>

</body>

</html>
