{{-- plantillas
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
{{-- @section('title','Welcome') --}}

{{-- crea una descripcion para la pagina --}}
{{-- @section('meta-description','Pagina de inicio') --}}

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
{{-- @section('content')
    <div class="container mt-5 pt-4">
        <h1 class="text-primary text-center">Welcome</h1>
    </div>
@endsection  --}}


{{-- EJEMPLO segundo forma para definir layouts --}}

{{-- Primera forma de inlcuir componentes con herencia  --}}
{{-- @component('components.layout')
    <h1>HOLIS</h1>
@endcomponent --}}

<x-layouts.app title="holis" metadescription="Pagina holis">    

    {{-- Se asigna el titulo en base a una variable --}}
    <x-slot name='sub_header'>
        <h3 class="text-primary">Este es el titulo de la pagina</h3>
    </x-slot>
    
    <h1>Welcome Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione deserunt quod temporibus, quidem nesciunt eaque cupiditate eius repellendus veritatis? Mollitia sequi alias, error nesciunt nostrum ab exercitationem tenetur minima obcaecati.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quae cumque placeat doloribus eos ad deserunt incidunt, blanditiis officiis est voluptate assumenda nobis minus ea repellendus, aperiam, a autem illo.
    </h1>

</x-layouts.app>