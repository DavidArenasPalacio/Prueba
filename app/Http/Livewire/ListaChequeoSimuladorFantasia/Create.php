<?php

namespace App\Http\Livewire\ListaChequeoSimuladorFantasia;

use App\Models\Calificaciones;
use App\Models\ListaChequeoSimuladorFantasia;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Simulador_Fantasia;
    public $chequeo_Dos_Simulador_Fantasia;
    public $chequeo_Tres_Simulador_Fantasia;
    public $chequeo_Cuatro_Simulador_Fantasia;
    public $chequeo_Cinco_Simulador_Fantasia;
    public $chequeo_Seis_Simulador_Fantasia;
    public $chequeo_Siete_Simulador_Fantasia;
    public $chequeo_Ocho_Simulador_Fantasia;
    public $chequeo_Nueve_Simulador_Fantasia;
    public $chequeo_Diez_Simulador_Fantasia;
    public $chequeo_Once_Simulador_Fantasia;
    public $chequeo_Doce_Simulador_Fantasia;
    public $chequeo_Trece_Simulador_Fantasia;
    public $chequeo_Catorce_Simulador_Fantasia;
    public $chequeo_Quince_Simulador_Fantasia;
    public $chequeo_Dieciseis_Simulador_Fantasia;
    public $chequeo_Diecisiete_Simulador_Fantasia;
    public $chequeo_Dieciocho_Simulador_Fantasia;
    public $chequeo_Diecinueve_Simulador_Fantasia;
    public $chequeo_Veinte_Simulador_Fantasia;
    public $chequeo_Ventiuno_Simulador_Fantasia;
    public $chequeo_Ventidos_Simulador_Fantasia;
    public $chequeo_Ventitres_Simulador_Fantasia;
    public $chequeo_Venticuatro_Simulador_Fantasia;
    public $chequeo_Venticinco_Simulador_Fantasia;
    public $chequeo_Ventiseis_Simulador_Fantasia;
    public $chequeo_Ventisiete_Simulador_Fantasia;
    public $chequeo_Ventiocho_Simulador_Fantasia;
    public $chequeo_Ventinueve_Simulador_Fantasia;
    public $chequeo_Treinta_Simulador_Fantasia;
    public $chequeo_Treintauno_Simulador_Fantasia;
    public $chequeo_Treintados_Simulador_Fantasia;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Simulador_Fantasia' => 'required',
            'chequeo_Dos_Simulador_Fantasia' => 'required',
            'chequeo_Tres_Simulador_Fantasia' => 'required',
            'chequeo_Cuatro_Simulador_Fantasia' => 'required',
            'chequeo_Cinco_Simulador_Fantasia' => 'required',
            'chequeo_Seis_Simulador_Fantasia' => 'required',
            'chequeo_Siete_Simulador_Fantasia' => 'required',
            'chequeo_Ocho_Simulador_Fantasia' => 'required',
            'chequeo_Nueve_Simulador_Fantasia' => 'required',
            'chequeo_Diez_Simulador_Fantasia' => 'required',
            'chequeo_Once_Simulador_Fantasia' => 'required',
            'chequeo_Doce_Simulador_Fantasia' => 'required',
            'chequeo_Trece_Simulador_Fantasia' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Simulador_Fantasia' => 'required',
            'chequeo_Quince_Simulador_Fantasia' => 'required',
            'chequeo_Dieciseis_Simulador_Fantasia' => 'required',
            'chequeo_Diecisiete_Simulador_Fantasia' => 'required',
            'chequeo_Dieciocho_Simulador_Fantasia' => 'required',
            'chequeo_Diecinueve_Simulador_Fantasia' => 'required',
            'chequeo_Veinte_Simulador_Fantasia' => 'required',
            'chequeo_Ventiuno_Simulador_Fantasia' => 'required',
            'chequeo_Ventidos_Simulador_Fantasia' => 'required',
            'chequeo_Ventitres_Simulador_Fantasia' => 'required',
            'chequeo_Venticuatro_Simulador_Fantasia' => 'required',
            'chequeo_Venticinco_Simulador_Fantasia' => 'required',
            'chequeo_Ventiseis_Simulador_Fantasia' => 'required',
        ],
        3 => [
            'chequeo_Ventisiete_Simulador_Fantasia' => 'required',
            'chequeo_Ventiocho_Simulador_Fantasia' => 'required',
            'chequeo_Ventinueve_Simulador_Fantasia' => 'required',
            'chequeo_Treinta_Simulador_Fantasia' => 'required',
            'chequeo_Treintauno_Simulador_Fantasia' => 'required',
            'chequeo_Treintados_Simulador_Fantasia' => 'required',
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
        return view('livewire.lista-chequeo-simulador-fantasia.create', ["calificaciones" => Calificaciones::all()]);
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

            ListaChequeoSimuladorFantasia::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Simulador_Fantasia' => $this->chequeo_Uno_Simulador_Fantasia,
                'chequeo_Dos_Simulador_Fantasia' => $this->chequeo_Dos_Simulador_Fantasia,
                'chequeo_Tres_Simulador_Fantasia' => $this->chequeo_Tres_Simulador_Fantasia,
                'chequeo_Cuatro_Simulador_Fantasia' => $this->chequeo_Cuatro_Simulador_Fantasia,
                'chequeo_Cinco_Simulador_Fantasia' =>  $this->chequeo_Cinco_Simulador_Fantasia,
                'chequeo_Seis_Simulador_Fantasia' => $this->chequeo_Seis_Simulador_Fantasia,
                'chequeo_Siete_Simulador_Fantasia' => $this->chequeo_Siete_Simulador_Fantasia,
                'chequeo_Ocho_Simulador_Fantasia' => $this->chequeo_Ocho_Simulador_Fantasia,
                'chequeo_Nueve_Simulador_Fantasia' => $this->chequeo_Nueve_Simulador_Fantasia,
                'chequeo_Diez_Simulador_Fantasia' => $this->chequeo_Diez_Simulador_Fantasia,
                'chequeo_Once_Simulador_Fantasia' => $this->chequeo_Once_Simulador_Fantasia,
                'chequeo_Doce_Simulador_Fantasia' => $this->chequeo_Doce_Simulador_Fantasia,
                'chequeo_Trece_Simulador_Fantasia' => $this->chequeo_Trece_Simulador_Fantasia,
                'chequeo_Catorce_Simulador_Fantasia' => $this->chequeo_Catorce_Simulador_Fantasia,
                'chequeo_Quince_Simulador_Fantasia' =>  $this->chequeo_Quince_Simulador_Fantasia,
                'chequeo_Dieciseis_Simulador_Fantasia' =>  $this->chequeo_Dieciseis_Simulador_Fantasia,
                'chequeo_Diecisiete_Simulador_Fantasia' =>  $this->chequeo_Diecisiete_Simulador_Fantasia,
                'chequeo_Dieciocho_Simulador_Fantasia' => $this->chequeo_Dieciocho_Simulador_Fantasia,
                'chequeo_Diecinueve_Simulador_Fantasia' => $this->chequeo_Diecinueve_Simulador_Fantasia,
                'chequeo_Veinte_Simulador_Fantasia' => $this->chequeo_Veinte_Simulador_Fantasia,
                'chequeo_Ventiuno_Simulador_Fantasia' => $this->chequeo_Ventiuno_Simulador_Fantasia,
                'chequeo_Ventidos_Simulador_Fantasia' => $this->chequeo_Ventidos_Simulador_Fantasia,
                'chequeo_Ventitres_Simulador_Fantasia' => $this->chequeo_Ventitres_Simulador_Fantasia,
                'chequeo_Venticuatro_Simulador_Fantasia' => $this->chequeo_Venticuatro_Simulador_Fantasia,
                'chequeo_Venticinco_Simulador_Fantasia' => $this->chequeo_Venticinco_Simulador_Fantasia,
                'chequeo_Ventiseis_Simulador_Fantasia' => $this->chequeo_Ventiseis_Simulador_Fantasia,
                'chequeo_Ventisiete_Simulador_Fantasia' => $this->chequeo_Ventisiete_Simulador_Fantasia,
                'chequeo_Ventiocho_Simulador_Fantasia' => $this->chequeo_Ventiocho_Simulador_Fantasia,
                'chequeo_Ventinueve_Simulador_Fantasia' => $this->chequeo_Ventinueve_Simulador_Fantasia,
                'chequeo_Treinta_Simulador_Fantasia' => $this->chequeo_Treinta_Simulador_Fantasia,
                'chequeo_Treintauno_Simulador_Fantasia' => $this->chequeo_Treintauno_Simulador_Fantasia,
                'chequeo_Treintados_Simulador_Fantasia' => $this->chequeo_Treintados_Simulador_Fantasia,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]); 

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoSimuladorFantasia');
        } catch (\Exception $e) {
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
