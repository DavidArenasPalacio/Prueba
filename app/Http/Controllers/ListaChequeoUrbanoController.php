<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoUrbanoController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoUrbano.index');
    }

    public function create()
    {
        return view('listaChequeoUrbano.create');
    }
}
