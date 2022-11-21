<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoEspacioInfinitoController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoEspacioInfinito.index');
    }

    public function create()
    {
        return view('listaChequeoEspacioInfinito.create');
    }
}
