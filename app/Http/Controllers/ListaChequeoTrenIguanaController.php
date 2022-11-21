<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoTrenIguanaController extends Controller
{
    //

    public function index(){
        return view('listaChequeoTrenIguana.index');
    }
    

    public function create(){
        return view('listaChequeoTrenIguana.create');
    }
}
