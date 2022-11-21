<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoPolarController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoPolar.index');
    }

    public function create()
    {
        return view('listaChequeoPolar.create');
    }
}
