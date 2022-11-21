<?php

namespace App\Http\Livewire\ListaChequeoUrbano;

use App\Models\Calificaciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ListaChequeoUrbano;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Urbano;
    public $chequeo_Dos_Urbano;
    public $chequeo_Tres_Urbano;
    public $chequeo_Cuatro_Urbano;
    public $chequeo_Cinco_Urbano;
    public $chequeo_Seis_Urbano;
    public $chequeo_Siete_Urbano;
    public $chequeo_Ocho_Urbano;
    public $chequeo_Nueve_Urbano;
    public $chequeo_Diez_Urbano;
    public $chequeo_Once_Urbano;
    public $chequeo_Doce_Urbano;
    public $chequeo_Trece_Urbano;
    public $chequeo_Catorce_Urbano;
    public $chequeo_Quince_Urbano;
    public $chequeo_Dieciseis_Urbano;
    public $chequeo_Diecisiete_Urbano;
    public $chequeo_Dieciocho_Urbano;
    public $chequeo_Diecinueve_Urbano;
    public $chequeo_Veinte_Urbano;
    public $chequeo_Ventiuno_Urbano;
    public $chequeo_Ventidos_Urbano;
    public $chequeo_Ventitres_Urbano;
    public $chequeo_Venticuatro_Urbano;
    public $chequeo_Venticinco_Urbano;
    public $chequeo_Ventiseis_Urbano;
    public $chequeo_Ventisiete_Urbano;
    public $chequeo_Ventiocho_Urbano;
    public $chequeo_Ventinueve_Urbano;
    public $chequeo_Treinta_Urbano;
    public $chequeo_Treintauno_Urbano;
    public $chequeo_Treintados_Urbano;
    public $chequeo_Treintatres_Urbano;
    public $chequeo_Treintacuatro_Urbano;
    public $chequeo_Treintacinco_Urbano;
    public $chequeo_Treintaseis_Urbano;
    public $chequeo_Treintasiete_Urbano;
    public $chequeo_Treintaocho_Urbano;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;
    public $success;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Urbano' => 'required',
            'chequeo_Dos_Urbano' => 'required',
            'chequeo_Tres_Urbano' => 'required',
            'chequeo_Cuatro_Urbano' => 'required',
            'chequeo_Cinco_Urbano' => 'required',
            'chequeo_Seis_Urbano' => 'required',
            'chequeo_Siete_Urbano' => 'required',
            'chequeo_Ocho_Urbano' => 'required',
            'chequeo_Nueve_Urbano' => 'required',
            'chequeo_Diez_Urbano' => 'required',
            'chequeo_Once_Urbano' => 'required',
            'chequeo_Doce_Urbano' => 'required',
            'chequeo_Trece_Urbano' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Urbano' => 'required',
            'chequeo_Quince_Urbano' => 'required',
            'chequeo_Dieciseis_Urbano' => 'required',
            'chequeo_Diecisiete_Urbano' => 'required',
            'chequeo_Dieciocho_Urbano' => 'required',
            'chequeo_Diecinueve_Urbano' => 'required',
            'chequeo_Veinte_Urbano' => 'required',
            'chequeo_Ventiuno_Urbano' => 'required',
            'chequeo_Ventidos_Urbano' => 'required',
            'chequeo_Ventitres_Urbano' => 'required',
            'chequeo_Venticuatro_Urbano' => 'required',
            'chequeo_Venticinco_Urbano' => 'required',
            'chequeo_Ventiseis_Urbano' => 'required',
            'chequeo_Ventisiete_Urbano' => 'required',
        ],
        3 => [
            'chequeo_Ventiocho_Urbano' => 'required',
            'chequeo_Ventinueve_Urbano' => 'required',
            'chequeo_Treinta_Urbano' => 'required',
            'chequeo_Treintauno_Urbano' => 'required',
            'chequeo_Treintados_Urbano' => 'required',
            'chequeo_Treintatres_Urbano' => 'required',
            'chequeo_Treintacuatro_Urbano' => 'required',
            'chequeo_Treintacinco_Urbano' => 'required',
            'chequeo_Treintaseis_Urbano' => 'required',
            'chequeo_Treintasiete_Urbano' => 'required',
            'chequeo_Treintaocho_Urbano' => 'required',
            'hora_fin' => 'required'
        ]
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

            ListaChequeoUrbano::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Urbano' => $this->chequeo_Uno_Urbano,
                'chequeo_Dos_Urbano' => $this->chequeo_Dos_Urbano,
                'chequeo_Tres_Urbano' => $this->chequeo_Tres_Urbano,
                'chequeo_Cuatro_Urbano' => $this->chequeo_Cuatro_Urbano,
                'chequeo_Cinco_Urbano' =>  $this->chequeo_Cinco_Urbano,
                'chequeo_Seis_Urbano' => $this->chequeo_Seis_Urbano,
                'chequeo_Siete_Urbano' => $this->chequeo_Siete_Urbano,
                'chequeo_Ocho_Urbano' => $this->chequeo_Ocho_Urbano,
                'chequeo_Nueve_Urbano' => $this->chequeo_Nueve_Urbano,
                'chequeo_Diez_Urbano' => $this->chequeo_Diez_Urbano,
                'chequeo_Once_Urbano' => $this->chequeo_Once_Urbano,
                'chequeo_Doce_Urbano' => $this->chequeo_Doce_Urbano,
                'chequeo_Trece_Urbano' => $this->chequeo_Trece_Urbano,
                'chequeo_Catorce_Urbano' => $this->chequeo_Catorce_Urbano,
                'chequeo_Quince_Urbano' =>  $this->chequeo_Quince_Urbano,
                'chequeo_Dieciseis_Urbano' =>  $this->chequeo_Dieciseis_Urbano,
                'chequeo_Diecisiete_Urbano' =>  $this->chequeo_Diecisiete_Urbano,
                'chequeo_Dieciocho_Urbano' => $this->chequeo_Dieciocho_Urbano,
                'chequeo_Diecinueve_Urbano' => $this->chequeo_Diecinueve_Urbano,
                'chequeo_Veinte_Urbano' => $this->chequeo_Veinte_Urbano,
                'chequeo_Ventiuno_Urbano' => $this->chequeo_Ventiuno_Urbano,
                'chequeo_Ventidos_Urbano' => $this->chequeo_Ventidos_Urbano,
                'chequeo_Ventitres_Urbano' => $this->chequeo_Ventitres_Urbano,
                'chequeo_Venticuatro_Urbano' => $this->chequeo_Venticuatro_Urbano,
                'chequeo_Venticinco_Urbano' => $this->chequeo_Venticinco_Urbano,
                'chequeo_Ventiseis_Urbano' => $this->chequeo_Ventiseis_Urbano,
                'chequeo_Ventisiete_Urbano' => $this->chequeo_Ventisiete_Urbano,
                'chequeo_Ventiocho_Urbano' => $this->chequeo_Ventiocho_Urbano,
                'chequeo_Ventinueve_Urbano' => $this->chequeo_Ventinueve_Urbano,
                'chequeo_Treinta_Urbano' => $this->chequeo_Treinta_Urbano,
                'chequeo_Treintauno_Urbano' => $this->chequeo_Treintauno_Urbano,
                'chequeo_Treintados_Urbano' => $this->chequeo_Treintados_Urbano,
                'chequeo_Treintatres_Urbano' => $this->chequeo_Treintatres_Urbano,
                'chequeo_Treintacuatro_Urbano' => $this->chequeo_Treintacuatro_Urbano,
                'chequeo_Treintacinco_Urbano' => $this->chequeo_Treintacinco_Urbano,
                'chequeo_Treintaseis_Urbano' => $this->chequeo_Treintaseis_Urbano,
                'chequeo_Treintasiete_Urbano' => $this->chequeo_Treintasiete_Urbano,
                'chequeo_Treintaocho_Urbano' => $this->chequeo_Treintaocho_Urbano,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoUrbano');
        } catch (\Exception $e) {
      
        }
    }
    
    public function render()
    {
        return view('livewire.lista-chequeo-urbano.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
