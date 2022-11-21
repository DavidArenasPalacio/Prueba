<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoCanopyController extends Controller
{
    //
    public function index()
    {
        return view('listachequeoCanopy.index');
    }

    public function create()
    {
        return view('listachequeoCanopy.create');
    }
}
