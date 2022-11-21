<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ListaChequeoZigZag;

class ListaChequeoZigZagController extends Controller
{
    public function index()
    {
        return view('listaChequeoZigZag.index');
    }

    public function ListarChequeoZigZag()
    {
        $listaChequeo = ListaChequeoZigZag::select('lista_chequeo_zig_zags.id', 'hora_Inicio', 'chequeo_Uno_ZigZag', 'chequeo_Dos_ZigZag', 'chequeo_Tres_ZigZag', 'chequeo_Cuatro_ZigZag', 'chequeo_Cinco_ZigZag', 'chequeo_Seis_ZigZag', 'chequeo_Siete_ZigZag', 'chequeo_Ocho_ZigZag', 'chequeo_Nueve_ZigZag', 'chequeo_Diez_ZigZag', 'chequeo_Once_ZigZag', 'chequeo_Doce_ZigZag', 'observaciones', 'hora_Fin', 'imagen', 'users.name as nombre')->join('users', 'users.id', '=', 'lista_chequeo_zig_zags.user_id')->get();

        return datatables()->of($listaChequeo)
            ->editColumn('imagen', function ($listaChequeo) {
                if (!empty($listaChequeo->imagen)) {
                    return "<a class='btn btn-primary imagenes' onclick='mostrarImgen($listaChequeo->id)' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-eye'></i></a>";
                }
            })
            ->editColumn('hora_Inicio', function ($listaChequeo) {
                return Carbon::parse($listaChequeo->hora_Inicio)->Format('d/m/Y g:i:s A');
            })
            ->editColumn('hora_Fin', function ($listaChequeo) {
                return Carbon::parse($listaChequeo->hora_Fin)->Format('g:i:s A');
            })
            ->rawColumns(['imagen', 'hora_Inicio', 'hora_Inicio'])
            ->toJson();
    }

    public function create()
    {
        //
        return view('listaChequeoZigZag.create');
    }


    public function imagen(ListaChequeoZigZag $listaChequeoZigzag)
    {
        return $listaChequeoZigzag->imagen;
    }
}
