{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Blog')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de blog')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">
        <div class="bg-white rounded-2 shadow-lg mb-3 pt-2 pb-2">
            <div class="text-center d-flex justify-content-center align-items-center mb-4">
                <h1 class="text-primary me-4 ">Blog</h1>
                {{-- se utiliza para verfificar que el usuario este autenticado si esta se muestra el elemento --}}
                @auth
                    <a class="btn btn-success" href="{{ route('posts.create')}}">Create New Element</a>
                @endauth
            </div>

            @foreach ($arreglo as $row)
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h2>
                            {{-- Se le pasa el valor manualmente --}}
                            <a class="nav-link" href="{{ route('posts.show', $row->id_contenido)}}">{{ $row->Titulo }}</a>
                        </h2>
                    </div>
                    <div class="col-1">
                        {{-- se utiliza para verfificar que el usuario este autenticado si esta se muestra el elemento --}}
                        @auth
                            <a class="btn btn-primary" href="{{ route('posts.edit', $row->id_contenido) }}">Editar</a>
                        @endauth
                    </div>
                    <div class="col-1">
                        <form action="{{ route('posts.destroy', $row->id_contenido) }}" method="post">
                            @csrf @method('DELETE')
                            {{-- se utiliza para verfificar que el usuario este autenticado si esta se muestra el elemento --}}
                            @auth
                                <button class="btn btn-danger btn-delete" type="submit">Delete</button>
                            @endauth

                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

{{-- hace lo contrario de @auth @endauth --}}
{{-- @guest @endguest --}}

 {{-- la ruta se encargara de mandar el id automaticamente --}}
{{-- <a href="{{ route('posts.show', $row)}}">{{ $row->Titulo }}</a> --}}

{{-- no funciona a la hora de eliminar --}}
{{-- <a href="{{ route('posts.destroy', $row->id_contenido) }}">Eliminar</a> --}}

{{-- impresion de un array  --}}
{{-- @dump($arreglo) --}}
