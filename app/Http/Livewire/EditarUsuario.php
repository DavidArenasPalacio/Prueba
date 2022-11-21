<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Cargos;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class EditarUsuario extends Component
{
    public $name;
    public $usuario;
    public $documento;
    public $cargo;
    public $password;
    public $user;

    //Declamos los eventos
    protected $listeners = ['rowActionEvent' => 'editar'];

    public function render()
    {
        $cargos = Cargos::all();
        return view('livewire.editar-usuario', ["cargos" => $cargos]);
    }


    //Mostrar los campos a editar en el formulario
    public function editar(array $datos)
    {
        $this->reset();
        $this->user = User::findOrFail($datos['id']);
        if($this->user != null){
            $this->name =  $this->user->name;
            $this->usuario = $this->user->usuario;
            $this->documento = $this->user->documento;
            $this->cargo = $this->user->cargo_id;
        }
       
    }

    public function update()
    {
        $this->validate([
            "name" => ['required', 'min:3'],
            "usuario" => ['required', 'unique:users,usuario,' . $this->user->id, 'min:3'],
            "documento" => ['required', 'numeric', 'unique:users,documento,' .  $this->user->id, 'digits_between:6,12'],
            'cargo' => 'required'
        ]);
        
        try {
            //Guardar cabios 
            $this->user->name = $this->name;
            $this->user->usuario =  $this->usuario;
            $this->user->documento = $this->documento;
            $this->user->cargo_id = $this->cargo;

            if (strlen($this->password)) {
                $this->user->password = Hash::make($this->password);
            }

            $this->user->save();

            //Mandanto un evento a la clase userTabel para refrescar la tabla
            $this->emit('refresh');

            //Mensaje al usuario 
            $this->dispatchBrowserEvent('success', ['message' => 'El empleado ' . $this->name . ' fue editado exitosamente']);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Error al editar  al empleado ' . $this->name]);
        }
    }

}
