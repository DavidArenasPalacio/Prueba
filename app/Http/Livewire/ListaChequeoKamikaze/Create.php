<?php

namespace App\Http\Livewire\ListaChequeoKamikaze;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Calificaciones;
use App\Models\ListaChequeoKamikaze;

class Create extends Component
{

    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Kamikaze;
    public $chequeo_Dos_Kamikaze;
    public $chequeo_Tres_Kamikaze;
    public $chequeo_Cuatro_Kamikaze;
    public $chequeo_Cinco_Kamikaze;
    public $chequeo_Seis_Kamikaze;
    public $chequeo_Siete_Kamikaze;
    public $chequeo_Ocho_Kamikaze;
    public $chequeo_Nueve_Kamikaze;
    public $chequeo_Diez_Kamikaze;
    public $chequeo_Once_Kamikaze;
    public $chequeo_Doce_Kamikaze;
    public $chequeo_Trece_Kamikaze;
    public $chequeo_Catorce_Kamikaze;
    public $chequeo_Quince_Kamikaze;
    public $chequeo_Dieciseis_Kamikaze;
    public $chequeo_Diecisiete_Kamikaze;
    public $chequeo_Dieciocho_Kamikaze;
    public $chequeo_Diecinueve_Kamikaze;
    public $chequeo_Veinte_Kamikaze;
    public $chequeo_Ventiuno_Kamikaze;
    public $chequeo_Ventidos_Kamikaze;
    public $chequeo_Ventitres_Kamikaze;
    public $chequeo_Venticuatro_Kamikaze;
    public $chequeo_Venticinco_Kamikaze;
    public $chequeo_Ventiseis_Kamikaze;
    public $chequeo_Ventisiete_Kamikaze;
    public $chequeo_Ventiocho_Kamikaze;
    public $chequeo_Ventinueve_Kamikaze;
    public $chequeo_Treinta_Kamikaze;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 2;


    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Kamikaze' => 'required',
            'chequeo_Dos_Kamikaze' => 'required',
            'chequeo_Tres_Kamikaze' => 'required',
            'chequeo_Cuatro_Kamikaze' => 'required',
            'chequeo_Cinco_Kamikaze' => 'required',
            'chequeo_Seis_Kamikaze' => 'required',
            'chequeo_Siete_Kamikaze' => 'required',
            'chequeo_Ocho_Kamikaze' => 'required',
            'chequeo_Nueve_Kamikaze' => 'required',
            'chequeo_Diez_Kamikaze' => 'required',
            'chequeo_Once_Kamikaze' => 'required',
            'chequeo_Doce_Kamikaze' => 'required',
            'chequeo_Trece_Kamikaze' => 'required'
        ],
        2 => [
            'chequeo_Catorce_Kamikaze' => 'required',
            'chequeo_Quince_Kamikaze' => 'required',
            'chequeo_Dieciseis_Kamikaze' => 'required',
            'chequeo_Diecisiete_Kamikaze' => 'required',
            'chequeo_Dieciocho_Kamikaze' => 'required',
            'chequeo_Diecinueve_Kamikaze' => 'required',
            'chequeo_Veinte_Kamikaze' => 'required',
            'chequeo_Ventiuno_Kamikaze' => 'required',
            'chequeo_Ventidos_Kamikaze' => 'required',
            'chequeo_Ventitres_Kamikaze' => 'required',
            'chequeo_Venticuatro_Kamikaze' => 'required',
            'chequeo_Venticinco_Kamikaze' => 'required',
            'chequeo_Ventiseis_Kamikaze' => 'required',
            'chequeo_Ventisiete_Kamikaze' => 'required',
            'chequeo_Ventiocho_Kamikaze' => 'required',
            'chequeo_Ventinueve_Kamikaze' => 'required',
            'chequeo_Treinta_Kamikaze' => 'required',
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
        return view('livewire.lista-chequeo-kamikaze.create', ['calificaciones' => Calificaciones::all()]);
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

            ListaChequeoKamikaze::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Kamikaze' => $this->chequeo_Uno_Kamikaze,
                'chequeo_Dos_Kamikaze' => $this->chequeo_Dos_Kamikaze,
                'chequeo_Tres_Kamikaze' => $this->chequeo_Tres_Kamikaze,
                'chequeo_Cuatro_Kamikaze' => $this->chequeo_Cuatro_Kamikaze,
                'chequeo_Cinco_Kamikaze' =>  $this->chequeo_Cinco_Kamikaze,
                'chequeo_Seis_Kamikaze' => $this->chequeo_Seis_Kamikaze,
                'chequeo_Siete_Kamikaze' => $this->chequeo_Siete_Kamikaze,
                'chequeo_Ocho_Kamikaze' => $this->chequeo_Ocho_Kamikaze,
                'chequeo_Nueve_Kamikaze' => $this->chequeo_Nueve_Kamikaze,
                'chequeo_Diez_Kamikaze' => $this->chequeo_Diez_Kamikaze,
                'chequeo_Once_Kamikaze' => $this->chequeo_Once_Kamikaze,
                'chequeo_Doce_Kamikaze' => $this->chequeo_Doce_Kamikaze,
                'chequeo_Trece_Kamikaze' => $this->chequeo_Trece_Kamikaze,
                'chequeo_Catorce_Kamikaze' => $this->chequeo_Catorce_Kamikaze,
                'chequeo_Quince_Kamikaze' =>  $this->chequeo_Quince_Kamikaze,
                'chequeo_Dieciseis_Kamikaze' =>  $this->chequeo_Dieciseis_Kamikaze,
                'chequeo_Diecisiete_Kamikaze' =>  $this->chequeo_Diecisiete_Kamikaze,
                'chequeo_Dieciocho_Kamikaze' => $this->chequeo_Dieciocho_Kamikaze,
                'chequeo_Diecinueve_Kamikaze' => $this->chequeo_Diecinueve_Kamikaze,
                'chequeo_Veinte_Kamikaze' => $this->chequeo_Veinte_Kamikaze,
                'chequeo_Ventiuno_Kamikaze' => $this->chequeo_Ventiuno_Kamikaze,
                'chequeo_Ventidos_Kamikaze' => $this->chequeo_Ventidos_Kamikaze,
                'chequeo_Ventitres_Kamikaze' => $this->chequeo_Ventitres_Kamikaze,
                'chequeo_Venticuatro_Kamikaze' => $this->chequeo_Venticuatro_Kamikaze,
                'chequeo_Venticinco_Kamikaze' => $this->chequeo_Venticinco_Kamikaze,
                'chequeo_Ventiseis_Kamikaze' => $this->chequeo_Ventiseis_Kamikaze,
                'chequeo_Ventisiete_Kamikaze' => $this->chequeo_Ventisiete_Kamikaze,
                'chequeo_Ventiocho_Kamikaze' => $this->chequeo_Ventiocho_Kamikaze,
                'chequeo_Ventinueve_Kamikaze' => $this->chequeo_Ventinueve_Kamikaze,
                'chequeo_Treinta_Kamikaze' => $this->chequeo_Treinta_Kamikaze,
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoKamikaze');
        } catch (\Exception $e) {
           
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
