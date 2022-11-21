<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function index()
    {
        return view('usuarios.index');
    }

    public function usuarios(){
        $usuarios = User::select('name', 'usuario', 'documento', 'cargos.cargo as cargo')->join('cargos', 'cargos.id', '=', 'users.cargo_id')->get();
        return datatables()->of($usuarios)
        ->addColumn('acciones', function($usuarios){
            return '<a class="bg-indigo-500 cursor-pointer px-4 p-2 text-white  rounded text-sm mr-5" ><i class="fas fa-edit"></i>
          </a>'.'  '. '<a class="bg-red-500  cursor-pointer px-4 p-2 text-white  rounded text-sm"><i class="fas fa-trash-alt"></i>
          </a>';
        })
        ->rawColumns(['acciones'])
        ->toJson();
    }
}
