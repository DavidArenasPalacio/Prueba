<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaChequeoVCT;

class ListaChequeoVCTController extends Controller
{
    public function index(){
        return view('listaChequeoVCT.index');
    }

    public function create(){
        return view('listaChequeoVCT.create');
    }

     public function ListarChequeoVCT()
    {
        $listaChequeo = ListaChequeoVCT::select(
           'lista_chequeo_v_c_t_s.*',
            'users.name as nombre'
        )->join('users', 'users.id', '=', 'lista_chequeo_v_c_t_s.user_id')->get();

        return datatables()->of($listaChequeo)->toJson();
    }
}
