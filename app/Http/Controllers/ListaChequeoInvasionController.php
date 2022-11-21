<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoInvasionController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoInvasion.index');
    }

    public function create()
    {
        return view('listaChequeoInvasion.create');
    }
}
