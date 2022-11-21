<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ListarUsuarios extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.listar-usuarios', ['usuarios' => $usuarios]);
    }
}
