<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoMauiController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoMaui.index');
    }

    public function create()
    {
        return view('listaChequeoMaui.create');
    }
}
