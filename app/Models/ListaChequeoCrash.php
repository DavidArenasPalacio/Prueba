<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoCrash extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Crash',
        'chequeo_Dos_Crash',
        'chequeo_Tres_Crash',
        'chequeo_Cuatro_Crash',
        'chequeo_Cinco_Crash',
        'chequeo_Seis_Crash',
        'chequeo_Siete_Crash',
        'chequeo_Ocho_Crash',
        'chequeo_Nueve_Crash',
        'chequeo_Diez_Crash',
        'chequeo_Once_Crash',
        'chequeo_Doce_Crash',
        'chequeo_Trece_Crash',
        'chequeo_Catorce_Crash',
        'chequeo_Quince_Crash',
        'chequeo_Dieciseis_Crash',
        'chequeo_Diecisiete_Crash',
        'chequeo_Dieciocho_Crash',
        'chequeo_Diecinueve_Crash',
        'chequeo_Veinte_Crash',
        'chequeo_Ventiuno_Crash',
        'chequeo_Ventidos_Crash',
        'chequeo_Ventitres_Crash',
        'chequeo_Venticuatro_Crash',
        'chequeo_Venticinco_Crash',
        'chequeo_Ventiseis_Crash',
        'chequeo_Ventisiete_Crash',
        'chequeo_Ventiocho_Crash',
        'chequeo_Ventinueve_Crash',
        'chequeo_Treinta_Crash',
        'chequeo_Treintauno_Crash',
        'chequeo_Treintados_Crash',
        'chequeo_Treintatres_Crash',
        'chequeo_Treintacuatro_Crash',
        'chequeo_Treintacinco_Crash',
        'chequeo_Treintaseis_Crash',
        'chequeo_Treintasiete_Crash',
        'chequeo_Treintaocho_Crash',
        'chequeo_Treintanueve_Crash',
        'chequeo_Cuarenta_Crash',
        'chequeo_Cuarentauno_Crash',
        'chequeo_Cuarentados_Crash',
        'chequeo_Cuarentatres_Crash',
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
