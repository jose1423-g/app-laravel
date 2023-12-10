{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Registro')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de Registro')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">Registro</h1>

        {{-- <div class="container mt-5 pt-4"> --}}
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <form class="shadow-lg bg-white rounded-2 p-3 mt-4" action="{{ route('store') }}" method="post">
                        {{-- envia un token oculto y laravel lo procesa internamente, protege sobre ataques csrf --}}
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="Titulo">Name</label>
                            {{-- old() en caso en que el usuario ingrese un input pero el otro input no se haya ingresado evitara que se pierda lo ingresado en el input --}}
                            <input type="text" class="form-control" name="name" autofocus="autofocus">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- </div> --}}

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            {{-- old() en caso en que el usuario ingrese un input pero el otro input no se haya ingresado evitara que se pierda lo ingresado en el input --}}
                            <input type="email" class="form-control" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- </div> --}}

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            {{-- old() en caso en que el usuario ingrese un input pero el otro input no se haya ingresado evitara que se pierda lo ingresado en el input --}}
                            <input type="password" class="form-control" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- </div> --}}

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            {{-- old() en caso en que el usuario ingrese un input pero el otro input no se haya ingresado evitara que se pierda lo ingresado en el input --}}
                            <input type="password" class="form-control" name="password_confirmation">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- </div> --}}


                        <div class="d-flex align-items-center justify-content-between">
                            <a class="btn btn-primary w-50 me-2" href="{{ route('login') }}">Login</a>
                            <button class="btn btn-success w-50" type="submit">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        {{-- </div> --}}
    </div>
@endsection

