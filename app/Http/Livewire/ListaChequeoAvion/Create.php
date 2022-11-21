<?php

namespace App\Http\Livewire\ListaChequeoAvion;

use App\Models\Calificaciones;
use App\Models\ListaChequeoAvion;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Avion;
    public $chequeo_Dos_Avion;
    public $chequeo_Tres_Avion;
    public $chequeo_Cuatro_Avion;
    public $chequeo_Cinco_Avion;
    public $chequeo_Seis_Avion;
    public $chequeo_Siete_Avion;
    public $chequeo_Ocho_Avion;
    public $chequeo_Nueve_Avion;
    public $chequeo_Diez_Avion;
    public $chequeo_Once_Avion;
    public $chequeo_Doce_Avion;
    public $chequeo_Trece_Avion;
    public $chequeo_Catorce_Avion;
    public $chequeo_Quince_Avion;
    public $chequeo_Dieciseis_Avion;
    public $chequeo_Diecisiete_Avion;
    public $chequeo_Dieciocho_Avion;
    public $chequeo_Diecinueve_Avion;
    public $chequeo_Veinte_Avion;
    public $chequeo_Ventiuno_Avion;
    public $chequeo_Ventidos_Avion;
    public $chequeo_Ventitres_Avion;
    public $chequeo_Venticuatro_Avion;
    public $chequeo_Venticinco_Avion;
    public $chequeo_Ventiseis_Avion;
    public $chequeo_Ventisiete_Avion;
    public $chequeo_Ventiocho_Avion;
    public $chequeo_Ventinueve_Avion;
    public $chequeo_Treinta_Avion;
    public $chequeo_Treintauno_Avion;
    public $chequeo_Treintados_Avion;
    public $chequeo_Treintatres_Avion;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Avion' => 'required',
            'chequeo_Dos_Avion' => 'required',
            'chequeo_Tres_Avion' => 'required',
            'chequeo_Cuatro_Avion' => 'required',
            'chequeo_Cinco_Avion' => 'required',
            'chequeo_Seis_Avion' => 'required',
            'chequeo_Siete_Avion' => 'required',
            'chequeo_Ocho_Avion' => 'required',
            'chequeo_Nueve_Avion' => 'required',
            'chequeo_Diez_Avion' => 'required',
            'chequeo_Once_Avion' => 'required',
            'chequeo_Doce_Avion' => 'required',
            'chequeo_Trece_Avion' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Avion' => 'required',
            'chequeo_Quince_Avion' => 'required',
            'chequeo_Dieciseis_Avion' => 'required',
            'chequeo_Diecisiete_Avion' => 'required',
            'chequeo_Dieciocho_Avion' => 'required',
            'chequeo_Diecinueve_Avion' => 'required',
            'chequeo_Veinte_Avion' => 'required',
            'chequeo_Ventiuno_Avion' => 'required',
            'chequeo_Ventidos_Avion' => 'required',
            'chequeo_Ventitres_Avion' => 'required',
            'chequeo_Venticuatro_Avion' => 'required',
            'chequeo_Venticinco_Avion' => 'required',
            'chequeo_Ventiseis_Avion' => 'required',
        ],
        3 => [
            'chequeo_Ventisiete_Avion' => 'required',
            'chequeo_Ventiocho_Avion' => 'required',
            'chequeo_Ventinueve_Avion' => 'required',
            'chequeo_Treinta_Avion' => 'required',
            'chequeo_Treintauno_Avion' => 'required',
            'chequeo_Treintados_Avion' => 'required',
            'chequeo_Treintatres_Avion' => 'required',
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
        return view('livewire.lista-chequeo-avion.create', ['calificaciones' => Calificaciones::all()]);
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

            ListaChequeoAvion::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Avion' => $this->chequeo_Uno_Avion,
                'chequeo_Dos_Avion' => $this->chequeo_Dos_Avion,
                'chequeo_Tres_Avion' => $this->chequeo_Tres_Avion,
                'chequeo_Cuatro_Avion' => $this->chequeo_Cuatro_Avion,
                'chequeo_Cinco_Avion' =>  $this->chequeo_Cinco_Avion,
                'chequeo_Seis_Avion' => $this->chequeo_Seis_Avion,
                'chequeo_Siete_Avion' => $this->chequeo_Siete_Avion,
                'chequeo_Ocho_Avion' => $this->chequeo_Ocho_Avion,
                'chequeo_Nueve_Avion' => $this->chequeo_Nueve_Avion,
                'chequeo_Diez_Avion' => $this->chequeo_Diez_Avion,
                'chequeo_Once_Avion' => $this->chequeo_Once_Avion,
                'chequeo_Doce_Avion' => $this->chequeo_Doce_Avion,
                'chequeo_Trece_Avion' => $this->chequeo_Trece_Avion,
                'chequeo_Catorce_Avion' => $this->chequeo_Catorce_Avion,
                'chequeo_Quince_Avion' =>  $this->chequeo_Quince_Avion,
                'chequeo_Dieciseis_Avion' =>  $this->chequeo_Dieciseis_Avion,
                'chequeo_Diecisiete_Avion' =>  $this->chequeo_Diecisiete_Avion,
                'chequeo_Dieciocho_Avion' => $this->chequeo_Dieciocho_Avion,
                'chequeo_Diecinueve_Avion' => $this->chequeo_Diecinueve_Avion,
                'chequeo_Veinte_Avion' => $this->chequeo_Veinte_Avion,
                'chequeo_Ventiuno_Avion' => $this->chequeo_Ventiuno_Avion,
                'chequeo_Ventidos_Avion' => $this->chequeo_Ventidos_Avion,
                'chequeo_Ventitres_Avion' => $this->chequeo_Ventitres_Avion,
                'chequeo_Venticuatro_Avion' => $this->chequeo_Venticuatro_Avion,
                'chequeo_Venticinco_Avion' => $this->chequeo_Venticinco_Avion,
                'chequeo_Ventiseis_Avion' => $this->chequeo_Ventiseis_Avion,
                'chequeo_Ventisiete_Avion' => $this->chequeo_Ventisiete_Avion,
                'chequeo_Ventiocho_Avion' => $this->chequeo_Ventiocho_Avion,
                'chequeo_Ventinueve_Avion' => $this->chequeo_Ventinueve_Avion,
                'chequeo_Treinta_Avion' => $this->chequeo_Treinta_Avion,
                'chequeo_Treintauno_Avion' => $this->chequeo_Treintauno_Avion,
                'chequeo_Treintados_Avion' => $this->chequeo_Treintados_Avion,
                'chequeo_Treintatres_Avion' => $this->chequeo_Treintatres_Avion,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]); 

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoAvion');
        } catch (\Exception $e) {
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
