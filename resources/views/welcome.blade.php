{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">Welcome</h1>
    </div>
@endsection


{{-- EJEMPLO segundo forma para definir layouts --}}

{{-- Primera forma de inlcuir componentes con herencia  --}}
{{-- @component('components.layout')
    <h1>HOLIS</h1>
@endcomponent --}}

{{-- <x-layouts.app title="Welcome" metadescription="Pagina welcome"> --}}

    {{-- Se asigna el titulo en base a una variable --}}
    {{-- <x-slot name='title'>
        Welcome
    </x-slot>     --}}

   {{-- <h1>Welcome</h1>
</x-layouts.app> --}}
