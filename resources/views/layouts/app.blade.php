<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}">
		<script src="{{ asset('assets/js/jquery-3.2.1.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> --}}
		@yield('head')
    </head>
    <body>
        <header>
            <h1><center>Eventos CV</center><h1>
            @yield('header')
        </header>
        <div class="row" style="position:relative;left: 27%;">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/"><button type="button" class="btn btn-secondary">Inicio</button></a>
                <a href="/evento/agregar"><button type="button" class="btn btn-secondary">Agregar Evento</button></a>
                <a href="/categoria/agregar"><button type="button" class="btn btn-secondary">Agregar Categoria</button></a>
                <a href="/evento"><button type="button" class="btn btn-secondary">Ver Eventos</button></a>
                <a href="/categoria"><button type="button" class="btn btn-secondary">Ver Categoria</button></a>
            </div>
        </div>
        @yield('block')
        @yield('script')
    </body>
</html>
