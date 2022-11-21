<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoSimuladorExtremoController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoSimuladorExtremo.index');
    }

    public function create()
    {
        return view('listaChequeoSimuladorExtremo.create');
    }
}
