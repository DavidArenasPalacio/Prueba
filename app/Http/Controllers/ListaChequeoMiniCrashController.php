<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoMiniCrashController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoMiniCrash.index');
    }

    public function create()
    {
        return view('listaChequeoMiniCrash.create');
    }
}
