<?php

namespace App\Http\Livewire\ListaChequeoMiniCrash;

use App\Models\Calificaciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ListaChequeoMiniCrash;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Mini_Crash;
    public $chequeo_Dos_Mini_Crash;
    public $chequeo_Tres_Mini_Crash;
    public $chequeo_Cuatro_Mini_Crash;
    public $chequeo_Cinco_Mini_Crash;
    public $chequeo_Seis_Mini_Crash;
    public $chequeo_Siete_Mini_Crash;
    public $chequeo_Ocho_Mini_Crash;
    public $chequeo_Nueve_Mini_Crash;
    public $chequeo_Diez_Mini_Crash;
    public $chequeo_Once_Mini_Crash;
    public $chequeo_Doce_Mini_Crash;
    public $chequeo_Trece_Mini_Crash;
    public $chequeo_Catorce_Mini_Crash;
    public $chequeo_Quince_Mini_Crash;
    public $chequeo_Dieciseis_Mini_Crash;
    public $chequeo_Diecisiete_Mini_Crash;
    public $chequeo_Dieciocho_Mini_Crash;
    public $chequeo_Diecinueve_Mini_Crash;
    public $chequeo_Veinte_Mini_Crash;
    public $chequeo_Ventiuno_Mini_Crash;
    public $chequeo_Ventidos_Mini_Crash;
    public $chequeo_Ventitres_Mini_Crash;
    public $chequeo_Venticuatro_Mini_Crash;
    public $chequeo_Venticinco_Mini_Crash;
    public $chequeo_Ventiseis_Mini_Crash;
    public $chequeo_Ventisiete_Mini_Crash;
    public $chequeo_Ventiocho_Mini_Crash;
    public $chequeo_Ventinueve_Mini_Crash;
    public $chequeo_Treinta_Mini_Crash;
    public $chequeo_Treintauno_Mini_Crash;
    public $chequeo_Treintados_Mini_Crash;
    public $chequeo_Treintatres_Mini_Crash;
    public $chequeo_Treintacuatro_Mini_Crash;
    public $chequeo_Treintacinco_Mini_Crash;
    public $chequeo_Treintaseis_Mini_Crash;
    public $chequeo_Treintasiete_Mini_Crash;
    public $chequeo_Treintaocho_Mini_Crash;
    public $chequeo_Treintanueve_Mini_Crash;
    public $chequeo_Cuarenta_Mini_Crash;
    public $chequeo_Cuarentauno_Mini_Crash;
    public $chequeo_Cuarentados_Mini_Crash;
    public $chequeo_Cuarentatres_Mini_Crash;
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
    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Mini_Crash' => 'required',
            'chequeo_Dos_Mini_Crash' => 'required',
            'chequeo_Tres_Mini_Crash' => 'required',
            'chequeo_Cuatro_Mini_Crash' => 'required',
            'chequeo_Cinco_Mini_Crash' => 'required',
            'chequeo_Seis_Mini_Crash' => 'required',
            'chequeo_Siete_Mini_Crash' => 'required',
            'chequeo_Ocho_Mini_Crash' => 'required',
            'chequeo_Nueve_Mini_Crash' => 'required',
            'chequeo_Diez_Mini_Crash' => 'required',
            'chequeo_Once_Mini_Crash' => 'required',
            'chequeo_Doce_Mini_Crash' => 'required'
        ],
        2 => [
            'chequeo_Trece_Mini_Crash' => 'required',
            'chequeo_Catorce_Mini_Crash' => 'required',
            'chequeo_Quince_Mini_Crash' => 'required',
            'chequeo_Dieciseis_Mini_Crash' => 'required',
            'chequeo_Diecisiete_Mini_Crash' => 'required',
            'chequeo_Dieciocho_Mini_Crash' => 'required',
            'chequeo_Diecinueve_Mini_Crash' => 'required',
            'chequeo_Veinte_Mini_Crash' => 'required',
            'chequeo_Ventiuno_Mini_Crash' => 'required',
            'chequeo_Ventidos_Mini_Crash' => 'required',
            'chequeo_Ventitres_Mini_Crash' => 'required',
            'chequeo_Venticuatro_Mini_Crash' => 'required',
            'chequeo_Venticinco_Mini_Crash' => 'required'
        ],
        3 => [
            'chequeo_Ventiseis_Mini_Crash' => 'required',
            'chequeo_Ventisiete_Mini_Crash' => 'required',
            'chequeo_Ventiocho_Mini_Crash' => 'required',
            'chequeo_Ventinueve_Mini_Crash' => 'required',
            'chequeo_Treinta_Mini_Crash' => 'required',
            'chequeo_Treintauno_Mini_Crash' => 'required',
            'chequeo_Treintados_Mini_Crash' => 'required',
            'VRN' => 'required',
            'VTR' => 'required',
            'VRS' => 'required',
            'VST' => 'required',
            'chequeo_Treintatres_Mini_Crash' => 'required',
            'chequeo_Treintacuatro_Mini_Crash' => 'required',
            'chequeo_Treintacinco_Mini_Crash' => 'required',
            'chequeo_Treintaseis_Mini_Crash' => 'required'
        ],

        4 => [
            'chequeo_Treintasiete_Mini_Crash' => 'required',
            'chequeo_Treintaocho_Mini_Crash' => 'required',
            'tablero_potencia_voltaje' => 'required',
            'chequeo_Treintanueve_Mini_Crash' => 'required',
            'chequeo_Cuarenta_Mini_Crash' => 'required',
            'chequeo_Cuarentauno_Mini_Crash' => 'required',
            'chequeo_Cuarentados_Mini_Crash' => 'required',
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

            ListaChequeoMiniCrash::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Mini_Crash' => $this->chequeo_Uno_Mini_Crash,
                'chequeo_Dos_Mini_Crash' => $this->chequeo_Dos_Mini_Crash,
                'chequeo_Tres_Mini_Crash' => $this->chequeo_Tres_Mini_Crash,
                'chequeo_Cuatro_Mini_Crash' => $this->chequeo_Cuatro_Mini_Crash,
                'chequeo_Cinco_Mini_Crash' =>  $this->chequeo_Cinco_Mini_Crash,
                'chequeo_Seis_Mini_Crash' => $this->chequeo_Seis_Mini_Crash,
                'chequeo_Siete_Mini_Crash' => $this->chequeo_Siete_Mini_Crash,
                'chequeo_Ocho_Mini_Crash' => $this->chequeo_Ocho_Mini_Crash,
                'chequeo_Nueve_Mini_Crash' => $this->chequeo_Nueve_Mini_Crash,
                'chequeo_Diez_Mini_Crash' => $this->chequeo_Diez_Mini_Crash,
                'chequeo_Once_Mini_Crash' => $this->chequeo_Once_Mini_Crash,
                'chequeo_Doce_Mini_Crash' => $this->chequeo_Doce_Mini_Crash,
                'chequeo_Trece_Mini_Crash' => $this->chequeo_Trece_Mini_Crash,
                'chequeo_Catorce_Mini_Crash' => $this->chequeo_Catorce_Mini_Crash,
                'chequeo_Quince_Mini_Crash' =>  $this->chequeo_Quince_Mini_Crash,
                'chequeo_Dieciseis_Mini_Crash' =>  $this->chequeo_Dieciseis_Mini_Crash,
                'chequeo_Diecisiete_Mini_Crash' =>  $this->chequeo_Diecisiete_Mini_Crash,
                'chequeo_Dieciocho_Mini_Crash' => $this->chequeo_Dieciocho_Mini_Crash,
                'chequeo_Diecinueve_Mini_Crash' => $this->chequeo_Diecinueve_Mini_Crash,
                'chequeo_Veinte_Mini_Crash' => $this->chequeo_Veinte_Mini_Crash,
                'chequeo_Ventiuno_Mini_Crash' => $this->chequeo_Ventiuno_Mini_Crash,
                'chequeo_Ventidos_Mini_Crash' => $this->chequeo_Ventidos_Mini_Crash,
                'chequeo_Ventitres_Mini_Crash' => $this->chequeo_Ventitres_Mini_Crash,
                'chequeo_Venticuatro_Mini_Crash' => $this->chequeo_Venticuatro_Mini_Crash,
                'chequeo_Venticinco_Mini_Crash' => $this->chequeo_Venticinco_Mini_Crash,
                'chequeo_Ventiseis_Mini_Crash' => $this->chequeo_Ventiseis_Mini_Crash,
                'chequeo_Ventisiete_Mini_Crash' => $this->chequeo_Ventisiete_Mini_Crash,
                'chequeo_Ventiocho_Mini_Crash' => $this->chequeo_Ventiocho_Mini_Crash,
                'chequeo_Ventinueve_Mini_Crash' => $this->chequeo_Ventinueve_Mini_Crash,
                'chequeo_Treinta_Mini_Crash' => $this->chequeo_Treinta_Mini_Crash,
                'chequeo_Treintauno_Mini_Crash' => $this->chequeo_Treintauno_Mini_Crash,
                'chequeo_Treintados_Mini_Crash' => $this->chequeo_Treintados_Mini_Crash,
                'chequeo_Treintatres_Mini_Crash' => $this->chequeo_Treintatres_Mini_Crash,
                'chequeo_Treintacuatro_Mini_Crash' => $this->chequeo_Treintacuatro_Mini_Crash,
                'chequeo_Treintacinco_Mini_Crash' => $this->chequeo_Treintacinco_Mini_Crash,
                'chequeo_Treintaseis_Mini_Crash' => $this->chequeo_Treintaseis_Mini_Crash,
                'chequeo_Treintasiete_Mini_Crash' => $this->chequeo_Treintasiete_Mini_Crash,
                'chequeo_Treintaocho_Mini_Crash' => $this->chequeo_Treintaocho_Mini_Crash,
                'chequeo_Treintanueve_Mini_Crash' => $this->chequeo_Treintanueve_Mini_Crash,
                'chequeo_Cuarenta_Mini_Crash' => $this->chequeo_Cuarenta_Mini_Crash,
                'chequeo_Cuarentauno_Mini_Crash' => $this->chequeo_Cuarentauno_Mini_Crash,
                'chequeo_Cuarentados_Mini_Crash' => $this->chequeo_Cuarentados_Mini_Crash,
                'chequeo_Cuarentatres_Mini_Crash' => $this->chequeo_Cuarentatres_Mini_Crash,
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
            return redirect()->to('/listaChequeoMiniCrash');
        } catch (\Exception $e) {
        
        }
    }


    public function render()
    {
        return view('livewire.lista-chequeo-mini-crash.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
