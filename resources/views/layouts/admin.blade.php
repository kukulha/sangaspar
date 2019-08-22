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
            <nav class="navbar azul darken-4">
                <div class="nav-wrapper container">
                    <a href="" class="sidenav-trigger" data-target="movil"><i class="material-icons left">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('messages.index') }}">Mensajes</a></li>
                        <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                        <li><a href="{{ route('posts.index') }}">Articulos</a></li>
                        <li><a href="{{ route('home') }}">Ver Pagina</a></li>
                        <li>
                            {{ Form::open(['route' => 'logout']) }}
                                {!!Form::submit('Cerrar Sesión', ['class' => 'btn-small red darken-3'])!!}
                            {{ Form::close()}}
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul id="movil" class="sidenav">
            <li><a href="{{ route('messages.index') }}">Mensajes</a></li>
                        <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                        <li><a href="{{ route('posts.index') }}">Articulos</a></li>
                        <li><a href="{{ route('home') }}">Ver Pagina</a></li>
                        <li>
                            {{ Form::open(['route' => 'logout']) }}
                                {!!Form::submit('Cerrar Sesión', ['class' => 'btn-small red darken-3'])!!}
                            {{ Form::close()}}
                        </li>
        </ul>
        
        @if(session('info'))
            <div class="admin center">
                <div class="green lighten-5 section ">
                    <p class="green-text text-darken-4">{{ session('info') }}</p>
                </div>
            </div>
        @endif
        @yield('content')
    </div>

    {{-- Scripts --}}

    <script src="https://kit.fontawesome.com/3d376d57db.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    
</body>
</html>
