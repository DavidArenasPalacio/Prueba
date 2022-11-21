@extends('layouts.app')

@section('contenido')
    <h1 class="text-center font-bold text-5xl mb-5 text-black">Lista de inspección Maui</h1>
    <div class="bg-white p-5 rounded  shadow-md md:w-9/12 m-auto">

        <livewire:lista-chequeo-maui.create />
    </div>
@endsection
