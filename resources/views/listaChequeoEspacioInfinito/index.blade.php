@extends('layouts.app')

@section('contenido')
    <div class="px-8 mt-5 pt-8 ">

        <div class="flex justify-between  flex-col gap-2 md:flex-row  mb-5">
            <h1 class="text-4xl font-bold text-dark">Gestión de lista de inspección Espacio Infinito</h1>

            <a class="btn btn-primary " role="button" href="{{ route('listaChequeoEspacioInfinito.create') }}">Crear inspección
                Espacio Infinito</a>
        </div>

        @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm"
                x-data="{ open: true }" x-init="setTimeout(() => { open = false }, 5000)" x-show="open"
                x-transition:enter="transition duration-500 transform ease-out" x-transition:enter-start="opacity-1"
                x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0">
                {{ session('mensaje') }}
            </div>
        @endif
        <livewire:lista-chequeo-espacio-infinito.show>
    </div>
@endsection
