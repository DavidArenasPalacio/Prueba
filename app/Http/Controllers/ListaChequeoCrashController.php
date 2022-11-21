<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaChequeoCrashController extends Controller
{
    //
    public function index()
    {
        return view('listaChequeoCrash.index');
    }

    public function create()
    {
        return view('listaChequeoCrash.create');
    }

}
