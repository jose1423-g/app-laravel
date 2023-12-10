{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title', 'Create new element')

{{-- crea una descripcion para la pagina --}}
@section('meta-description', 'create new element')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')

    <div class="container mt-5 pt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <form class="shadow-lg bg-white rounded-2 p-3 mt-4" action="{{ route('posts.store') }}" method="post">
                    {{-- envia un token oculto y laravel lo procesa internamente, protege sobre ataques csrf --}}
                    @csrf
                    <h1 class="text-primary text-center mb-3">Create new element</h1>

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

{{-- varaible global error muestra los errores que manda el poscontroller --}}
{{-- all() solo accede a los mensajes de error --}}

{{-- muestra el mensaje de error $message variable global --}}
{{-- @error('titulo del error') --}}
{{-- <span style="color: red">{{ $message }}</span> --}}
{{-- @enderror --}}


{{-- muestra un array --}}
{{-- @dump($errors->all()) --}}
