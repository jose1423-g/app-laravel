<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de laravel - @yield('title')</title>
    <meta name="descripcion" content="@yield('meta-description', 'default')">
    {{-- trabajando con vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- PRIMERA FORMA DE AGREGAR JS Y CSS A NUESTRO PROYECTO --}}
    {{-- Esto a punta la carpeta public. la public es la unica visble en el navegador --}}
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- Esto a punta la carpeta public. la public es la unica visble en el navegador --}}
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>
    {{-- el punto funciona como un / --}}
    @include('layouts.navigation')

    {{-- mesaje de session flash solo funciona una peticion  --}}
    @if (session('status'))
        <div class="bg-white p-2 shadow-lg">
            <h1 style="margin-top: 4rem">{{ session('status') }}</h1>
        </div>
    @endif

    {{-- indica donde se imprimira el contenido a mostrar --}}
    @yield('content')

</body>
</html>
