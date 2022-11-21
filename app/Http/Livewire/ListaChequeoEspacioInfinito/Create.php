<?php

namespace App\Http\Livewire\ListaChequeoEspacioInfinito;

use App\Models\Calificaciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ListaChequeoEspacioInfinito;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Espacio_Infinito;
    public $chequeo_Dos_Espacio_Infinito;
    public $chequeo_Tres_Espacio_Infinito;
    public $chequeo_Cuatro_Espacio_Infinito;
    public $chequeo_Cinco_Espacio_Infinito;
    public $chequeo_Seis_Espacio_Infinito;
    public $chequeo_Siete_Espacio_Infinito;
    public $chequeo_Ocho_Espacio_Infinito;
    public $chequeo_Nueve_Espacio_Infinito;
    public $chequeo_Diez_Espacio_Infinito;
    public $chequeo_Once_Espacio_Infinito;
    public $chequeo_Doce_Espacio_Infinito;
    public $chequeo_Trece_Espacio_Infinito;

    public $observaciones;
    public $hora_fin;
    public $imagen;

    protected $rules = [
        'hora_inicio' => 'required',
        'chequeo_Uno_Espacio_Infinito' => 'required',
        'chequeo_Dos_Espacio_Infinito' => 'required',
        'chequeo_Tres_Espacio_Infinito' => 'required',
        'chequeo_Cuatro_Espacio_Infinito' => 'required',
        'chequeo_Cinco_Espacio_Infinito' => 'required',
        'chequeo_Seis_Espacio_Infinito' => 'required',
        'chequeo_Siete_Espacio_Infinito' => 'required',
        'chequeo_Ocho_Espacio_Infinito' => 'required',
        'chequeo_Nueve_Espacio_Infinito' => 'required',
        'chequeo_Diez_Espacio_Infinito' => 'required',
        'chequeo_Once_Espacio_Infinito' => 'required',
        'chequeo_Doce_Espacio_Infinito' => 'required',
        'chequeo_Trece_Espacio_Infinito' => 'required',
        'hora_fin' => 'required'
    ];


    public function store()
    {
      
        $this->validate();
      
        try {
            //Crear Imagen 
            $imagen = '';
            if ($this->imagen) {
                $imageName = time() . '.' . $this->imagen->getClientOriginalExtension();
                $imagen =  $this->imagen->storeAs('imagenesInspeccion', $imageName, 'public_uploads');
                $imagen = str_replace('imagenesInspeccion/', '', $imagen);
            }

            ListaChequeoEspacioInfinito::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Espacio_Infinito' => $this->chequeo_Uno_Espacio_Infinito,
                'chequeo_Dos_Espacio_Infinito' => $this->chequeo_Dos_Espacio_Infinito,
                'chequeo_Tres_Espacio_Infinito' => $this->chequeo_Tres_Espacio_Infinito,
                'chequeo_Cuatro_Espacio_Infinito' => $this->chequeo_Cuatro_Espacio_Infinito,
                'chequeo_Cinco_Espacio_Infinito' =>  $this->chequeo_Cinco_Espacio_Infinito,
                'chequeo_Seis_Espacio_Infinito' => $this->chequeo_Seis_Espacio_Infinito,
                'chequeo_Siete_Espacio_Infinito' => $this->chequeo_Siete_Espacio_Infinito,
                'chequeo_Ocho_Espacio_Infinito' => $this->chequeo_Ocho_Espacio_Infinito,
                'chequeo_Nueve_Espacio_Infinito' => $this->chequeo_Nueve_Espacio_Infinito,
                'chequeo_Diez_Espacio_Infinito' => $this->chequeo_Diez_Espacio_Infinito,
                'chequeo_Once_Espacio_Infinito' => $this->chequeo_Once_Espacio_Infinito,
                'chequeo_Doce_Espacio_Infinito' => $this->chequeo_Doce_Espacio_Infinito,
                'chequeo_Trece_Espacio_Infinito' => $this->chequeo_Trece_Espacio_Infinito,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoEspacioInfinito');
        } catch (\Exception $e) {
        }   
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.lista-chequeo-espacio-infinito.create', ['calificaciones' => Calificaciones::all()]);
    }
}
