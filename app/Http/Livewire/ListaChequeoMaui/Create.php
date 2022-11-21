<?php

namespace App\Http\Livewire\ListaChequeoMaui;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoMaui;

class Create extends Component
{

    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Maui;
    public $chequeo_Dos_Maui;
    public $chequeo_Tres_Maui;
    public $chequeo_Cuatro_Maui;
    public $chequeo_Cinco_Maui;
    public $chequeo_Seis_Maui;
    public $chequeo_Siete_Maui;
    public $chequeo_Ocho_Maui;
    public $chequeo_Nueve_Maui;
    public $chequeo_Diez_Maui;
    public $chequeo_Once_Maui;
    public $chequeo_Doce_Maui;
    public $chequeo_Trece_Maui;
    public $chequeo_Catorce_Maui;
    public $chequeo_Quince_Maui;
    public $chequeo_Dieciseis_Maui;
    public $chequeo_Diecisiete_Maui;
    public $chequeo_Dieciocho_Maui;
    public $chequeo_Diecinueve_Maui;
    public $chequeo_Veinte_Maui;
    public $chequeo_Ventiuno_Maui;
    public $chequeo_Ventidos_Maui;
    public $chequeo_Ventitres_Maui;
    public $chequeo_Venticuatro_Maui;
    public $chequeo_Venticinco_Maui;
    public $chequeo_Ventiseis_Maui;
    public $chequeo_Ventisiete_Maui;
    public $chequeo_Ventiocho_Maui;
    public $chequeo_Ventinueve_Maui;
    public $chequeo_Treinta_Maui;
    public $chequeo_Treintauno_Maui;
    public $chequeo_Treintados_Maui;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 2;


    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Maui' => 'required',
            'chequeo_Dos_Maui' => 'required',
            'chequeo_Tres_Maui' => 'required',
            'chequeo_Cuatro_Maui' => 'required',
            'chequeo_Cinco_Maui' => 'required',
            'chequeo_Seis_Maui' => 'required',
            'chequeo_Siete_Maui' => 'required',
            'chequeo_Ocho_Maui' => 'required',
            'chequeo_Nueve_Maui' => 'required',
            'chequeo_Diez_Maui' => 'required',
            'chequeo_Once_Maui' => 'required',
            'chequeo_Doce_Maui' => 'required',
            'chequeo_Trece_Maui' => 'required',
            'chequeo_Catorce_Maui' => 'required',
        ],
        2 => [
            'chequeo_Quince_Maui' => 'required',
            'chequeo_Dieciseis_Maui' => 'required',
            'chequeo_Diecisiete_Maui' => 'required',
            'chequeo_Dieciocho_Maui' => 'required',
            'chequeo_Diecinueve_Maui' => 'required',
            'chequeo_Veinte_Maui' => 'required',
            'chequeo_Ventiuno_Maui' => 'required',
            'chequeo_Ventidos_Maui' => 'required',
            'chequeo_Ventitres_Maui' => 'required',
            'chequeo_Venticuatro_Maui' => 'required',
            'chequeo_Venticinco_Maui' => 'required',
            'hora_fin' => 'required'
        ],
    ];


    public function  mount()
    {
        $this->currentPage = 1;
    }

    public function goToNextPage()
    {
        $this->resetValidation();
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
        if ($this->currentPage > $this->totalSteps) {
            $this->currentPage = $this->currentPage;
        }
    }

    public function goToPreviousPage()
    {
        $this->resetValidation();
        $this->currentPage--;
        if ($this->currentPage < 1) {
            $this->currentPage = 1;
        }
    }


    public function render()
    {
        return view('livewire.lista-chequeo-maui.create', ['calificaciones' =>  Calificaciones::all()]);
    }

    public function store()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        try {
            //Crear Imagen 
            $imagen = '';
            if ($this->imagen) {
                $imageName = time() . '.' . $this->imagen->getClientOriginalExtension();
                $imagen =  $this->imagen->storeAs('imagenesInspeccion', $imageName, 'public_uploads');
                $imagen = str_replace('imagenesInspeccion/', '', $imagen);
            }

            ListaChequeoMaui::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Maui' => $this->chequeo_Uno_Maui,
                'chequeo_Dos_Maui' => $this->chequeo_Dos_Maui,
                'chequeo_Tres_Maui' => $this->chequeo_Tres_Maui,
                'chequeo_Cuatro_Maui' => $this->chequeo_Cuatro_Maui,
                'chequeo_Cinco_Maui' =>  $this->chequeo_Cinco_Maui,
                'chequeo_Seis_Maui' => $this->chequeo_Seis_Maui,
                'chequeo_Siete_Maui' => $this->chequeo_Siete_Maui,
                'chequeo_Ocho_Maui' => $this->chequeo_Ocho_Maui,
                'chequeo_Nueve_Maui' => $this->chequeo_Nueve_Maui,
                'chequeo_Diez_Maui' => $this->chequeo_Diez_Maui,
                'chequeo_Once_Maui' => $this->chequeo_Once_Maui,
                'chequeo_Doce_Maui' => $this->chequeo_Doce_Maui,
                'chequeo_Trece_Maui' => $this->chequeo_Trece_Maui,
                'chequeo_Catorce_Maui' => $this->chequeo_Catorce_Maui,
                'chequeo_Quince_Maui' =>  $this->chequeo_Quince_Maui,
                'chequeo_Dieciseis_Maui' =>  $this->chequeo_Dieciseis_Maui,
                'chequeo_Diecisiete_Maui' =>  $this->chequeo_Diecisiete_Maui,
                'chequeo_Dieciocho_Maui' => $this->chequeo_Dieciocho_Maui,
                'chequeo_Diecinueve_Maui' => $this->chequeo_Diecinueve_Maui,
                'chequeo_Veinte_Maui' => $this->chequeo_Veinte_Maui,
                'chequeo_Ventiuno_Maui' => $this->chequeo_Ventiuno_Maui,
                'chequeo_Ventidos_Maui' => $this->chequeo_Ventidos_Maui,
                'chequeo_Ventitres_Maui' => $this->chequeo_Ventitres_Maui,
                'chequeo_Venticuatro_Maui' => $this->chequeo_Venticuatro_Maui,
                'chequeo_Venticinco_Maui' => $this->chequeo_Venticinco_Maui,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoSimuladorExtremo');
        } catch (\Exception $e) {
        }   
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
