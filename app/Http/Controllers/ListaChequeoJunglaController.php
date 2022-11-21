<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoJunglaController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoJungla.index');
    }

    public function create()
    {
        return view('listaChequeoJungla.create');
    }
}
