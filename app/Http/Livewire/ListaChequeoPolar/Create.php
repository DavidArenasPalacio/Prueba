<?php

namespace App\Http\Livewire\ListaChequeoPolar;

use App\Models\Calificaciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ListaChequeoPolar;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Polar;
    public $chequeo_Dos_Polar;
    public $chequeo_Tres_Polar;
    public $chequeo_Cuatro_Polar;
    public $chequeo_Cinco_Polar;
    public $chequeo_Seis_Polar;
    public $chequeo_Siete_Polar;
    public $chequeo_Ocho_Polar;
    public $chequeo_Nueve_Polar;
    public $chequeo_Diez_Polar;
    public $chequeo_Once_Polar;
    public $chequeo_Doce_Polar;
    public $chequeo_Trece_Polar;
    public $chequeo_Catorce_Polar;
    public $chequeo_Quince_Polar;
    public $chequeo_Dieciseis_Polar;
    public $chequeo_Diecisiete_Polar;
    public $chequeo_Dieciocho_Polar;
    public $chequeo_Diecinueve_Polar;

    public $observaciones;
    public $hora_fin;
    public $imagen;

    protected $rules = [
        'hora_inicio' => 'required',
        'chequeo_Uno_Polar' => 'required',
        'chequeo_Dos_Polar' => 'required',
        'chequeo_Tres_Polar' => 'required',
        'chequeo_Cuatro_Polar' => 'required',
        'chequeo_Cinco_Polar' => 'required',
        'chequeo_Seis_Polar' => 'required',
        'chequeo_Siete_Polar' => 'required',
        'chequeo_Ocho_Polar' => 'required',
        'chequeo_Nueve_Polar' => 'required',
        'chequeo_Diez_Polar' => 'required',
        'chequeo_Once_Polar' => 'required',
        'chequeo_Doce_Polar' => 'required',
        'chequeo_Trece_Polar' => 'required',
        'chequeo_Catorce_Polar' => 'required',
        'chequeo_Quince_Polar' => 'required',
        'chequeo_Dieciseis_Polar' => 'required',
        'chequeo_Diecisiete_Polar' => 'required',
        'chequeo_Dieciocho_Polar' => 'required',
        'chequeo_Diecinueve_Polar' => 'required',
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

            ListaChequeoPolar::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Polar' => $this->chequeo_Uno_Polar,
                'chequeo_Dos_Polar' => $this->chequeo_Dos_Polar,
                'chequeo_Tres_Polar' => $this->chequeo_Tres_Polar,
                'chequeo_Cuatro_Polar' => $this->chequeo_Cuatro_Polar,
                'chequeo_Cinco_Polar' =>  $this->chequeo_Cinco_Polar,
                'chequeo_Seis_Polar' => $this->chequeo_Seis_Polar,
                'chequeo_Siete_Polar' => $this->chequeo_Siete_Polar,
                'chequeo_Ocho_Polar' => $this->chequeo_Ocho_Polar,
                'chequeo_Nueve_Polar' => $this->chequeo_Nueve_Polar,
                'chequeo_Diez_Polar' => $this->chequeo_Diez_Polar,
                'chequeo_Once_Polar' => $this->chequeo_Once_Polar,
                'chequeo_Doce_Polar' => $this->chequeo_Doce_Polar,
                'chequeo_Trece_Polar' => $this->chequeo_Trece_Polar,
                'chequeo_Catorce_Polar' => $this->chequeo_Catorce_Polar,
                'chequeo_Quince_Polar' =>  $this->chequeo_Quince_Polar,
                'chequeo_Dieciseis_Polar' =>  $this->chequeo_Dieciseis_Polar,
                'chequeo_Diecisiete_Polar' =>  $this->chequeo_Diecisiete_Polar,
                'chequeo_Dieciocho_Polar' => $this->chequeo_Dieciocho_Polar,
                'chequeo_Diecinueve_Polar' => $this->chequeo_Diecinueve_Polar,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoPolar');
        } catch (\Exception $e) {
        }   
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.lista-chequeo-polar.create', ['calificaciones' => Calificaciones::all()]);
    }
}
