<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoSimuladorFantasiaController extends Controller
{
    //
    public function index()
    {
        return view("ListaChequeoSimuladorFantasia.index");
    }

    public function create()
    {
        return view("ListaChequeoSimuladorFantasia.create");
    }
}
