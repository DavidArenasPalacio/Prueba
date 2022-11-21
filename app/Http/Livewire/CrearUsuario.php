<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Cargos;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class CrearUsuario extends Component
{
    public $name;
    public $usuario;
    public $documento;
    public $cargo;
    public $password;



    public $rules = [
        "name" => 'required|regex:/^[a-zA-Z\s]+$/u|min:3',
        "usuario" => 'required|unique:users|regex:/^[a-zA-Z\s]+$/u|min:3',
        "documento" => 'required|numeric|unique:users|digits_between:6,12',
        "password" => 'required',
        'cargo' => 'required'
    ];

    public function render()
    {
        $cargos = Cargos::all();
        return view('livewire.crear-usuario', ['cargos' => $cargos]);
    }

    
    public function crearUsuario()
    {
        $datos = $this->validate();

        try {
            $datos['usuario'] = Str::slug($datos['usuario'], "");

            User::create([
                'name' => $datos['name'],
                'usuario' => $datos['usuario'],
                'documento' => $datos['documento'],
                'password' => Hash::make($datos['password']),
                'cargo_id' => $datos['cargo']
            ]);

            $this->reset();
            $this->dispatchBrowserEvent('alert', ['message' => 'El empleado ' . $datos['name'] . ' fue creado exitosamente']);
        } catch (\Exception $e) {
            $this->reset();
            $this->dispatchBrowserEvent('error', ['message' => 'Error al crear  un empleado']);
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

}
