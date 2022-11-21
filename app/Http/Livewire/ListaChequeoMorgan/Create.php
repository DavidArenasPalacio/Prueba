<?php

namespace App\Http\Livewire\ListaChequeoMorgan;

use App\Models\Calificaciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ListaChequeoMorgan;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Morgan;
    public $chequeo_Dos_Morgan;
    public $chequeo_Tres_Morgan;
    public $chequeo_Cuatro_Morgan;
    public $chequeo_Cinco_Morgan;
    public $chequeo_Seis_Morgan;
    public $chequeo_Siete_Morgan;
    public $chequeo_Ocho_Morgan;
    public $chequeo_Nueve_Morgan;
    public $chequeo_Diez_Morgan;
    public $chequeo_Once_Morgan;
    public $chequeo_Doce_Morgan;
    public $chequeo_Trece_Morgan;
    public $chequeo_Catorce_Morgan;
    public $chequeo_Quince_Morgan;
    public $chequeo_Dieciseis_Morgan;
    public $chequeo_Diecisiete_Morgan;
    public $chequeo_Dieciocho_Morgan;
    public $chequeo_Diecinueve_Morgan;
    public $chequeo_Veinte_Morgan;
    public $chequeo_Ventiuno_Morgan;
    public $chequeo_Ventidos_Morgan;
    public $chequeo_Ventitres_Morgan;
    public $chequeo_Venticuatro_Morgan;
    public $chequeo_Venticinco_Morgan;
    public $chequeo_Ventiseis_Morgan;
    public $chequeo_Ventisiete_Morgan;
    public $chequeo_Ventiocho_Morgan;
    public $chequeo_Ventinueve_Morgan;
    public $chequeo_Treinta_Morgan;
    public $chequeo_Treintauno_Morgan;
    public $chequeo_Treintados_Morgan;
    public $chequeo_Treintatres_Morgan;
    public $chequeo_Treintacuatro_Morgan;
    public $chequeo_Treintacinco_Morgan;
    public $chequeo_Treintaseis_Morgan;
    public $chequeo_Treintasiete_Morgan;
    public $chequeo_Treintaocho_Morgan;
    public $chequeo_Treintanueve_Morgan;
    public $chequeo_Cuarenta_Morgan;
    public $chequeo_Cuarentauno_Morgan;
    public $chequeo_Cuarentados_Morgan;
    public $chequeo_Cuarentatres_Morgan;
    public $chequeo_Cuarentacuatro_Morgan;
    public $chequeo_Cuarentacinco_Morgan;
    public $chequeo_Cuarentaseis_Morgan;
    public $observaciones;
    public $hora_fin;
    public $imagen;
    public $currentPage = 1;
    public $totalSteps = 4;
    public $success;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Morgan' => 'required',
            'chequeo_Dos_Morgan' => 'required',
            'chequeo_Tres_Morgan' => 'required',
            'chequeo_Cuatro_Morgan' => 'required',
            'chequeo_Cinco_Morgan' => 'required',
            'chequeo_Seis_Morgan' => 'required',
            'chequeo_Siete_Morgan' => 'required',
            'chequeo_Ocho_Morgan' => 'required',
            'chequeo_Nueve_Morgan' => 'required',
            'chequeo_Diez_Morgan' => 'required',
            'chequeo_Once_Morgan' => 'required',
            'chequeo_Doce_Morgan' => 'required',
            'chequeo_Trece_Morgan' => 'required'
        ],
        2 => [
            'chequeo_Catorce_Morgan' => 'required',
            'chequeo_Quince_Morgan' => 'required',
            'chequeo_Dieciseis_Morgan' => 'required',
            'chequeo_Diecisiete_Morgan' => 'required',
            'chequeo_Dieciocho_Morgan' => 'required',
            'chequeo_Diecinueve_Morgan' => 'required',
            'chequeo_Veinte_Morgan' => 'required',
            'chequeo_Ventiuno_Morgan' => 'required',
            'chequeo_Ventidos_Morgan' => 'required',
            'chequeo_Ventitres_Morgan' => 'required',
            'chequeo_Venticuatro_Morgan' => 'required',
            'chequeo_Venticinco_Morgan' => 'required',
            'chequeo_Ventiseis_Morgan' => 'required',
            'chequeo_Ventisiete_Morgan' => 'required',
        ],
        3 => [
            'chequeo_Ventiocho_Morgan' => 'required',
            'chequeo_Ventinueve_Morgan' => 'required',
            'chequeo_Treinta_Morgan' => 'required',
            'chequeo_Treintauno_Morgan' => 'required',
            'chequeo_Treintados_Morgan' => 'required',
            'chequeo_Treintatres_Morgan' => 'required',
            'chequeo_Treintacuatro_Morgan' => 'required',
            'chequeo_Treintacinco_Morgan' => 'required',
            'chequeo_Treintaseis_Morgan' => 'required',
            'chequeo_Treintasiete_Morgan' => 'required',
            'chequeo_Treintaocho_Morgan' => 'required',
            'chequeo_Treintanueve_Morgan' => 'required',
            'chequeo_Cuarenta_Morgan' => 'required',
        ],

        4 => [
            'chequeo_Cuarentauno_Morgan' => 'required',
            'chequeo_Cuarentados_Morgan' => 'required',
            'chequeo_Cuarentatres_Morgan' => 'required',
            'chequeo_Cuarentacuatro_Morgan' => 'required',
            'chequeo_Cuarentacinco_Morgan' => 'required',
            'chequeo_Cuarentaseis_Morgan' => 'required',
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

            ListaChequeoMorgan::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Morgan' => $this->chequeo_Uno_Morgan,
                'chequeo_Dos_Morgan' => $this->chequeo_Dos_Morgan,
                'chequeo_Tres_Morgan' => $this->chequeo_Tres_Morgan,
                'chequeo_Cuatro_Morgan' => $this->chequeo_Cuatro_Morgan,
                'chequeo_Cinco_Morgan' =>  $this->chequeo_Cinco_Morgan,
                'chequeo_Seis_Morgan' => $this->chequeo_Seis_Morgan,
                'chequeo_Siete_Morgan' => $this->chequeo_Siete_Morgan,
                'chequeo_Ocho_Morgan' => $this->chequeo_Ocho_Morgan,
                'chequeo_Nueve_Morgan' => $this->chequeo_Nueve_Morgan,
                'chequeo_Diez_Morgan' => $this->chequeo_Diez_Morgan,
                'chequeo_Once_Morgan' => $this->chequeo_Once_Morgan,
                'chequeo_Doce_Morgan' => $this->chequeo_Doce_Morgan,
                'chequeo_Trece_Morgan' => $this->chequeo_Trece_Morgan,
                'chequeo_Catorce_Morgan' => $this->chequeo_Catorce_Morgan,
                'chequeo_Quince_Morgan' =>  $this->chequeo_Quince_Morgan,
                'chequeo_Dieciseis_Morgan' =>  $this->chequeo_Dieciseis_Morgan,
                'chequeo_Diecisiete_Morgan' =>  $this->chequeo_Diecisiete_Morgan,
                'chequeo_Dieciocho_Morgan' => $this->chequeo_Dieciocho_Morgan,
                'chequeo_Diecinueve_Morgan' => $this->chequeo_Diecinueve_Morgan,
                'chequeo_Veinte_Morgan' => $this->chequeo_Veinte_Morgan,
                'chequeo_Ventiuno_Morgan' => $this->chequeo_Ventiuno_Morgan,
                'chequeo_Ventidos_Morgan' => $this->chequeo_Ventidos_Morgan,
                'chequeo_Ventitres_Morgan' => $this->chequeo_Ventitres_Morgan,
                'chequeo_Venticuatro_Morgan' => $this->chequeo_Venticuatro_Morgan,
                'chequeo_Venticinco_Morgan' => $this->chequeo_Venticinco_Morgan,
                'chequeo_Ventiseis_Morgan' => $this->chequeo_Ventiseis_Morgan,
                'chequeo_Ventisiete_Morgan' => $this->chequeo_Ventisiete_Morgan,
                'chequeo_Ventiocho_Morgan' => $this->chequeo_Ventiocho_Morgan,
                'chequeo_Ventinueve_Morgan' => $this->chequeo_Ventinueve_Morgan,
                'chequeo_Treinta_Morgan' => $this->chequeo_Treinta_Morgan,
                'chequeo_Treintauno_Morgan' => $this->chequeo_Treintauno_Morgan,
                'chequeo_Treintados_Morgan' => $this->chequeo_Treintados_Morgan,
                'chequeo_Treintatres_Morgan' => $this->chequeo_Treintatres_Morgan,
                'chequeo_Treintacuatro_Morgan' => $this->chequeo_Treintacuatro_Morgan,
                'chequeo_Treintacinco_Morgan' => $this->chequeo_Treintacinco_Morgan,
                'chequeo_Treintaseis_Morgan' => $this->chequeo_Treintaseis_Morgan,
                'chequeo_Treintasiete_Morgan' => $this->chequeo_Treintasiete_Morgan,
                'chequeo_Treintaocho_Morgan' => $this->chequeo_Treintaocho_Morgan,
                'chequeo_Treintanueve_Morgan' => $this->chequeo_Treintanueve_Morgan,
                'chequeo_Cuarenta_Morgan' => $this->chequeo_Cuarenta_Morgan,
                'chequeo_Cuarentauno_Morgan' => $this->chequeo_Cuarentauno_Morgan,
                'chequeo_Cuarentados_Morgan' => $this->chequeo_Cuarentados_Morgan,
                'chequeo_Cuarentatres_Morgan' => $this->chequeo_Cuarentatres_Morgan,
                'chequeo_Cuarentacuatro_Morgan' => $this->chequeo_Cuarentacuatro_Morgan,
                'chequeo_Cuarentacinco_Morgan' => $this->chequeo_Cuarentacinco_Morgan,
                'chequeo_Cuarentaseis_Morgan' => $this->chequeo_Cuarentaseis_Morgan,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoMorgan');
        } catch (\Exception $e) {
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-morgan.create', ["calificaciones" => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }
}
