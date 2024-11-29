<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de laravel - {{ $title ?? '' }}</title>
    <meta name="descripcion" content="{{ $metadescription ?? 'Default' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Inculimos la navegacion con herencia --}}
    <x-layouts.navigation />
    {{-- indica donde se imprimira el contenido a mostrar variable global $slot --}}
    @if (isset($sub_header))    
        <div class="text-center">
            {{ $sub_header }}
        </div>
    @endif

    <div class="row">
        <div class="col-3 bg-primary">
            <h1 class="text-danger">ASIDE</h1>            
        </div>
        <div class="col-9">            
            {{ $slot }}
        </div>
    </div>

</body>
</html>