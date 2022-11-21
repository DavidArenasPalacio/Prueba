<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoMiniCrash extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Mini_Crash',
        'chequeo_Dos_Mini_Crash',
        'chequeo_Tres_Mini_Crash',
        'chequeo_Cuatro_Mini_Crash',
        'chequeo_Cinco_Mini_Crash',
        'chequeo_Seis_Mini_Crash',
        'chequeo_Siete_Mini_Crash',
        'chequeo_Ocho_Mini_Crash',
        'chequeo_Nueve_Mini_Crash',
        'chequeo_Diez_Mini_Crash',
        'chequeo_Once_Mini_Crash',
        'chequeo_Doce_Mini_Crash',
        'chequeo_Trece_Mini_Crash',
        'chequeo_Catorce_Mini_Crash',
        'chequeo_Quince_Mini_Crash',
        'chequeo_Dieciseis_Mini_Crash',
        'chequeo_Diecisiete_Mini_Crash',
        'chequeo_Dieciocho_Mini_Crash',
        'chequeo_Diecinueve_Mini_Crash',
        'chequeo_Veinte_Mini_Crash',
        'chequeo_Ventiuno_Mini_Crash',
        'chequeo_Ventidos_Mini_Crash',
        'chequeo_Ventitres_Mini_Crash',
        'chequeo_Venticuatro_Mini_Crash',
        'chequeo_Venticinco_Mini_Crash',
        'chequeo_Ventiseis_Mini_Crash',
        'chequeo_Ventisiete_Mini_Crash',
        'chequeo_Ventiocho_Mini_Crash',
        'chequeo_Ventinueve_Mini_Crash',
        'chequeo_Treinta_Mini_Crash',
        'chequeo_Treintauno_Mini_Crash',
        'chequeo_Treintados_Mini_Crash',
        'chequeo_Treintatres_Mini_Crash',
        'chequeo_Treintacuatro_Mini_Crash',
        'chequeo_Treintacinco_Mini_Crash',
        'chequeo_Treintaseis_Mini_Crash',
        'chequeo_Treintasiete_Mini_Crash',
        'chequeo_Treintaocho_Mini_Crash',
        'chequeo_Treintanueve_Mini_Crash',
        'chequeo_Cuarenta_Mini_Crash',
        'chequeo_Cuarentauno_Mini_Crash',
        'chequeo_Cuarentados_Mini_Crash',
        'VRN',
        'VTR',
        'VRS',
        'VST',
        'tablero_potencia_voltaje',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
