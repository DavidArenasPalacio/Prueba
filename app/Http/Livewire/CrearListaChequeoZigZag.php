<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Imagenes;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoZigZag;

class CrearListaChequeoZigZag extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_ZigZag;
    public $chequeo_Dos_ZigZag;
    public $chequeo_Tres_ZigZag;
    public $chequeo_Cuatro_ZigZag;
    public $chequeo_Cinco_ZigZag;
    public $chequeo_Seis_ZigZag;
    public $chequeo_Siete_ZigZag;
    public $chequeo_Ocho_ZigZag;
    public $chequeo_Nueve_ZigZag;
    public $chequeo_Diez_ZigZag;
    public $chequeo_Once_ZigZag;
    public $chequeo_Doce_ZigZag;
    public $observaciones;
    public $imagen;
    public $hora_fin;
    public $rules = [
        'hora_inicio' => 'required',
        'chequeo_Uno_ZigZag' => 'required',
        'chequeo_Dos_ZigZag' => 'required',
        'chequeo_Tres_ZigZag' => 'required',
        'chequeo_Cuatro_ZigZag' => 'required',
        'chequeo_Cinco_ZigZag' => 'required',
        'chequeo_Seis_ZigZag' => 'required',
        'chequeo_Siete_ZigZag' => 'required',
        'chequeo_Ocho_ZigZag' => 'required',
        'chequeo_Nueve_ZigZag' => 'required',
        'chequeo_Diez_ZigZag' => 'required',
        'chequeo_Once_ZigZag' => 'required',
        'chequeo_Doce_ZigZag' => 'required',
        'observaciones' => 'required',
        'hora_fin' => 'required',
    ];


    public function store()
    {
        $datos =  $this->validate();
        try {

            //Crear Imagen 
            $imagen = '';
            if( $this->imagen){
                $imageName = time() . '.' . $this->imagen->getClientOriginalExtension();
                $imagen =  $this->imagen->storeAs('imagenesInpeccion', $imageName, 'public_uploads');
                $imagen = str_replace('imagenesInpeccion/', '', $imagen);
            }
         
                

            //Crear la lista de chuequeo Zig Zag
            ListaChequeoZigZag::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $datos['hora_inicio'],
                'chequeo_Uno_ZigZag' => $datos['chequeo_Uno_ZigZag'],
                'chequeo_Dos_ZigZag' => $datos['chequeo_Dos_ZigZag'],
                'chequeo_Tres_ZigZag' => $datos['chequeo_Tres_ZigZag'],
                'chequeo_Cuatro_ZigZag' => $datos['chequeo_Cuatro_ZigZag'],
                'chequeo_Cinco_ZigZag' => $datos['chequeo_Cinco_ZigZag'],
                'chequeo_Seis_ZigZag' => $datos['chequeo_Seis_ZigZag'],
                'chequeo_Siete_ZigZag' => $datos['chequeo_Siete_ZigZag'],
                'chequeo_Ocho_ZigZag' => $datos['chequeo_Ocho_ZigZag'],
                'chequeo_Nueve_ZigZag' => $datos['chequeo_Nueve_ZigZag'],
                'chequeo_Diez_ZigZag' => $datos['chequeo_Diez_ZigZag'],
                'chequeo_Once_ZigZag' => $datos['chequeo_Once_ZigZag'],
                'chequeo_Doce_ZigZag' => $datos['chequeo_Doce_ZigZag'],
                'observaciones' => $datos['observaciones'],
                'hora_Fin' => $datos['hora_fin'],
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoZigzag');
        } catch (\Exception $e) {
            //Mensaje al usuario de error
        }
    }

    public function render()
    {
        $calificaciones = Calificaciones::all();
        return view('livewire.crear-lista-chequeo-zig-zag', ['calificaciones' => $calificaciones]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

 
}
