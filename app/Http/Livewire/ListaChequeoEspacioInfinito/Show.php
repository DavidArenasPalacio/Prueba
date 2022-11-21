<?php

namespace App\Http\Livewire\ListaChequeoEspacioInfinito;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\ListaChequeoEspacioInfinito;

class Show extends Component
{
    public function render()
    {
        return view('livewire.lista-chequeo-espacio-infinito.show');
    }

    public function listaChequeoEspacioInfinito()
    {
        $listaChequeo = ListaChequeoEspacioInfinito::select(
            'lista_chequeo_espacio_infinitos.*',
            'users.name as nombre'
        )->join('users', 'users.id', '=', 'lista_chequeo_espacio_infinitos.user_id')->get();

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

    public function imagen(ListaChequeoEspacioInfinito $listaChequeoEspacioInfinito)
    {
        return $listaChequeoEspacioInfinito->imagen;
    }
}
