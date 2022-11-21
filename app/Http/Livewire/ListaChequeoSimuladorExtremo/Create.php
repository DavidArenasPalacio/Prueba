<?php

namespace App\Http\Livewire\ListaChequeoSimuladorExtremo;

use App\Models\Calificaciones;
use App\Models\ListaChequeoSimuladorExtremo;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Simulador_Extremo;
    public $chequeo_Dos_Simulador_Extremo;
    public $chequeo_Tres_Simulador_Extremo;
    public $chequeo_Cuatro_Simulador_Extremo;
    public $chequeo_Cinco_Simulador_Extremo;
    public $chequeo_Seis_Simulador_Extremo;
    public $chequeo_Siete_Simulador_Extremo;
    public $chequeo_Ocho_Simulador_Extremo;
    public $chequeo_Nueve_Simulador_Extremo;
    public $chequeo_Diez_Simulador_Extremo;
    public $chequeo_Once_Simulador_Extremo;
    public $chequeo_Doce_Simulador_Extremo;
    public $chequeo_Trece_Simulador_Extremo;
    public $chequeo_Catorce_Simulador_Extremo;
    public $chequeo_Quince_Simulador_Extremo;
    public $chequeo_Dieciseis_Simulador_Extremo;
    public $chequeo_Diecisiete_Simulador_Extremo;
    public $chequeo_Dieciocho_Simulador_Extremo;
    public $chequeo_Diecinueve_Simulador_Extremo;
    public $chequeo_Veinte_Simulador_Extremo;
    public $chequeo_Ventiuno_Simulador_Extremo;
    public $chequeo_Ventidos_Simulador_Extremo;
    public $chequeo_Ventitres_Simulador_Extremo;
    public $chequeo_Venticuatro_Simulador_Extremo;
    public $chequeo_Venticinco_Simulador_Extremo;
    public $chequeo_Ventiseis_Simulador_Extremo;
    public $chequeo_Ventisiete_Simulador_Extremo;
    public $chequeo_Ventiocho_Simulador_Extremo;
    public $chequeo_Ventinueve_Simulador_Extremo;
    public $chequeo_Treinta_Simulador_Extremo;
    public $chequeo_Treintauno_Simulador_Extremo;
    public $chequeo_Treintados_Simulador_Extremo;
    public $horas_operacion_compresor;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Simulador_Extremo' => 'required',
            'chequeo_Dos_Simulador_Extremo' => 'required',
            'chequeo_Tres_Simulador_Extremo' => 'required',
            'chequeo_Cuatro_Simulador_Extremo' => 'required',
            'chequeo_Cinco_Simulador_Extremo' => 'required',
            'chequeo_Seis_Simulador_Extremo' => 'required',
            'chequeo_Siete_Simulador_Extremo' => 'required',
            'chequeo_Ocho_Simulador_Extremo' => 'required',
            'chequeo_Nueve_Simulador_Extremo' => 'required',
            'chequeo_Diez_Simulador_Extremo' => 'required',
            'chequeo_Once_Simulador_Extremo' => 'required',
            'chequeo_Doce_Simulador_Extremo' => 'required',
            'chequeo_Trece_Simulador_Extremo' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Simulador_Extremo' => 'required',
            'chequeo_Quince_Simulador_Extremo' => 'required',
            'horas_operacion_compresor' => 'required',
            'chequeo_Dieciseis_Simulador_Extremo' => 'required',
            'chequeo_Diecisiete_Simulador_Extremo' => 'required',
            'chequeo_Dieciocho_Simulador_Extremo' => 'required',
            'chequeo_Diecinueve_Simulador_Extremo' => 'required',
            'chequeo_Veinte_Simulador_Extremo' => 'required',
            'chequeo_Ventiuno_Simulador_Extremo' => 'required',
            'chequeo_Ventidos_Simulador_Extremo' => 'required',
            'chequeo_Ventitres_Simulador_Extremo' => 'required',
            'chequeo_Venticuatro_Simulador_Extremo' => 'required',
            'chequeo_Venticinco_Simulador_Extremo' => 'required',
            'chequeo_Ventiseis_Simulador_Extremo' => 'required',
        ],
        3 => [
            'chequeo_Ventisiete_Simulador_Extremo' => 'required',
            'chequeo_Ventiocho_Simulador_Extremo' => 'required',
            'chequeo_Ventinueve_Simulador_Extremo' => 'required',
            'chequeo_Treinta_Simulador_Extremo' => 'required',
            'chequeo_Treintauno_Simulador_Extremo' => 'required',
            'chequeo_Treintados_Simulador_Extremo' => 'required',
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
        return view('livewire.lista-chequeo-simulador-extremo.create',  ['calificaciones' => Calificaciones::all()]);
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

            ListaChequeoSimuladorExtremo::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Simulador_Extremo' => $this->chequeo_Uno_Simulador_Extremo,
                'chequeo_Dos_Simulador_Extremo' => $this->chequeo_Dos_Simulador_Extremo,
                'chequeo_Tres_Simulador_Extremo' => $this->chequeo_Tres_Simulador_Extremo,
                'chequeo_Cuatro_Simulador_Extremo' => $this->chequeo_Cuatro_Simulador_Extremo,
                'chequeo_Cinco_Simulador_Extremo' =>  $this->chequeo_Cinco_Simulador_Extremo,
                'chequeo_Seis_Simulador_Extremo' => $this->chequeo_Seis_Simulador_Extremo,
                'chequeo_Siete_Simulador_Extremo' => $this->chequeo_Siete_Simulador_Extremo,
                'chequeo_Ocho_Simulador_Extremo' => $this->chequeo_Ocho_Simulador_Extremo,
                'chequeo_Nueve_Simulador_Extremo' => $this->chequeo_Nueve_Simulador_Extremo,
                'chequeo_Diez_Simulador_Extremo' => $this->chequeo_Diez_Simulador_Extremo,
                'chequeo_Once_Simulador_Extremo' => $this->chequeo_Once_Simulador_Extremo,
                'chequeo_Doce_Simulador_Extremo' => $this->chequeo_Doce_Simulador_Extremo,
                'chequeo_Trece_Simulador_Extremo' => $this->chequeo_Trece_Simulador_Extremo,
                'chequeo_Catorce_Simulador_Extremo' => $this->chequeo_Catorce_Simulador_Extremo,
                'chequeo_Quince_Simulador_Extremo' =>  $this->chequeo_Quince_Simulador_Extremo,
                'horas_operacion_compresor' => $this->horas_operacion_compresor,
                'chequeo_Dieciseis_Simulador_Extremo' =>  $this->chequeo_Dieciseis_Simulador_Extremo,
                'chequeo_Diecisiete_Simulador_Extremo' =>  $this->chequeo_Diecisiete_Simulador_Extremo,
                'chequeo_Dieciocho_Simulador_Extremo' => $this->chequeo_Dieciocho_Simulador_Extremo,
                'chequeo_Diecinueve_Simulador_Extremo' => $this->chequeo_Diecinueve_Simulador_Extremo,
                'chequeo_Veinte_Simulador_Extremo' => $this->chequeo_Veinte_Simulador_Extremo,
                'chequeo_Ventiuno_Simulador_Extremo' => $this->chequeo_Ventiuno_Simulador_Extremo,
                'chequeo_Ventidos_Simulador_Extremo' => $this->chequeo_Ventidos_Simulador_Extremo,
                'chequeo_Ventitres_Simulador_Extremo' => $this->chequeo_Ventitres_Simulador_Extremo,
                'chequeo_Venticuatro_Simulador_Extremo' => $this->chequeo_Venticuatro_Simulador_Extremo,
                'chequeo_Venticinco_Simulador_Extremo' => $this->chequeo_Venticinco_Simulador_Extremo,
                'chequeo_Ventiseis_Simulador_Extremo' => $this->chequeo_Ventiseis_Simulador_Extremo,
                'chequeo_Ventisiete_Simulador_Extremo' => $this->chequeo_Ventisiete_Simulador_Extremo,
                'chequeo_Ventiocho_Simulador_Extremo' => $this->chequeo_Ventiocho_Simulador_Extremo,
                'chequeo_Ventinueve_Simulador_Extremo' => $this->chequeo_Ventinueve_Simulador_Extremo,
                'chequeo_Treinta_Simulador_Extremo' => $this->chequeo_Treinta_Simulador_Extremo,
                'chequeo_Treintauno_Simulador_Extremo' => $this->chequeo_Treintauno_Simulador_Extremo,
                'chequeo_Treintados_Simulador_Extremo' => $this->chequeo_Treintados_Simulador_Extremo,
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
