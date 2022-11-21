<?php

namespace App\Http\Livewire\ListaChequeoJungla;

use App\Models\Calificaciones;
use App\Models\ListaChequeoJungla;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Jungla;
    public $chequeo_Dos_Jungla;
    public $chequeo_Tres_Jungla;
    public $chequeo_Cuatro_Jungla;
    public $chequeo_Cinco_Jungla;
    public $chequeo_Seis_Jungla;
    public $chequeo_Siete_Jungla;
    public $chequeo_Ocho_Jungla;
    public $chequeo_Nueve_Jungla;
    public $chequeo_Diez_Jungla;
    public $chequeo_Once_Jungla;
    public $chequeo_Doce_Jungla;
    public $chequeo_Trece_Jungla;
    public $chequeo_Catorce_Jungla;
    public $chequeo_Quince_Jungla;
    public $chequeo_Dieciseis_Jungla;
    public $chequeo_Diecisiete_Jungla;
    public $chequeo_Dieciocho_Jungla;
    public $chequeo_Diecinueve_Jungla;
    public $chequeo_Veinte_Jungla;
    public $chequeo_Ventiuno_Jungla;
    public $chequeo_Ventidos_Jungla;
    public $chequeo_Ventitres_Jungla;
    public $chequeo_Venticuatro_Jungla;
    public $chequeo_Venticinco_Jungla;
    public $chequeo_Ventiseis_Jungla;
    public $chequeo_Ventisiete_Jungla;
    public $chequeo_Ventiocho_Jungla;
    public $chequeo_Ventinueve_Jungla;
    public $chequeo_Treinta_Jungla;
    public $chequeo_Treintauno_Jungla;
    public $chequeo_Treintados_Jungla;
    public $chequeo_Treintatres_Jungla;
    public $chequeo_Treintacuatro_Jungla;
    public $chequeo_Treintacinco_Jungla;
    public $chequeo_Treintaseis_Jungla;
    public $chequeo_Treintasiete_Jungla;
    public $chequeo_Treintaocho_Jungla;
    public $chequeo_Treintanueve_Jungla;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 5;
    public $success;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Jungla' => 'required',
            'chequeo_Dos_Jungla' => 'required',
            'chequeo_Tres_Jungla' => 'required',
            'chequeo_Cuatro_Jungla' => 'required',
            'chequeo_Cinco_Jungla' => 'required',
            'chequeo_Seis_Jungla' => 'required',
            'chequeo_Siete_Jungla' => 'required',
            'chequeo_Ocho_Jungla' => 'required',
            'chequeo_Nueve_Jungla' => 'required',
            'chequeo_Diez_Jungla' => 'required',
            'chequeo_Once_Jungla' => 'required',
            'chequeo_Doce_Jungla' => 'required',
            'chequeo_Trece_Jungla' => 'required'
        ],
        2 => [
            'chequeo_Catorce_Jungla' => 'required',
            'chequeo_Quince_Jungla' => 'required',
            'chequeo_Dieciseis_Jungla' => 'required',
            'chequeo_Diecisiete_Jungla' => 'required',
            'chequeo_Dieciocho_Jungla' => 'required',
            'chequeo_Diecinueve_Jungla' => 'required',
            'chequeo_Veinte_Jungla' => 'required',
            'chequeo_Ventiuno_Jungla' => 'required',
            'chequeo_Ventidos_Jungla' => 'required',
            'chequeo_Ventitres_Jungla' => 'required',
            'chequeo_Venticuatro_Jungla' => 'required',
            'chequeo_Venticinco_Jungla' => 'required'
        ],
        3 => [
            'chequeo_Ventiseis_Jungla' => 'required',
            'chequeo_Ventisiete_Jungla' => 'required',
            'chequeo_Ventiocho_Jungla' => 'required',
            'chequeo_Ventinueve_Jungla' => 'required',
            'chequeo_Treinta_Jungla' => 'required',
            'chequeo_Treintauno_Jungla' => 'required',
            'chequeo_Treintados_Jungla' => 'required',
            'chequeo_Treintatres_Jungla' => 'required',
            'chequeo_Treintacuatro_Jungla' => 'required',
            'chequeo_Treintacinco_Jungla' => 'required',
            'chequeo_Treintaseis_Jungla' => 'required',
            'chequeo_Treintasiete_Jungla' => 'required',
            'chequeo_Treintaocho_Jungla' => 'required',
            'chequeo_Treintanueve_Jungla' => 'required',
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

            ListaChequeoJungla::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Jungla' => $this->chequeo_Uno_Jungla,
                'chequeo_Dos_Jungla' => $this->chequeo_Dos_Jungla,
                'chequeo_Tres_Jungla' => $this->chequeo_Tres_Jungla,
                'chequeo_Cuatro_Jungla' => $this->chequeo_Cuatro_Jungla,
                'chequeo_Cinco_Jungla' =>  $this->chequeo_Cinco_Jungla,
                'chequeo_Seis_Jungla' => $this->chequeo_Seis_Jungla,
                'chequeo_Siete_Jungla' => $this->chequeo_Siete_Jungla,
                'chequeo_Ocho_Jungla' => $this->chequeo_Ocho_Jungla,
                'chequeo_Nueve_Jungla' => $this->chequeo_Nueve_Jungla,
                'chequeo_Diez_Jungla' => $this->chequeo_Diez_Jungla,
                'chequeo_Once_Jungla' => $this->chequeo_Once_Jungla,
                'chequeo_Doce_Jungla' => $this->chequeo_Doce_Jungla,
                'chequeo_Trece_Jungla' => $this->chequeo_Trece_Jungla,
                'chequeo_Catorce_Jungla' => $this->chequeo_Catorce_Jungla,
                'chequeo_Quince_Jungla' =>  $this->chequeo_Quince_Jungla,
                'chequeo_Dieciseis_Jungla' =>  $this->chequeo_Dieciseis_Jungla,
                'chequeo_Diecisiete_Jungla' =>  $this->chequeo_Diecisiete_Jungla,
                'chequeo_Dieciocho_Jungla' => $this->chequeo_Dieciocho_Jungla,
                'chequeo_Diecinueve_Jungla' => $this->chequeo_Diecinueve_Jungla,
                'chequeo_Veinte_Jungla' => $this->chequeo_Veinte_Jungla,
                'chequeo_Ventiuno_Jungla' => $this->chequeo_Ventiuno_Jungla,
                'chequeo_Ventidos_Jungla' => $this->chequeo_Ventidos_Jungla,
                'chequeo_Ventitres_Jungla' => $this->chequeo_Ventitres_Jungla,
                'chequeo_Venticuatro_Jungla' => $this->chequeo_Venticuatro_Jungla,
                'chequeo_Venticinco_Jungla' => $this->chequeo_Venticinco_Jungla,
                'chequeo_Ventiseis_Jungla' => $this->chequeo_Ventiseis_Jungla,
                'chequeo_Ventisiete_Jungla' => $this->chequeo_Ventisiete_Jungla,
                'chequeo_Ventiocho_Jungla' => $this->chequeo_Ventiocho_Jungla,
                'chequeo_Ventinueve_Jungla' => $this->chequeo_Ventinueve_Jungla,
                'chequeo_Treinta_Jungla' => $this->chequeo_Treinta_Jungla,
                'chequeo_Treintauno_Jungla' => $this->chequeo_Treintauno_Jungla,
                'chequeo_Treintados_Jungla' => $this->chequeo_Treintados_Jungla,
                'chequeo_Treintatres_Jungla' => $this->chequeo_Treintatres_Jungla,
                'chequeo_Treintacuatro_Jungla' => $this->chequeo_Treintacuatro_Jungla,
                'chequeo_Treintacinco_Jungla' => $this->chequeo_Treintacinco_Jungla,
                'chequeo_Treintaseis_Jungla' => $this->chequeo_Treintaseis_Jungla,
                'chequeo_Treintasiete_Jungla' => $this->chequeo_Treintasiete_Jungla,
                'chequeo_Treintaocho_Jungla' => $this->chequeo_Treintaocho_Jungla,
                'chequeo_Treintanueve_Jungla' => $this->chequeo_Treintanueve_Jungla,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoJungla');
        } catch (\Exception $e) {
          dd($e);
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-jungla.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
