<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoAvionController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoAvion.index');
    }

    public function create()
    {
        return view('listaChequeoAvion.create');
    }
}
