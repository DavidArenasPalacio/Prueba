<?php

namespace App\Http\Livewire\ListaChequeoTrenMitico;

use App\Models\Calificaciones;
use App\Models\ListaChequeoTrenMitico;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $hora_inicio;
    public $chequeo_Uno_Tren_Mitico;
    public $chequeo_Dos_Tren_Mitico;
    public $chequeo_Tres_Tren_Mitico;
    public $chequeo_Cuatro_Tren_Mitico;
    public $chequeo_Cinco_Tren_Mitico;
    public $chequeo_Seis_Tren_Mitico;
    public $chequeo_Siete_Tren_Mitico;
    public $chequeo_Ocho_Tren_Mitico;
    public $chequeo_Nueve_Tren_Mitico;
    public $chequeo_Diez_Tren_Mitico;
    public $chequeo_Once_Tren_Mitico;
    public $chequeo_Doce_Tren_Mitico;
    public $chequeo_Trece_Tren_Mitico;
    public $chequeo_Catorce_Tren_Mitico;
    public $chequeo_Quince_Tren_Mitico;
    public $chequeo_Dieciseis_Tren_Mitico;
    public $chequeo_Diecisiete_Tren_Mitico;
    public $chequeo_Dieciocho_Tren_Mitico;
    public $chequeo_Diecinueve_Tren_Mitico;
    public $chequeo_Veinte_Tren_Mitico;
    public $chequeo_Ventiuno_Tren_Mitico;
    public $chequeo_Ventidos_Tren_Mitico;
    public $chequeo_Ventitres_Tren_Mitico;
    public $chequeo_Venticuatro_Tren_Mitico;
    public $chequeo_Venticinco_Tren_Mitico;
    public $chequeo_Ventiseis_Tren_Mitico;
    public $chequeo_Ventisiete_Tren_Mitico;
    public $chequeo_Ventiocho_Tren_Mitico;
    public $chequeo_Ventinueve_Tren_Mitico;
    public $chequeo_Treinta_Tren_Mitico;
    public $chequeo_Treintauno_Tren_Mitico;
    public $chequeo_Treintados_Tren_Mitico;
    public $chequeo_Treintatres_Tren_Mitico;
    public $chequeo_Treintacuatro_Tren_Mitico;
    public $chequeo_Treintacinco_Tren_Mitico;
    public $chequeo_Treintaseis_Tren_Mitico;
    public $chequeo_Treintasiete_Tren_Mitico;
    public $chequeo_Treintaocho_Tren_Mitico;
    public $chequeo_Treintanueve_Tren_Mitico;
    public $chequeo_Cuarenta_Tren_Mitico;
    public $chequeo_Cuarentauno_Tren_Mitico;
    public $chequeo_Cuarentados_Tren_Mitico;
    public $chequeo_Cuarentatres_Tren_Mitico;
    public $chequeo_Cuarentacuatro_Tren_Mitico;
    public $chequeo_Cuarentacinco_Tren_Mitico;
    public $chequeo_Cuarentaseis_Tren_Mitico;
    public $chequeo_Cuarentasiete_Tren_Mitico;
    public $chequeo_Cuarentaocho_Tren_Mitico;
    public $chequeo_Cuarentanueve_Tren_Mitico;
    public $chequeo_Cincuenta_Tren_Mitico;
    public $chequeo_Cincuentauno_Tren_Mitico;
    public $chequeo_Cincuentados_Tren_Mitico;
    public $chequeo_Cincuentatres_Tren_Mitico;
    public $chequeo_Cincuentacuatro_Tren_Mitico;
    public $chequeo_Cincuentacinco_Tren_Mitico;
    public $chequeo_Cincuentaseis_Tren_Mitico;
    public $chequeo_Cincuentasiete_Tren_Mitico;
    public $chequeo_Cincuentaocho_Tren_Mitico;
    public $chequeo_Cincuentanueve_Tren_Mitico;
    public $chequeo_Sesenta_Tren_Mitico;
    public $chequeo_Sesentauno_Tren_Mitico;
    public $chequeo_Sesentados_Tren_Mitico;
    public $chequeo_Sesentatres_Tren_Mitico;
    public $chequeo_Sesentacuatro_Tren_Mitico;
    public $chequeo_Sesentacinco_Tren_Mitico;
    public $chequeo_Sesentaseis_Tren_Mitico;
    public $chequeo_Sesentasiete_Tren_Mitico;
    public $chequeo_Sesentaocho_Tren_Mitico;
    public $chequeo_Sesentanueve_Tren_Mitico;
    public $chequeo_Setenta_Tren_Mitico;
    public $chequeo_Setentauno_Tren_Mitico;
    public $chequeo_Setentados_Tren_Mitico;
    public $chequeo_Setentatres_Tren_Mitico;
    public $chequeo_Setentacuatro_Tren_Mitico;
    public $chequeo_Setentacinco_Tren_Mitico;
    public $chequeo_Setentaseis_Tren_Mitico;
    public $chequeo_Setentasiete_Tren_Mitico;
    public $chequeo_Setentaocho_Tren_Mitico;
    public $chequeo_Setentanueve_Tren_Mitico;
    public $chequeo_Ochenta_Tren_Mitico;
    public $chequeo_Ochentauno_Tren_Mitico;
    public $chequeo_Ochentados_Tren_Mitico;
    public $chequeo_Ochentatres_Tren_Mitico;
    public $chequeo_Ochentacuatro_Tren_Mitico;
    public $chequeo_Ochentacinco_Tren_Mitico;
    public $chequeo_Ochentaseis_Tren_Mitico;
    public $chequeo_Ochentasiete_Tren_Mitico;
    public $chequeo_Ochentaocho_Tren_Mitico;
    public $chequeo_Ochentanueve_Tren_Mitico;
    public $chequeo_Noventa_Tren_Mitico;
    public $chequeo_Noventauno_Tren_Mitico;
    public $observaciones;
    public $hora_fin;
    public $imagen;

    public $currentPage = 1;
    public $totalSteps = 7;

    private $validationRules = [
        1 => [
            'hora_inicio' => 'required',
            'chequeo_Uno_Tren_Mitico' => 'required',
            'chequeo_Dos_Tren_Mitico' => 'required',
            'chequeo_Tres_Tren_Mitico' => 'required',
            'chequeo_Cuatro_Tren_Mitico' => 'required',
            'chequeo_Cinco_Tren_Mitico' => 'required',
            'chequeo_Seis_Tren_Mitico' => 'required',
            'chequeo_Siete_Tren_Mitico' => 'required',
            'chequeo_Ocho_Tren_Mitico' => 'required',
            'chequeo_Nueve_Tren_Mitico' => 'required',
            'chequeo_Diez_Tren_Mitico' => 'required',
            'chequeo_Once_Tren_Mitico' => 'required',
            'chequeo_Doce_Tren_Mitico' => 'required',
            'chequeo_Trece_Tren_Mitico' => 'required',
            'chequeo_Catorce_Tren_Mitico' => 'required',
            'chequeo_Quince_Tren_Mitico' => 'required'
        ],
        2 => [
            'chequeo_Dieciseis_Tren_Mitico' => 'required',
            'chequeo_Diecisiete_Tren_Mitico' => 'required',
            'chequeo_Dieciocho_Tren_Mitico' => 'required',
            'chequeo_Diecinueve_Tren_Mitico' => 'required',
            'chequeo_Veinte_Tren_Mitico' => 'required',
            'chequeo_Ventiuno_Tren_Mitico' => 'required',
            'chequeo_Ventidos_Tren_Mitico' => 'required',
            'chequeo_Ventitres_Tren_Mitico' => 'required',
            'chequeo_Venticuatro_Tren_Mitico' => 'required',
            'chequeo_Venticinco_Tren_Mitico' => 'required',
            'chequeo_Ventiseis_Tren_Mitico' => 'required',
            'chequeo_Ventisiete_Tren_Mitico' => 'required',
            'chequeo_Ventiocho_Tren_Mitico' => 'required',
            'chequeo_Ventinueve_Tren_Mitico' => 'required',
            'chequeo_Treinta_Tren_Mitico' => 'required'
        ],
        3 => [
            'chequeo_Treintauno_Tren_Mitico' => 'required',
            'chequeo_Treintados_Tren_Mitico' => 'required',
            'chequeo_Treintatres_Tren_Mitico' => 'required',
            'chequeo_Treintacuatro_Tren_Mitico' => 'required',
            'chequeo_Treintacinco_Tren_Mitico' => 'required',
            'chequeo_Treintaseis_Tren_Mitico' => 'required',
            'chequeo_Treintasiete_Tren_Mitico' => 'required',
            'chequeo_Treintaocho_Tren_Mitico' => 'required',
            'chequeo_Treintanueve_Tren_Mitico' => 'required',
            'chequeo_Cuarenta_Tren_Mitico' => 'required',
            'chequeo_Cuarentauno_Tren_Mitico' => 'required',
            'chequeo_Cuarentados_Tren_Mitico' => 'required'
        ],
        4 => [
            'chequeo_Cuarentatres_Tren_Mitico' => 'required',
            'chequeo_Cuarentacuatro_Tren_Mitico' => 'required',
            'chequeo_Cuarentacinco_Tren_Mitico' => 'required',
            'chequeo_Cuarentaseis_Tren_Mitico' => 'required',
            'chequeo_Cuarentasiete_Tren_Mitico' => 'required',
            'chequeo_Cuarentaocho_Tren_Mitico' => 'required',
            'chequeo_Cuarentanueve_Tren_Mitico' => 'required',
            'chequeo_Cincuenta_Tren_Mitico' => 'required',
            'chequeo_Cincuentauno_Tren_Mitico' => 'required',
            'chequeo_Cincuentados_Tren_Mitico' => 'required',
            'chequeo_Cincuentatres_Tren_Mitico' => 'required',
            'chequeo_Cincuentacuatro_Tren_Mitico' => 'required',
            'chequeo_Cincuentacinco_Tren_Mitico' => 'required',
        ],

        5 => [
            'chequeo_Cincuentaseis_Tren_Mitico' => 'required',
            'chequeo_Cincuentasiete_Tren_Mitico' => 'required',
            'chequeo_Cincuentaocho_Tren_Mitico' => 'required',
            'chequeo_Cincuentanueve_Tren_Mitico' => 'required',
            'chequeo_Sesenta_Tren_Mitico' => 'required',
            'chequeo_Sesentauno_Tren_Mitico' => 'required',
            'chequeo_Sesentados_Tren_Mitico' => 'required',
            'chequeo_Sesentatres_Tren_Mitico' => 'required',
            'chequeo_Sesentacuatro_Tren_Mitico' => 'required',
            'chequeo_Sesentacinco_Tren_Mitico' => 'required',
            'chequeo_Sesentaseis_Tren_Mitico' => 'required',
            'chequeo_Sesentasiete_Tren_Mitico' => 'required',
            'chequeo_Sesentaocho_Tren_Mitico' => 'required',
        ],

        6 => [
            'chequeo_Sesentanueve_Tren_Mitico' => 'required',
            'chequeo_Setenta_Tren_Mitico' => 'required',
            'chequeo_Setentauno_Tren_Mitico' => 'required',
            'chequeo_Setentados_Tren_Mitico' => 'required',
            'chequeo_Setentatres_Tren_Mitico' => 'required',
            'chequeo_Setentacuatro_Tren_Mitico' => 'required',
            'chequeo_Setentacinco_Tren_Mitico' => 'required',
            'chequeo_Setentaseis_Tren_Mitico' => 'required',
            'chequeo_Setentasiete_Tren_Mitico' => 'required',
            'chequeo_Setentaocho_Tren_Mitico' => 'required',
            'chequeo_Setentanueve_Tren_Mitico' => 'required',
            'chequeo_Ochenta_Tren_Mitico' => 'required',
            'chequeo_Ochentauno_Tren_Mitico' => 'required',
            'chequeo_Ochentados_Tren_Mitico' => 'required',
        ],

        7 => [
            'chequeo_Ochentatres_Tren_Mitico' => 'required',
            'chequeo_Ochentacuatro_Tren_Mitico' => 'required',
            'chequeo_Ochentacinco_Tren_Mitico' => 'required',
            'chequeo_Ochentaseis_Tren_Mitico' => 'required',
            'chequeo_Ochentasiete_Tren_Mitico' => 'required',
            'chequeo_Ochentaocho_Tren_Mitico' => 'required',
            'chequeo_Ochentanueve_Tren_Mitico' => 'required',
            'chequeo_Noventa_Tren_Mitico' => 'required',
            'chequeo_Noventauno_Tren_Mitico' => 'required',
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

            ListaChequeoTrenMitico::create([
                'user_id' => auth()->user()->id,
                'hora_Inicio' => $this->hora_inicio,
                'chequeo_Uno_Tren_Mitico' => $this->chequeo_Uno_Tren_Mitico,
                'chequeo_Dos_Tren_Mitico' => $this->chequeo_Dos_Tren_Mitico,
                'chequeo_Tres_Tren_Mitico' => $this->chequeo_Tres_Tren_Mitico,
                'chequeo_Cuatro_Tren_Mitico' => $this->chequeo_Cuatro_Tren_Mitico,
                'chequeo_Cinco_Tren_Mitico' =>  $this->chequeo_Cinco_Tren_Mitico,
                'chequeo_Seis_Tren_Mitico' => $this->chequeo_Seis_Tren_Mitico,
                'chequeo_Siete_Tren_Mitico' => $this->chequeo_Siete_Tren_Mitico,
                'chequeo_Ocho_Tren_Mitico' => $this->chequeo_Ocho_Tren_Mitico,
                'chequeo_Nueve_Tren_Mitico' => $this->chequeo_Nueve_Tren_Mitico,
                'chequeo_Diez_Tren_Mitico' => $this->chequeo_Diez_Tren_Mitico,
                'chequeo_Once_Tren_Mitico' => $this->chequeo_Once_Tren_Mitico,
                'chequeo_Doce_Tren_Mitico' => $this->chequeo_Doce_Tren_Mitico,
                'chequeo_Trece_Tren_Mitico' => $this->chequeo_Trece_Tren_Mitico,
                'chequeo_Catorce_Tren_Mitico' => $this->chequeo_Catorce_Tren_Mitico,
                'chequeo_Quince_Tren_Mitico' =>  $this->chequeo_Quince_Tren_Mitico,
                'chequeo_Dieciseis_Tren_Mitico' =>  $this->chequeo_Dieciseis_Tren_Mitico,
                'chequeo_Diecisiete_Tren_Mitico' =>  $this->chequeo_Diecisiete_Tren_Mitico,
                'chequeo_Dieciocho_Tren_Mitico' => $this->chequeo_Dieciocho_Tren_Mitico,
                'chequeo_Diecinueve_Tren_Mitico' => $this->chequeo_Diecinueve_Tren_Mitico,
                'chequeo_Veinte_Tren_Mitico' => $this->chequeo_Veinte_Tren_Mitico,
                'chequeo_Ventiuno_Tren_Mitico' => $this->chequeo_Ventiuno_Tren_Mitico,
                'chequeo_Ventidos_Tren_Mitico' => $this->chequeo_Ventidos_Tren_Mitico,
                'chequeo_Ventitres_Tren_Mitico' => $this->chequeo_Ventitres_Tren_Mitico,
                'chequeo_Venticuatro_Tren_Mitico' => $this->chequeo_Venticuatro_Tren_Mitico,
                'chequeo_Venticinco_Tren_Mitico' => $this->chequeo_Venticinco_Tren_Mitico,
                'chequeo_Ventiseis_Tren_Mitico' => $this->chequeo_Ventiseis_Tren_Mitico,
                'chequeo_Ventisiete_Tren_Mitico' => $this->chequeo_Ventisiete_Tren_Mitico,
                'chequeo_Ventiocho_Tren_Mitico' => $this->chequeo_Ventiocho_Tren_Mitico,
                'chequeo_Ventinueve_Tren_Mitico' => $this->chequeo_Ventinueve_Tren_Mitico,
                'chequeo_Treinta_Tren_Mitico' => $this->chequeo_Treinta_Tren_Mitico,
                'chequeo_Treintauno_Tren_Mitico' => $this->chequeo_Treintauno_Tren_Mitico,
                'chequeo_Treintados_Tren_Mitico' => $this->chequeo_Treintados_Tren_Mitico,
                'chequeo_Treintatres_Tren_Mitico' => $this->chequeo_Treintatres_Tren_Mitico,
                'chequeo_Treintacuatro_Tren_Mitico' => $this->chequeo_Treintacuatro_Tren_Mitico,
                'chequeo_Treintacinco_Tren_Mitico' => $this->chequeo_Treintacinco_Tren_Mitico,
                'chequeo_Treintaseis_Tren_Mitico' => $this->chequeo_Treintaseis_Tren_Mitico,
                'chequeo_Treintasiete_Tren_Mitico' => $this->chequeo_Treintasiete_Tren_Mitico,
                'chequeo_Treintaocho_Tren_Mitico' => $this->chequeo_Treintaocho_Tren_Mitico,
                'chequeo_Treintanueve_Tren_Mitico' => $this->chequeo_Treintanueve_Tren_Mitico,
                'chequeo_Cuarenta_Tren_Mitico' => $this->chequeo_Cuarenta_Tren_Mitico,
                'chequeo_Cuarentauno_Tren_Mitico' => $this->chequeo_Cuarentauno_Tren_Mitico,
                'chequeo_Cuarentados_Tren_Mitico' => $this->chequeo_Cuarentados_Tren_Mitico,
                'chequeo_Cuarentatres_Tren_Mitico' => $this->chequeo_Cuarentatres_Tren_Mitico,
                'chequeo_Cuarentacuatro_Tren_Mitico' => $this->chequeo_Cuarentacuatro_Tren_Mitico,
                'chequeo_Cuarentacinco_Tren_Mitico' => $this->chequeo_Cuarentacinco_Tren_Mitico,
                'chequeo_Cuarentaseis_Tren_Mitico' => $this->chequeo_Cuarentaseis_Tren_Mitico,
                'chequeo_Cuarentasiete_Tren_Mitico' => $this->chequeo_Cuarentasiete_Tren_Mitico,
                'chequeo_Cuarentaocho_Tren_Mitico' => $this->chequeo_Cuarentaocho_Tren_Mitico,
                'chequeo_Cuarentanueve_Tren_Mitico' => $this->chequeo_Cuarentanueve_Tren_Mitico,
                'chequeo_Cincuenta_Tren_Mitico' => $this->chequeo_Cincuenta_Tren_Mitico,
                'chequeo_Cincuentauno_Tren_Mitico' => $this->chequeo_Cincuentauno_Tren_Mitico,
                'chequeo_Cincuentados_Tren_Mitico' => $this->chequeo_Cincuentados_Tren_Mitico,
                'chequeo_Cincuentatres_Tren_Mitico' => $this->chequeo_Cincuentatres_Tren_Mitico,
                'chequeo_Cincuentacuatro_Tren_Mitico' => $this->chequeo_Cincuentacuatro_Tren_Mitico,
                'chequeo_Cincuentacinco_Tren_Mitico' => $this->chequeo_Cincuentacinco_Tren_Mitico,
                'chequeo_Cincuentaseis_Tren_Mitico' => $this->chequeo_Cincuentaseis_Tren_Mitico,
                'chequeo_Cincuentasiete_Tren_Mitico' => $this->chequeo_Cincuentasiete_Tren_Mitico,
                'chequeo_Cincuentaocho_Tren_Mitico' => $this->chequeo_Cincuentaocho_Tren_Mitico,
                'chequeo_Cincuentanueve_Tren_Mitico' => $this->chequeo_Cincuentanueve_Tren_Mitico,
                'chequeo_Sesenta_Tren_Mitico' => $this->chequeo_Sesenta_Tren_Mitico,
                'chequeo_Sesentauno_Tren_Mitico' => $this->chequeo_Sesentauno_Tren_Mitico,
                'chequeo_Sesentados_Tren_Mitico' => $this->chequeo_Sesentados_Tren_Mitico,
                'chequeo_Sesentatres_Tren_Mitico' => $this->chequeo_Sesentatres_Tren_Mitico,
                'chequeo_Sesentacuatro_Tren_Mitico' => $this->chequeo_Sesentacuatro_Tren_Mitico,
                'chequeo_Sesentacinco_Tren_Mitico' => $this->chequeo_Sesentacinco_Tren_Mitico,
                'chequeo_Sesentaseis_Tren_Mitico' => $this->chequeo_Sesentaseis_Tren_Mitico,
                'chequeo_Sesentasiete_Tren_Mitico' => $this->chequeo_Sesentasiete_Tren_Mitico,
                'chequeo_Sesentaocho_Tren_Mitico' => $this->chequeo_Sesentaocho_Tren_Mitico,
                'chequeo_Sesentanueve_Tren_Mitico' => $this->chequeo_Sesentanueve_Tren_Mitico,
                'chequeo_Setenta_Tren_Mitico' => $this->chequeo_Setenta_Tren_Mitico,
                'chequeo_Setentauno_Tren_Mitico' => $this->chequeo_Setentauno_Tren_Mitico,
                'chequeo_Setentados_Tren_Mitico' => $this->chequeo_Setentados_Tren_Mitico,
                'chequeo_Setentatres_Tren_Mitico' => $this->chequeo_Setentatres_Tren_Mitico,
                'chequeo_Setentacuatro_Tren_Mitico' => $this->chequeo_Setentacuatro_Tren_Mitico,
                'chequeo_Setentacinco_Tren_Mitico' => $this->chequeo_Setentacinco_Tren_Mitico,
                'chequeo_Setentaseis_Tren_Mitico' => $this->chequeo_Setentaseis_Tren_Mitico,
                'chequeo_Setentasiete_Tren_Mitico' => $this->chequeo_Setentasiete_Tren_Mitico,
                'chequeo_Setentaocho_Tren_Mitico' => $this->chequeo_Setentaocho_Tren_Mitico,
                'chequeo_Setentanueve_Tren_Mitico' => $this->chequeo_Setentanueve_Tren_Mitico,
                'chequeo_Ochenta_Tren_Mitico' => $this->chequeo_Ochenta_Tren_Mitico,
                'chequeo_Ochentauno_Tren_Mitico' => $this->chequeo_Ochentauno_Tren_Mitico,
                'chequeo_Ochentados_Tren_Mitico' => $this->chequeo_Ochentados_Tren_Mitico,
                'chequeo_Ochentatres_Tren_Mitico' => $this->chequeo_Ochentatres_Tren_Mitico,
                'chequeo_Ochentacuatro_Tren_Mitico' => $this->chequeo_Ochentacuatro_Tren_Mitico,
                'chequeo_Ochentacinco_Tren_Mitico' => $this->chequeo_Ochentacinco_Tren_Mitico,      
                'chequeo_Ochentaseis_Tren_Mitico' => $this->chequeo_Ochentaseis_Tren_Mitico, 
                'chequeo_Ochentasiete_Tren_Mitico' => $this->chequeo_Ochentasiete_Tren_Mitico, 
                'chequeo_Ochentaocho_Tren_Mitico' => $this->chequeo_Ochentaocho_Tren_Mitico, 
                'chequeo_Ochentanueve_Tren_Mitico' => $this->chequeo_Ochentanueve_Tren_Mitico,  
                'chequeo_Noventa_Tren_Mitico' => $this->chequeo_Noventa_Tren_Mitico, 
                'chequeo_Noventauno_Tren_Mitico' => $this->chequeo_Noventauno_Tren_Mitico,      
                'observaciones' => $this->observaciones,
                'hora_Fin' => $this->hora_fin,
                'imagen' => $imagen
            ]);

            //Mensaje al usuario
            session()->flash('mensaje', 'La lista de chequeo se creo correctamente');
            return redirect()->to('/listaChequeoTrenMitico');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.lista-chequeo-tren-mitico.create', ['calificaciones' => Calificaciones::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage] );
    }
}
