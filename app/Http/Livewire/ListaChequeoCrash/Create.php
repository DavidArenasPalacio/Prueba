<?php

namespace App\Http\Livewire\ListaChequeoCrash;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoCrash;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Crash;
    public $chequeo_Dos_Crash;
    public $chequeo_Tres_Crash;
    public $chequeo_Cuatro_Crash;
    public $chequeo_Cinco_Crash;
    public $chequeo_Seis_Crash;
    public $chequeo_Siete_Crash;
    public $chequeo_Ocho_Crash;
    public $chequeo_Nueve_Crash;
    public $chequeo_Diez_Crash;
    public $chequeo_Once_Crash;
    public $chequeo_Doce_Crash;
    public $chequeo_Trece_Crash;
    public $chequeo_Catorce_Crash;
    public $chequeo_Quince_Crash;
    public $chequeo_Dieciseis_Crash;
    public $chequeo_Diecisiete_Crash;
    public $chequeo_Dieciocho_Crash;
    public $chequeo_Diecinueve_Crash;
    public $chequeo_Veinte_Crash;
    public $chequeo_Ventiuno_Crash;
    public $chequeo_Ventidos_Crash;
    public $chequeo_Ventitres_Crash;
    public $chequeo_Venticuatro_Crash;
    public $chequeo_Venticinco_Crash;
    public $chequeo_Ventiseis_Crash;
    public $chequeo_Ventisiete_Crash;
    public $chequeo_Ventiocho_Crash;
    public $chequeo_Ventinueve_Crash;
    public $chequeo_Treinta_Crash;
    public $chequeo_Treintauno_Crash;
    public $chequeo_Treintados_Crash;
    public $chequeo_Treintatres_Crash;
    public $chequeo_Treintacuatro_Crash;
    public $chequeo_Treintacinco_Crash;
    public $chequeo_Treintaseis_Crash;
    public $chequeo_Treintasiete_Crash;
    public $chequeo_Treintaocho_Crash;
    public $chequeo_Treintanueve_Crash;
    public $chequeo_Cuarenta_Crash;
    public $chequeo_Cuarentauno_Crash;
    public $chequeo_Cuarentados_Crash;
    public $chequeo_Cuarentatres_Crash;
    public $tablero_potencia_voltaje;
    public $observaciones;
    public $hora_fin;
    public $imagen;
    public $VRN;
    public $VTR;
    public $VRS;
    public $VST;
    public $currentPage = 1;
    public $totalSteps = 4;
    public $success;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Crash' => 'required',
            'chequeo_Dos_Crash' => 'required',
            'chequeo_Tres_Crash' => 'required',
            'chequeo_Cuatro_Crash' => 'required',
            'chequeo_Cinco_Crash' => 'required',
            'chequeo_Seis_Crash' => 'required',
            'chequeo_Siete_Crash' => 'required',
            'chequeo_Ocho_Crash' => 'required',
            'chequeo_Nueve_Crash' => 'required',
            'chequeo_Diez_Crash' => 'required',
            'chequeo_Once_Crash' => 'required',
            'chequeo_Doce_Crash' => 'required',
            'chequeo_Trece_Crash' => 'required'
        ],
        2 => [
            'chequeo_Catorce_Crash' => 'required',
            'chequeo_Quince_Crash' => 'required',
            'chequeo_Dieciseis_Crash' => 'required',
            'chequeo_Diecisiete_Crash' => 'required',
            'chequeo_Dieciocho_Crash' => 'required',
            'chequeo_Diecinueve_Crash' => 'required',
            'chequeo_Veinte_Crash' => 'required',
            'chequeo_Ventiuno_Crash' => 'required',
            'chequeo_Ventidos_Crash' => 'required',
            'chequeo_Ventitres_Crash' => 'required',
            'chequeo_Venticuatro_Crash' => 'required',
            'chequeo_Venticinco_Crash' => 'required'
        ],
        3 => [
            'chequeo_Ventiseis_Crash' => 'required',
            'chequeo_Ventisiete_Crash' => 'required',
            'chequeo_Ventiocho_Crash' => 'required',
            'chequeo_Ventinueve_Crash' => 'required',
            'chequeo_Treinta_Crash' => 'required',
            'chequeo_Treintauno_Crash' => 'required',
            'chequeo_Treintados_Crash' => 'required',
            'VRN' => 'required',
            'VTR' => 'required',
            'VRS' => 'required',
            'VST' => 'required',
            'chequeo_Treintatres_Crash' => 'required',
            'chequeo_Treintacuatro_Crash' => 'required',
            'chequeo_Treintacinco_Crash' => 'required',
            'chequeo_Treintaseis_Crash' => 'required',
            'chequeo_Treintasiete_Crash' => 'required',
        ],

        4 => [
            'chequeo_Treintaocho_Crash' => 'required',
            'chequeo_Treintanueve_Crash' => 'required',
            'tablero_potencia_voltaje' => 'required',
            'chequeo_Cuarenta_Crash' => 'required',
            'chequeo_Cuarentauno_Crash' => 'required',
            'chequeo_Cuarentados_Crash' => 'required',
            'chequeo_Cuarentatres_Crash' => 'required',
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

    public function render()
    {
        return view('livewire.lista-chequeo-crash.create', ['calificaciones' => Calificaciones::all()]);
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

            ListaChequeoCrash::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Crash' => $this->chequeo_Uno_Crash,
                'chequeo_Dos_Crash' => $this->chequeo_Dos_Crash,
                'chequeo_Tres_Crash' => $this->chequeo_Tres_Crash,
                'chequeo_Cuatro_Crash' => $this->chequeo_Cuatro_Crash,
                'chequeo_Cinco_Crash' =>  $this->chequeo_Cinco_Crash,
                'chequeo_Seis_Crash' => $this->chequeo_Seis_Crash,
                'chequeo_Siete_Crash' => $this->chequeo_Siete_Crash,
                'chequeo_Ocho_Crash' => $this->chequeo_Ocho_Crash,
                'chequeo_Nueve_Crash' => $this->chequeo_Nueve_Crash,
                'chequeo_Diez_Crash' => $this->chequeo_Diez_Crash,
                'chequeo_Once_Crash' => $this->chequeo_Once_Crash,
                'chequeo_Doce_Crash' => $this->chequeo_Doce_Crash,
                'chequeo_Trece_Crash' => $this->chequeo_Trece_Crash,
                'chequeo_Catorce_Crash' => $this->chequeo_Catorce_Crash,
                'chequeo_Quince_Crash' =>  $this->chequeo_Quince_Crash,
                'chequeo_Dieciseis_Crash' =>  $this->chequeo_Dieciseis_Crash,
                'chequeo_Diecisiete_Crash' =>  $this->chequeo_Diecisiete_Crash,
                'chequeo_Dieciocho_Crash' => $this->chequeo_Dieciocho_Crash,
                'chequeo_Diecinueve_Crash' => $this->chequeo_Diecinueve_Crash,
                'chequeo_Veinte_Crash' => $this->chequeo_Veinte_Crash,
                'chequeo_Ventiuno_Crash' => $this->chequeo_Ventiuno_Crash,
                'chequeo_Ventidos_Crash' => $this->chequeo_Ventidos_Crash,
                'chequeo_Ventitres_Crash' => $this->chequeo_Ventitres_Crash,
                'chequeo_Venticuatro_Crash' => $this->chequeo_Venticuatro_Crash,
                'chequeo_Venticinco_Crash' => $this->chequeo_Venticinco_Crash,
                'chequeo_Ventiseis_Crash' => $this->chequeo_Ventiseis_Crash,
                'chequeo_Ventisiete_Crash' => $this->chequeo_Ventisiete_Crash,
                'chequeo_Ventiocho_Crash' => $this->chequeo_Ventiocho_Crash,
                'chequeo_Ventinueve_Crash' => $this->chequeo_Ventinueve_Crash,
                'chequeo_Treinta_Crash' => $this->chequeo_Treinta_Crash,
                'chequeo_Treintauno_Crash' => $this->chequeo_Treintauno_Crash,
                'chequeo_Treintados_Crash' => $this->chequeo_Treintados_Crash,
                'chequeo_Treintatres_Crash' => $this->chequeo_Treintatres_Crash,
                'chequeo_Treintacuatro_Crash' => $this->chequeo_Treintacuatro_Crash,
                'chequeo_Treintacinco_Crash' => $this->chequeo_Treintacinco_Crash,
                'chequeo_Treintaseis_Crash' => $this->chequeo_Treintaseis_Crash,
                'chequeo_Treintasiete_Crash' => $this->chequeo_Treintasiete_Crash,
                'chequeo_Treintaocho_Crash' => $this->chequeo_Treintaocho_Crash,
                'chequeo_Treintanueve_Crash' => $this->chequeo_Treintanueve_Crash,
                'chequeo_Cuarenta_Crash' => $this->chequeo_Cuarenta_Crash,
                'chequeo_Cuarentauno_Crash' => $this->chequeo_Cuarentauno_Crash,
                'chequeo_Cuarentados_Crash' => $this->chequeo_Cuarentados_Crash,
                'chequeo_Cuarentatres_Crash' => $this->chequeo_Cuarentatres_Crash,
                'VRN' => $this->VRN,
                'VTR' => $this->VTR,
                'VRS' => $this->VRS,
                'VST' => $this->VST,
                'tablero_potencia_voltaje' => $this->tablero_potencia_voltaje,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoCrash');
        } catch (\Exception $e) {
        
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
