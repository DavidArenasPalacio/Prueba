<?php

namespace App\Http\Livewire\ListaChequeoSimuladorFantasia;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\ListaChequeoSimuladorFantasia;

class Show extends Component
{
    public function render()
    {
        return view('livewire.lista-chequeo-simulador-fantasia.show');
    }

    public function listarChequeoSimuladorFantasia()
    {
        $listaChequeo = ListaChequeoSimuladorFantasia::select(
            'lista_chequeo_simulador_fantasias.*',
            'users.name as nombre'
        )->join('users', 'users.id', '=', 'lista_chequeo_simulador_fantasias.user_id')->get();

        return datatables()->of($listaChequeo)
            ->editColumn('imagen', function ($listaChequeo) {
                if (!empty($listaChequeo->imagen)) {
                    return "<a class='btn btn-primary imagenes' onclick='mostrarImagen($listaChequeo->id)' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-eye'></i></a>";
                }
            })
            ->editColumn('hora_Inicio', function ($listaChequeo) {
                return Carbon::parse($listaChequeo->hora_Inicio)->Format('d/m/Y g:i:s A');
            })
            ->editColumn('hora_Fin', function ($listaChequeo) {
                return Carbon::parse($listaChequeo->hora_Fin)->Format('g:i:s A');
            })
            ->editColumn('duracion', function ($listaChequeo) {
                return  Carbon::parse($listaChequeo->hora_Inicio)->diff($listaChequeo->hora_Fin)->format('%h horas %i minutos');
            })
            ->rawColumns(['hora_Inicio', 'hora_Fin', 'imagen', 'duracion'])->toJson();
    }

    public function imagen(ListaChequeoSimuladorFantasia $listaChequeoSimuladorFantasia)
    {
        return $listaChequeoSimuladorFantasia->imagen;
    }
}
