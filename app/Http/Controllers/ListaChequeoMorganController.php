<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoMorganController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoMorgan.index');
    }

    public function create()
    {
        return view('listaChequeoMorgan.create');
    }
}
