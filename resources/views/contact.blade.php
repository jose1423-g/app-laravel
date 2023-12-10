{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Contact')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de contacto')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">Contact</h1>
    </div>
@endsection

