{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title', 'Edit')

{{-- crea una descripcion para la pagina --}}
@section('meta-description', 'Edit register')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')

    {{-- <h1>Edit Form</h1> --}}

    {{-- <form action="{{ route('posts.update', $valor ) }}" method="post"> --}}
    {{-- <form action="{{ route('posts.update', $valor->id_contenido) }}" method="patch"> --}}
        {{-- envia un token oculto y laravel lo procesa internamente, protege sobre ataques csrf --}}
        {{-- @csrf @method('PATCH')

        @include('posts.forms-fields')

        <button type="submit">Enviar</button>
    </form> --}}


    <div class="container mt-5 pt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <form class="shadow-lg bg-white rounded-2 p-3 mt-4" action="{{ route('posts.update', $valor) }}" method="post">
                    {{-- envia un token oculto y laravel lo procesa internamente, protege sobre ataques csrf --}}
                    @csrf @method('PATCH'){{-- el metodos pacth --}}
                    <h1 class="text-primary text-center mb-3">Edit element</h1>

                    {{-- incluye los input --}}
                    @include('posts.forms-fields')

                    <div class="d-flex align-items-center justify-content-between">
                        <a class="btn btn-danger w-50 me-2" href="{{ route('posts.index') }}">Cancelar</a>
                        <button class="btn btn-success w-50" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

