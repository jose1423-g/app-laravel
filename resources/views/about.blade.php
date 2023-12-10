{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','About')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de acerca de')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">About</h1>
    </div>
@endsection

