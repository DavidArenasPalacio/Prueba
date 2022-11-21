<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoKamikazeController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoKamikaze.index');
    }

    public function create()
    {
        return view('listaChequeoKamikaze.create');
    }
}
