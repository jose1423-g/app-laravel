{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Login')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de Login')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')

    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">Login</h1>

        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <form class="shadow-lg bg-white rounded-2 p-3 mt-4" action="{{ route('login') }}" method="post">
                    {{-- envia un token oculto y laravel lo procesa internamente, protege sobre ataques csrf --}}
                    @csrf


                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="mb-3"> --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                        </div>
                        {{-- @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    {{-- </div> --}}


                    <div class="d-flex align-items-center justify-content-between">
                        <a class="btn btn-primary w-50 me-2" href="{{ route('registro') }}">Registro</a>
                        <button class="btn btn-success w-50" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

