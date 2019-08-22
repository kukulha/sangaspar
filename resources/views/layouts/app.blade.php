<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} || @yield('title')</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,900|Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar-fixed">
            @if(request()->is('/'))
                <nav class="navbar transparent z-depth-0 darken-4"  id="menu">
            @else
                <nav class="navbar azul">
            @endif
                <div class="nav-wrapper container">
                    <a href="" class="sidenav-trigger" data-target="movil"><i class="material-icons left">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('posts') }}">Blog</a></li>
                        @auth
                        <li><a href="{{ route('messages.index') }}">Administración</a></li>
                        <li>
                            {{ Form::open(['route' => 'logout']) }}
                                {!!Form::submit('Cerrar Sesión', ['class' => 'btn-small red darken-3'])!!}
                            {{ Form::close()}}
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>

        <ul id="movil" class="sidenav">
            <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('posts') }}">Blog</a></li>
                        @auth
                        <li><a href="{{ route('messages.index') }}">Administración</a></li>
                        <li>
                            {{ Form::open(['route' => 'logout']) }}
                                {!!Form::submit('Cerrar Sesión', ['class' => 'btn-small red darken-3'])!!}
                            {{ Form::close()}}
                        </li>
                        @endauth
        </ul>

        @yield('content')

        <footer class="page-footer azul overflow">
            <div class="row container">
                <div class="col m4 s12 center">
                    <img src="/img/logo-bco.png" class="responsive-img" width="200px" alt="">
                </div>
                <div class="col m4 offset-m4 center s12">
                    <p class="white-text">Mayor información. Tel. 33-39-66-22-49 <br>O al correo electrónico <br>sangasparclubcampestreydegolf@gmail.com</p>
                </div>
            </div>
        </footer>
    </div>

    {{-- Scripts --}}
    <script src="https://kit.fontawesome.com/3d376d57db.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
