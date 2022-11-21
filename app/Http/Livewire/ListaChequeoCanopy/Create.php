<?php

namespace App\Http\Livewire\ListaChequeoCanopy;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoCanopy;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Canopy;
    public $chequeo_Dos_Canopy;
    public $chequeo_Tres_Canopy;
    public $chequeo_Cuatro_Canopy;
    public $chequeo_Cinco_Canopy;
    public $chequeo_Seis_Canopy;
    public $chequeo_Siete_Canopy;
    public $chequeo_Ocho_Canopy;
    public $chequeo_Nueve_Canopy;
    public $chequeo_Diez_Canopy;
    public $chequeo_Once_Canopy;
    public $chequeo_Doce_Canopy;
    public $chequeo_Trece_Canopy;
    public $chequeo_Catorce_Canopy;
    public $chequeo_Quince_Canopy;
    public $chequeo_Dieciseis_Canopy;
    public $chequeo_Diecisiete_Canopy;
    public $chequeo_Dieciocho_Canopy;
    public $chequeo_Diecinueve_Canopy;
    public $chequeo_Veinte_Canopy;
    public $chequeo_Ventiuno_Canopy;
    public $chequeo_Ventidos_Canopy;
    public $chequeo_Ventitres_Canopy;
    public $chequeo_Venticuatro_Canopy;
    public $chequeo_Venticinco_Canopy;
    public $chequeo_Ventiseis_Canopy;
    public $chequeo_Ventisiete_Canopy;
    public $chequeo_Ventiocho_Canopy;
    public $chequeo_Ventinueve_Canopy;
    public $chequeo_Treinta_Canopy;
    public $chequeo_Treintauno_Canopy;
    public $chequeo_Treintados_Canopy;
    public $chequeo_Treintatres_Canopy;
    public $chequeo_Treintacuatro_Canopy;
    public $chequeo_Treintacinco_Canopy;
    public $chequeo_Treintaseis_Canopy;
    public $chequeo_Treintasiete_Canopy;
    public $chequeo_Treintaocho_Canopy;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Canopy' => 'required',
            'chequeo_Dos_Canopy' => 'required',
            'chequeo_Tres_Canopy' => 'required',
            'chequeo_Cuatro_Canopy' => 'required',
            'chequeo_Cinco_Canopy' => 'required',
            'chequeo_Seis_Canopy' => 'required',
            'chequeo_Siete_Canopy' => 'required',
            'chequeo_Ocho_Canopy' => 'required',
            'chequeo_Nueve_Canopy' => 'required',
            'chequeo_Diez_Canopy' => 'required',
            'chequeo_Once_Canopy' => 'required',
            'chequeo_Doce_Canopy' => 'required',
            'chequeo_Trece_Canopy' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Canopy' => 'required',
            'chequeo_Quince_Canopy' => 'required',
            'chequeo_Dieciseis_Canopy' => 'required',
            'chequeo_Diecisiete_Canopy' => 'required',
            'chequeo_Dieciocho_Canopy' => 'required',
            'chequeo_Diecinueve_Canopy' => 'required',
            'chequeo_Veinte_Canopy' => 'required',
            'chequeo_Ventiuno_Canopy' => 'required',
            'chequeo_Ventidos_Canopy' => 'required',
            'chequeo_Ventitres_Canopy' => 'required',
            'chequeo_Venticuatro_Canopy' => 'required',
            'chequeo_Venticinco_Canopy' => 'required',
        ],
        3 => [
            'chequeo_Ventiseis_Canopy' => 'required',
            'chequeo_Ventisiete_Canopy' => 'required',
            'chequeo_Ventiocho_Canopy' => 'required',
            'chequeo_Ventinueve_Canopy' => 'required',
            'chequeo_Treinta_Canopy' => 'required',
            'chequeo_Treintauno_Canopy' => 'required',
            'chequeo_Treintados_Canopy' => 'required',
            'chequeo_Treintatres_Canopy' => 'required',
            'chequeo_Treintacuatro_Canopy' => 'required',
            'chequeo_Treintacinco_Canopy' => 'required',
            'chequeo_Treintaseis_Canopy' => 'required',
            'chequeo_Treintasiete_Canopy' => 'required',
            'chequeo_Treintaocho_Canopy' => 'required',
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

            ListaChequeoCanopy::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Canopy' => $this->chequeo_Uno_Canopy,
                'chequeo_Dos_Canopy' => $this->chequeo_Dos_Canopy,
                'chequeo_Tres_Canopy' => $this->chequeo_Tres_Canopy,
                'chequeo_Cuatro_Canopy' => $this->chequeo_Cuatro_Canopy,
                'chequeo_Cinco_Canopy' =>  $this->chequeo_Cinco_Canopy,
                'chequeo_Seis_Canopy' => $this->chequeo_Seis_Canopy,
                'chequeo_Siete_Canopy' => $this->chequeo_Siete_Canopy,
                'chequeo_Ocho_Canopy' => $this->chequeo_Ocho_Canopy,
                'chequeo_Nueve_Canopy' => $this->chequeo_Nueve_Canopy,
                'chequeo_Diez_Canopy' => $this->chequeo_Diez_Canopy,
                'chequeo_Once_Canopy' => $this->chequeo_Once_Canopy,
                'chequeo_Doce_Canopy' => $this->chequeo_Doce_Canopy,
                'chequeo_Trece_Canopy' => $this->chequeo_Trece_Canopy,
                'chequeo_Catorce_Canopy' => $this->chequeo_Catorce_Canopy,
                'chequeo_Quince_Canopy' =>  $this->chequeo_Quince_Canopy,
                'chequeo_Dieciseis_Canopy' =>  $this->chequeo_Dieciseis_Canopy,
                'chequeo_Diecisiete_Canopy' =>  $this->chequeo_Diecisiete_Canopy,
                'chequeo_Dieciocho_Canopy' => $this->chequeo_Dieciocho_Canopy,
                'chequeo_Diecinueve_Canopy' => $this->chequeo_Diecinueve_Canopy,
                'chequeo_Veinte_Canopy' => $this->chequeo_Veinte_Canopy,
                'chequeo_Ventiuno_Canopy' => $this->chequeo_Ventiuno_Canopy,
                'chequeo_Ventidos_Canopy' => $this->chequeo_Ventidos_Canopy,
                'chequeo_Ventitres_Canopy' => $this->chequeo_Ventitres_Canopy,
                'chequeo_Venticuatro_Canopy' => $this->chequeo_Venticuatro_Canopy,
                'chequeo_Venticinco_Canopy' => $this->chequeo_Venticinco_Canopy,
                'chequeo_Ventiseis_Canopy' => $this->chequeo_Ventiseis_Canopy,
                'chequeo_Ventisiete_Canopy' => $this->chequeo_Ventisiete_Canopy,
                'chequeo_Ventiocho_Canopy' => $this->chequeo_Ventiocho_Canopy,
                'chequeo_Ventinueve_Canopy' => $this->chequeo_Ventinueve_Canopy,
                'chequeo_Treinta_Canopy' => $this->chequeo_Treinta_Canopy,
                'chequeo_Treintauno_Canopy' => $this->chequeo_Treintauno_Canopy,
                'chequeo_Treintados_Canopy' => $this->chequeo_Treintados_Canopy,
                'chequeo_Treintatres_Canopy' => $this->chequeo_Treintatres_Canopy,
                'chequeo_Treintacuatro_Canopy' => $this->chequeo_Treintacuatro_Canopy,
                'chequeo_Treintacinco_Canopy' => $this->chequeo_Treintacinco_Canopy,
                'chequeo_Treintaseis_Canopy' => $this->chequeo_Treintaseis_Canopy,
                'chequeo_Treintasiete_Canopy' => $this->chequeo_Treintasiete_Canopy,
                'chequeo_Treintaocho_Canopy' => $this->chequeo_Treintaocho_Canopy,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoCanopy');
        } catch (\Exception $e) {
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-canopy.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
