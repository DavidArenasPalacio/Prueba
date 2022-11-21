<?php

namespace App\Http\Livewire\ListaChequeoTrenIguana;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoTrenIguana;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Tren_Iguana;
    public $chequeo_Dos_Tren_Iguana;
    public $chequeo_Tres_Tren_Iguana;
    public $chequeo_Cuatro_Tren_Iguana;
    public $chequeo_Cinco_Tren_Iguana;
    public $chequeo_Seis_Tren_Iguana;
    public $chequeo_Siete_Tren_Iguana;
    public $chequeo_Ocho_Tren_Iguana;
    public $chequeo_Nueve_Tren_Iguana;
    public $chequeo_Diez_Tren_Iguana;
    public $chequeo_Once_Tren_Iguana;
    public $chequeo_Doce_Tren_Iguana;
    public $chequeo_Trece_Tren_Iguana;
    public $chequeo_Catorce_Tren_Iguana;
    public $chequeo_Quince_Tren_Iguana;
    public $chequeo_Dieciseis_Tren_Iguana;
    public $chequeo_Diecisiete_Tren_Iguana;
    public $chequeo_Dieciocho_Tren_Iguana;
    public $chequeo_Diecinueve_Tren_Iguana;
    public $chequeo_Veinte_Tren_Iguana;
    public $chequeo_Ventiuno_Tren_Iguana;
    public $chequeo_Ventidos_Tren_Iguana;
    public $chequeo_Ventitres_Tren_Iguana;
    public $chequeo_Venticuatro_Tren_Iguana;
    public $chequeo_Venticinco_Tren_Iguana;
    public $chequeo_Ventiseis_Tren_Iguana;
    public $chequeo_Ventisiete_Tren_Iguana;
    public $hora_operacion_tablero;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 3;



    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Tren_Iguana' => 'required',
            'chequeo_Dos_Tren_Iguana' => 'required',
            'chequeo_Tres_Tren_Iguana' => 'required',
            'chequeo_Cuatro_Tren_Iguana' => 'required',
            'chequeo_Cinco_Tren_Iguana' => 'required',
            'chequeo_Seis_Tren_Iguana' => 'required',
            'chequeo_Siete_Tren_Iguana' => 'required',
            'chequeo_Ocho_Tren_Iguana' => 'required',
            'chequeo_Nueve_Tren_Iguana' => 'required',
            'chequeo_Diez_Tren_Iguana' => 'required',
            'chequeo_Once_Tren_Iguana' => 'required',
            'chequeo_Doce_Tren_Iguana' => 'required',
            'chequeo_Trece_Tren_Iguana' => 'required',
        ],
        2 => [
            'chequeo_Catorce_Tren_Iguana' => 'required',
            'chequeo_Quince_Tren_Iguana' => 'required',
            'chequeo_Dieciseis_Tren_Iguana' => 'required',
            'chequeo_Diecisiete_Tren_Iguana' => 'required',
            'chequeo_Dieciocho_Tren_Iguana' => 'required',
            'chequeo_Diecinueve_Tren_Iguana' => 'required',
            'chequeo_Veinte_Tren_Iguana' => 'required',
            'chequeo_Ventiuno_Tren_Iguana' => 'required',
            'chequeo_Ventidos_Tren_Iguana' => 'required',
            'chequeo_Ventitres_Tren_Iguana' => 'required',
            'hora_operacion_tablero' => 'required',
            'chequeo_Venticuatro_Tren_Iguana' => 'required',
            'chequeo_Venticinco_Tren_Iguana' => 'required',
        ],
        3 => [
            'chequeo_Ventiseis_Tren_Iguana' => 'required',
            'chequeo_Ventisiete_Tren_Iguana' => 'required',
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

            ListaChequeoTrenIguana::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Tren_Iguana' => $this->chequeo_Uno_Tren_Iguana,
                'chequeo_Dos_Tren_Iguana' => $this->chequeo_Dos_Tren_Iguana,
                'chequeo_Tres_Tren_Iguana' => $this->chequeo_Tres_Tren_Iguana,
                'chequeo_Cuatro_Tren_Iguana' => $this->chequeo_Cuatro_Tren_Iguana,
                'chequeo_Cinco_Tren_Iguana' =>  $this->chequeo_Cinco_Tren_Iguana,
                'chequeo_Seis_Tren_Iguana' => $this->chequeo_Seis_Tren_Iguana,
                'chequeo_Siete_Tren_Iguana' => $this->chequeo_Siete_Tren_Iguana,
                'chequeo_Ocho_Tren_Iguana' => $this->chequeo_Ocho_Tren_Iguana,
                'chequeo_Nueve_Tren_Iguana' => $this->chequeo_Nueve_Tren_Iguana,
                'chequeo_Diez_Tren_Iguana' => $this->chequeo_Diez_Tren_Iguana,
                'chequeo_Once_Tren_Iguana' => $this->chequeo_Once_Tren_Iguana,
                'chequeo_Doce_Tren_Iguana' => $this->chequeo_Doce_Tren_Iguana,
                'chequeo_Trece_Tren_Iguana' => $this->chequeo_Trece_Tren_Iguana,
                'chequeo_Catorce_Tren_Iguana' => $this->chequeo_Catorce_Tren_Iguana,
                'chequeo_Quince_Tren_Iguana' =>  $this->chequeo_Quince_Tren_Iguana,
                'chequeo_Dieciseis_Tren_Iguana' =>  $this->chequeo_Dieciseis_Tren_Iguana,
                'chequeo_Diecisiete_Tren_Iguana' =>  $this->chequeo_Diecisiete_Tren_Iguana,
                'chequeo_Dieciocho_Tren_Iguana' => $this->chequeo_Dieciocho_Tren_Iguana,
                'chequeo_Diecinueve_Tren_Iguana' => $this->chequeo_Diecinueve_Tren_Iguana,
                'chequeo_Veinte_Tren_Iguana' => $this->chequeo_Veinte_Tren_Iguana,
                'chequeo_Ventiuno_Tren_Iguana' => $this->chequeo_Ventiuno_Tren_Iguana,
                'chequeo_Ventidos_Tren_Iguana' => $this->chequeo_Ventidos_Tren_Iguana,
                'chequeo_Ventitres_Tren_Iguana' => $this->chequeo_Ventitres_Tren_Iguana,
                'chequeo_Venticuatro_Tren_Iguana' => $this->chequeo_Venticuatro_Tren_Iguana,
                'chequeo_Venticinco_Tren_Iguana' => $this->chequeo_Venticinco_Tren_Iguana,
                'chequeo_Ventiseis_Tren_Iguana' => $this->chequeo_Ventiseis_Tren_Iguana,
                'chequeo_Ventisiete_Tren_Iguana' => $this->chequeo_Ventisiete_Tren_Iguana,
                'hora_operacion_tablero' => $this->hora_operacion_tablero,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoTrenIguana');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-tren-iguana.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
