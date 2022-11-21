@extends('layouts.app')


@section('contenido')
<div class="container-fluid mt-5 pt-8 px-8 w-full">
    <h1 class="text-center font-bold text-5xl mb-5">Registrar la lista de inspección Zig Zag</h1>
    <div class="bg-white p-5 rounded  shadow-md md:w-9/12 m-auto">
       
        <livewire:crear-lista-chequeo-zig-zag/>
    </div>
    
</div>
@endsection