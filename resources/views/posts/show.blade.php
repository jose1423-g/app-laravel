{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title', $valor->Titulo)

{{-- crea una descripcion para la pagina --}}
@section('meta-description', $valor->Que_es)

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">

        <h1 class="text-primary text-center mb-4">Show element</h1>
        <div class="row justify-content-center">
            <div class="col-7 rounded-2 shadow-lg bg-white p-3">
                <h2 class="text-center text-info mb-4">{{ $valor->Titulo }}</h2>
                <p>{{ $valor->Que_es }}</p>
            </div>
        <div>

    </div>



@endsection

