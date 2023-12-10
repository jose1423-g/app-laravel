<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de laravel - {{ $title ?? '' }}</title>
    <meta name="descripcion" content="{{ $metadescription ?? 'Default' }}">
</head>
<body>
    {{-- Inculimos la navegacion con herencia --}}
    <x-layouts.navigation />
    {{-- indica donde se imprimira el contenido a mostrar variable global $slot --}}
    {{ $slot }}

</body>
</html>