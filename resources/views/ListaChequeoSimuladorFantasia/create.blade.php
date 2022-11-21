@extends('layouts.app')

@section('contenido')
<div class=" mt-5 pt-8 ">
    <h1 class="text-center font-bold text-5xl mb-5 text-black">Lista de inspección Simulador Fantasia</h1>
    <div class="bg-white p-5 rounded  shadow-md md:w-9/12 m-auto">
       
       <livewire:lista-chequeo-simulador-fantasia.create />
    </div>
</div>
@endsection