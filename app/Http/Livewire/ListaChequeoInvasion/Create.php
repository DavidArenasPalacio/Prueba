<?php

namespace App\Http\Livewire\ListaChequeoInvasion;

use App\Models\Calificaciones;
use App\Models\ListaChequeoInvasion;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Invasion;
    public $chequeo_Dos_Invasion;
    public $chequeo_Tres_Invasion;
    public $chequeo_Cuatro_Invasion;
    public $chequeo_Cinco_Invasion;
    public $chequeo_Seis_Invasion;
    public $chequeo_Siete_Invasion;
    public $chequeo_Ocho_Invasion;
    public $chequeo_Nueve_Invasion;
    public $chequeo_Diez_Invasion;
    public $chequeo_Once_Invasion;
    public $chequeo_Doce_Invasion;
    public $chequeo_Trece_Invasion;
    public $chequeo_Catorce_Invasion;
    public $chequeo_Quince_Invasion;
    public $chequeo_Dieciseis_Invasion;
    public $chequeo_Diecisiete_Invasion;
    public $chequeo_Dieciocho_Invasion;
    public $chequeo_Diecinueve_Invasion;
    public $chequeo_Veinte_Invasion;
    public $chequeo_Ventiuno_Invasion;
    public $chequeo_Ventidos_Invasion;
    public $chequeo_Ventitres_Invasion;
    public $chequeo_Venticuatro_Invasion;
    public $chequeo_Venticinco_Invasion;
    public $chequeo_Ventiseis_Invasion;
    public $chequeo_Ventisiete_Invasion;
    public $chequeo_Ventiocho_Invasion;
    public $chequeo_Ventinueve_Invasion;
    public $chequeo_Treinta_Invasion;
    public $chequeo_Treintauno_Invasion;
    public $chequeo_Treintados_Invasion;
    public $chequeo_Treintatres_Invasion;
    public $chequeo_Treintacuatro_Invasion;
    public $chequeo_Treintacinco_Invasion;
    public $chequeo_Treintaseis_Invasion;
    public $chequeo_Treintasiete_Invasion;
    public $chequeo_Treintaocho_Invasion;
    public $chequeo_Treintanueve_Invasion;
    public $chequeo_Cuarenta_Invasion;
    public $hora_operacion_tablero;
    public $verificar_voltaje_selector;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Invasion' => 'required',
            'chequeo_Dos_Invasion' => 'required',
            'chequeo_Tres_Invasion' => 'required',
            'chequeo_Cuatro_Invasion' => 'required',
            'chequeo_Cinco_Invasion' => 'required',
            'chequeo_Seis_Invasion' => 'required',
            'chequeo_Siete_Invasion' => 'required',
            'chequeo_Ocho_Invasion' => 'required',
            'chequeo_Nueve_Invasion' => 'required',
            'chequeo_Diez_Invasion' => 'required',
            'chequeo_Once_Invasion' => 'required',
            'chequeo_Doce_Invasion' => 'required',
            'chequeo_Trece_Invasion' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Invasion' => 'required',
            'chequeo_Quince_Invasion' => 'required',
            'chequeo_Dieciseis_Invasion' => 'required',
            'chequeo_Diecisiete_Invasion' => 'required',
            'chequeo_Dieciocho_Invasion' => 'required',
            'chequeo_Diecinueve_Invasion' => 'required',
            'chequeo_Veinte_Invasion' => 'required',
            'chequeo_Ventiuno_Invasion' => 'required',
            'chequeo_Ventidos_Invasion' => 'required',
            'chequeo_Ventitres_Invasion' => 'required',
            'hora_operacion_tablero' => 'required',
            'chequeo_Venticuatro_Invasion' => 'required',
            'chequeo_Venticinco_Invasion' => 'required',
            'chequeo_Ventiseis_Invasion' => 'required',
            'chequeo_Ventisiete_Invasion' => 'required',
        ],
        3 => [
            'chequeo_Ventiocho_Invasion' => 'required',
            'chequeo_Ventinueve_Invasion' => 'required',
            'chequeo_Treinta_Invasion' => 'required',
            'chequeo_Treintauno_Invasion' => 'required',
            'chequeo_Treintados_Invasion' => 'required',
            'chequeo_Treintatres_Invasion' => 'required',
            'verificar_voltaje_selector' => 'required',
            'chequeo_Treintacuatro_Invasion' => 'required',
            'chequeo_Treintacinco_Invasion' => 'required',
            'chequeo_Treintaseis_Invasion' => 'required',
            'chequeo_Treintasiete_Invasion' => 'required',
            'chequeo_Treintaocho_Invasion' => 'required',   
            'chequeo_Treintanueve_Invasion' => 'required',
            'chequeo_Cuarenta_Invasion' => 'required',
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

            ListaChequeoInvasion::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Invasion' => $this->chequeo_Uno_Invasion,
                'chequeo_Dos_Invasion' => $this->chequeo_Dos_Invasion,
                'chequeo_Tres_Invasion' => $this->chequeo_Tres_Invasion,
                'chequeo_Cuatro_Invasion' => $this->chequeo_Cuatro_Invasion,
                'chequeo_Cinco_Invasion' =>  $this->chequeo_Cinco_Invasion,
                'chequeo_Seis_Invasion' => $this->chequeo_Seis_Invasion,
                'chequeo_Siete_Invasion' => $this->chequeo_Siete_Invasion,
                'chequeo_Ocho_Invasion' => $this->chequeo_Ocho_Invasion,
                'chequeo_Nueve_Invasion' => $this->chequeo_Nueve_Invasion,
                'chequeo_Diez_Invasion' => $this->chequeo_Diez_Invasion,
                'chequeo_Once_Invasion' => $this->chequeo_Once_Invasion,
                'chequeo_Doce_Invasion' => $this->chequeo_Doce_Invasion,
                'chequeo_Trece_Invasion' => $this->chequeo_Trece_Invasion,
                'chequeo_Catorce_Invasion' => $this->chequeo_Catorce_Invasion,
                'chequeo_Quince_Invasion' =>  $this->chequeo_Quince_Invasion,
                'chequeo_Dieciseis_Invasion' =>  $this->chequeo_Dieciseis_Invasion,
                'chequeo_Diecisiete_Invasion' =>  $this->chequeo_Diecisiete_Invasion,
                'chequeo_Dieciocho_Invasion' => $this->chequeo_Dieciocho_Invasion,
                'chequeo_Diecinueve_Invasion' => $this->chequeo_Diecinueve_Invasion,
                'chequeo_Veinte_Invasion' => $this->chequeo_Veinte_Invasion,
                'chequeo_Ventiuno_Invasion' => $this->chequeo_Ventiuno_Invasion,
                'chequeo_Ventidos_Invasion' => $this->chequeo_Ventidos_Invasion,
                'chequeo_Ventitres_Invasion' => $this->chequeo_Ventitres_Invasion,
                'chequeo_Venticuatro_Invasion' => $this->chequeo_Venticuatro_Invasion,
                'chequeo_Venticinco_Invasion' => $this->chequeo_Venticinco_Invasion,
                'chequeo_Ventiseis_Invasion' => $this->chequeo_Ventiseis_Invasion,
                'chequeo_Ventisiete_Invasion' => $this->chequeo_Ventisiete_Invasion,
                'hora_operacion_tablero' => $this->hora_operacion_tablero,
                'verificar_voltaje_selector' => $this->verificar_voltaje_selector,
                'chequeo_Ventiocho_Invasion' => $this->chequeo_Ventiocho_Invasion,
                'chequeo_Ventinueve_Invasion' => $this->chequeo_Ventinueve_Invasion,
                'chequeo_Treinta_Invasion' => $this->chequeo_Treinta_Invasion,
                'chequeo_Treintauno_Invasion' => $this->chequeo_Treintauno_Invasion,
                'chequeo_Treintados_Invasion' => $this->chequeo_Treintados_Invasion,
                'chequeo_Treintatres_Invasion' => $this->chequeo_Treintatres_Invasion,
                'chequeo_Treintacuatro_Invasion' => $this->chequeo_Treintacuatro_Invasion,
                'chequeo_Treintacinco_Invasion' => $this->chequeo_Treintacinco_Invasion,
                'chequeo_Treintaseis_Invasion' => $this->chequeo_Treintaseis_Invasion,
                'chequeo_Treintasiete_Invasion' => $this->chequeo_Treintasiete_Invasion,
                'chequeo_Treintaocho_Invasion' => $this->chequeo_Treintaocho_Invasion,
                'chequeo_Treintanueve_Invasion' => $this->chequeo_Treintanueve_Invasion,
                'chequeo_Cuarenta_Invasion' => $this->chequeo_Cuarenta_Invasion,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoInvasion');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-invasion.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
