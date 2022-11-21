<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoTrenMiticoController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoTrenMitico.index');
    }

    public function create()
    {
        return view('listaChequeoTrenMitico.create');
    }
}
