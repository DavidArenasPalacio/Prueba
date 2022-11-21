<?php

namespace App\Http\Livewire\ListaChequeoVCT;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use Illuminate\Support\Carbon;
use App\Models\ListaChequeoVCT;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_VCT;
    public $chequeo_Dos_VCT;
    public $chequeo_Tres_VCT;
    public $chequeo_Cuatro_VCT;
    public $chequeo_Cinco_VCT;
    public $chequeo_Seis_VCT;
    public $chequeo_Siete_VCT;
    public $chequeo_Ocho_VCT;
    public $chequeo_Nueve_VCT;
    public $chequeo_Diez_VCT;
    public $chequeo_Once_VCT;
    public $chequeo_Doce_VCT;
    public $chequeo_Trece_VCT;
    public $chequeo_Catorce_VCT;
    public $chequeo_Quince_VCT;
    public $chequeo_Dieciseis_VCT;
    public $chequeo_Diecisiete_VCT;
    public $chequeo_Dieciocho_VCT;
    public $chequeo_Diecinueve_VCT;
    public $chequeo_Veinte_VCT;
    public $chequeo_Ventiuno_VCT;
    public $chequeo_Ventidos_VCT;
    public $chequeo_Ventitres_VCT;
    public $chequeo_Venticuatro_VCT;
    public $chequeo_Venticinco_VCT;
    public $chequeo_Ventiseis_VCT;
    public $chequeo_Ventisiete_VCT;
    public $chequeo_Ventiocho_VCT;
    public $chequeo_Ventinueve_VCT;
    public $chequeo_Treinta_VCT;
    public $chequeo_Treintauno_VCT;
    public $chequeo_Treintados_VCT;
    public $chequeo_Treintatres_VCT;
    public $chequeo_Treintacuatro_VCT;
    public $chequeo_Treintacinco_VCT;
    public $chequeo_Treintaseis_VCT;
    public $chequeo_Treintasiete_VCT;
    public $chequeo_Treintaocho_VCT;
    public $chequeo_Treintanueve_VCT;
    public $chequeo_Cuarenta_VCT;
    public $chequeo_Cuarentauno_VCT;
    public $chequeo_Cuarentados_VCT;
    public $chequeo_Cuarentatres_VCT;
    public $chequeo_Cuarentacuatro_VCT;
    public $chequeo_Cuarentacinco_VCT;
    public $chequeo_Cuarentaseis_VCT;
    public $chequeo_Cuarentasiete_VCT;
    public $chequeo_Cuarentaocho_VCT;
    public $chequeo_Cuarentanueve_VCT;
    public $chequeo_Cincuenta_VCT;
    public $chequeo_Cincuentauno_VCT;
    public $chequeo_Cincuentados_VCT;
    public $chequeo_Cincuentatres_VCT;
    public $chequeo_Cincuentacuatro_VCT;
    public $chequeo_Cincuentacinco_VCT;
    public $chequeo_Cincuentaseis_VCT;
    public $chequeo_Cincuentasiete_VCT;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 5;
    public $success;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_VCT' => 'required',
            'chequeo_Dos_VCT' => 'required',
            'chequeo_Tres_VCT' => 'required',
            'chequeo_Cuatro_VCT' => 'required',
            'chequeo_Cinco_VCT' => 'required',
            'chequeo_Seis_VCT' => 'required',
            'chequeo_Siete_VCT' => 'required',
            'chequeo_Ocho_VCT' => 'required',
            'chequeo_Nueve_VCT' => 'required',
            'chequeo_Diez_VCT' => 'required',
            'chequeo_Once_VCT' => 'required',
            'chequeo_Doce_VCT' => 'required',
            'chequeo_Trece_VCT' => 'required',
            'chequeo_Catorce_VCT' => 'required'
        ],
        2 => [
            'chequeo_Quince_VCT' => 'required',
            'chequeo_Dieciseis_VCT' => 'required',
            'chequeo_Diecisiete_VCT' => 'required',
            'chequeo_Dieciocho_VCT' => 'required',
            'chequeo_Diecinueve_VCT' => 'required',
            'chequeo_Veinte_VCT' => 'required',
            'chequeo_Ventiuno_VCT' => 'required',
            'chequeo_Ventidos_VCT' => 'required',
            'chequeo_Ventitres_VCT' => 'required',
            'chequeo_Venticuatro_VCT' => 'required',
            'chequeo_Venticinco_VCT' => 'required',
            'chequeo_Ventiseis_VCT' => 'required',
            'chequeo_Ventisiete_VCT' => 'required',
            'chequeo_Ventiocho_VCT' => 'required',
        ],
        3 => [
            'chequeo_Ventinueve_VCT' => 'required',
            'chequeo_Treinta_VCT' => 'required',
            'chequeo_Treintauno_VCT' => 'required',
            'chequeo_Treintados_VCT' => 'required',
            'chequeo_Treintatres_VCT' => 'required',
            'chequeo_Treintacuatro_VCT' => 'required',
            'chequeo_Treintacinco_VCT' => 'required',
            'chequeo_Treintaseis_VCT' => 'required',
            'chequeo_Treintasiete_VCT' => 'required',
            'chequeo_Treintaocho_VCT' => 'required',
            'chequeo_Treintanueve_VCT' => 'required',
            'chequeo_Cuarenta_VCT' => 'required',
        ],

        4 => [
            'chequeo_Cuarentauno_VCT' => 'required',
            'chequeo_Cuarentados_VCT' => 'required',
            'chequeo_Cuarentatres_VCT' => 'required',
            'chequeo_Cuarentacuatro_VCT' => 'required',
            'chequeo_Cuarentacinco_VCT' => 'required',
            'chequeo_Cuarentaseis_VCT' => 'required',
            'chequeo_Cuarentasiete_VCT' => 'required',
            'chequeo_Cuarentaocho_VCT' => 'required',
            'chequeo_Cuarentanueve_VCT' => 'required',
            'chequeo_Cincuenta_VCT' => 'required',
            'chequeo_Cincuentauno_VCT' => 'required',
            'chequeo_Cincuentados_VCT' => 'required',
            'chequeo_Cincuentatres_VCT' => 'required',
        ],

        5 => [
            'chequeo_Cincuentacuatro_VCT' => 'required',
            'chequeo_Cincuentacinco_VCT' => 'required',
            'chequeo_Cincuentaseis_VCT' => 'required',
            'chequeo_Cincuentasiete_VCT' => 'required',
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

            ListaChequeoVCT::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_VCT' => $this->chequeo_Uno_VCT,
                'chequeo_Dos_VCT' => $this->chequeo_Dos_VCT,
                'chequeo_Tres_VCT' => $this->chequeo_Tres_VCT,
                'chequeo_Cuatro_VCT' => $this->chequeo_Cuatro_VCT,
                'chequeo_Cinco_VCT' =>  $this->chequeo_Cinco_VCT,
                'chequeo_Seis_VCT' => $this->chequeo_Seis_VCT,
                'chequeo_Siete_VCT' => $this->chequeo_Siete_VCT,
                'chequeo_Ocho_VCT' => $this->chequeo_Ocho_VCT,
                'chequeo_Nueve_VCT' => $this->chequeo_Nueve_VCT,
                'chequeo_Diez_VCT' => $this->chequeo_Diez_VCT,
                'chequeo_Once_VCT' => $this->chequeo_Once_VCT,
                'chequeo_Doce_VCT' => $this->chequeo_Doce_VCT,
                'chequeo_Trece_VCT' => $this->chequeo_Trece_VCT,
                'chequeo_Catorce_VCT' => $this->chequeo_Catorce_VCT,
                'chequeo_Quince_VCT' =>  $this->chequeo_Quince_VCT,
                'chequeo_Dieciseis_VCT' =>  $this->chequeo_Dieciseis_VCT,
                'chequeo_Diecisiete_VCT' =>  $this->chequeo_Diecisiete_VCT,
                'chequeo_Dieciocho_VCT' => $this->chequeo_Dieciocho_VCT,
                'chequeo_Diecinueve_VCT' => $this->chequeo_Diecinueve_VCT,
                'chequeo_Veinte_VCT' => $this->chequeo_Veinte_VCT,
                'chequeo_Ventiuno_VCT' => $this->chequeo_Ventiuno_VCT,
                'chequeo_Ventidos_VCT' => $this->chequeo_Ventidos_VCT,
                'chequeo_Ventitres_VCT' => $this->chequeo_Ventitres_VCT,
                'chequeo_Venticuatro_VCT' => $this->chequeo_Venticuatro_VCT,
                'chequeo_Venticinco_VCT' => $this->chequeo_Venticinco_VCT,
                'chequeo_Ventiseis_VCT' => $this->chequeo_Ventiseis_VCT,
                'chequeo_Ventisiete_VCT' => $this->chequeo_Ventisiete_VCT,
                'chequeo_Ventiocho_VCT' => $this->chequeo_Ventiocho_VCT,
                'chequeo_Ventinueve_VCT' => $this->chequeo_Ventinueve_VCT,
                'chequeo_Treinta_VCT' => $this->chequeo_Treinta_VCT,
                'chequeo_Treintauno_VCT' => $this->chequeo_Treintauno_VCT,
                'chequeo_Treintados_VCT' => $this->chequeo_Treintados_VCT,
                'chequeo_Treintatres_VCT' => $this->chequeo_Treintatres_VCT,
                'chequeo_Treintacuatro_VCT' => $this->chequeo_Treintacuatro_VCT,
                'chequeo_Treintacinco_VCT' => $this->chequeo_Treintacinco_VCT,
                'chequeo_Treintaseis_VCT' => $this->chequeo_Treintaseis_VCT,
                'chequeo_Treintasiete_VCT' => $this->chequeo_Treintasiete_VCT,
                'chequeo_Treintaocho_VCT' => $this->chequeo_Treintaocho_VCT,
                'chequeo_Treintanueve_VCT' => $this->chequeo_Treintanueve_VCT,
                'chequeo_Cuarenta_VCT' => $this->chequeo_Cuarenta_VCT,
                'chequeo_Cuarentauno_VCT' => $this->chequeo_Cuarentauno_VCT,
                'chequeo_Cuarentados_VCT' => $this->chequeo_Cuarentados_VCT,
                'chequeo_Cuarentatres_VCT' => $this->chequeo_Cuarentatres_VCT,
                'chequeo_Cuarentacuatro_VCT' => $this->chequeo_Cuarentacuatro_VCT,
                'chequeo_Cuarentacinco_VCT' => $this->chequeo_Cuarentacinco_VCT,
                'chequeo_Cuarentaseis_VCT' => $this->chequeo_Cuarentaseis_VCT,
                'chequeo_Cuarentasiete_VCT' => $this->chequeo_Cuarentasiete_VCT,
                'chequeo_Cuarentaocho_VCT' => $this->chequeo_Cuarentaocho_VCT,
                'chequeo_Cuarentanueve_VCT' => $this->chequeo_Cuarentanueve_VCT,
                'chequeo_Cincuenta_VCT' => $this->chequeo_Cincuenta_VCT,
                'chequeo_Cincuentauno_VCT' => $this->chequeo_Cincuentauno_VCT,
                'chequeo_Cincuentados_VCT' => $this->chequeo_Cincuentados_VCT,
                'chequeo_Cincuentatres_VCT' => $this->chequeo_Cincuentatres_VCT,
                'chequeo_Cincuentacuatro_VCT' => $this->chequeo_Cincuentacuatro_VCT,
                'chequeo_Cincuentacinco_VCT' => $this->chequeo_Cincuentacinco_VCT,
                'chequeo_Cincuentaseis_VCT' => $this->chequeo_Cincuentaseis_VCT,
                'chequeo_Cincuentasiete_VCT' => $this->chequeo_Cincuentasiete_VCT,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoVCT');
        } catch (\Exception $e) {
        }
    }


    public function render()
    {
        return view('livewire.lista-chequeo-v-c-t.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
