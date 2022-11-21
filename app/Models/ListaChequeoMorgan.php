<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoMorgan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Morgan',
        'chequeo_Dos_Morgan',
        'chequeo_Tres_Morgan',
        'chequeo_Cuatro_Morgan',
        'chequeo_Cinco_Morgan',
        'chequeo_Seis_Morgan',
        'chequeo_Siete_Morgan',
        'chequeo_Ocho_Morgan',
        'chequeo_Nueve_Morgan',
        'chequeo_Diez_Morgan',
        'chequeo_Once_Morgan',
        'chequeo_Doce_Morgan',
        'chequeo_Trece_Morgan',
        'chequeo_Catorce_Morgan',
        'chequeo_Quince_Morgan',
        'chequeo_Dieciseis_Morgan',
        'chequeo_Diecisiete_Morgan',
        'chequeo_Dieciocho_Morgan',
        'chequeo_Diecinueve_Morgan',
        'chequeo_Veinte_Morgan',
        'chequeo_Ventiuno_Morgan',
        'chequeo_Ventidos_Morgan',
        'chequeo_Ventitres_Morgan',
        'chequeo_Venticuatro_Morgan',
        'chequeo_Venticinco_Morgan',
        'chequeo_Ventiseis_Morgan',
        'chequeo_Ventisiete_Morgan',
        'chequeo_Ventiocho_Morgan',
        'chequeo_Ventinueve_Morgan',
        'chequeo_Treinta_Morgan',
        'chequeo_Treintauno_Morgan',
        'chequeo_Treintados_Morgan',
        'chequeo_Treintatres_Morgan',
        'chequeo_Treintacuatro_Morgan',
        'chequeo_Treintacinco_Morgan',
        'chequeo_Treintaseis_Morgan',
        'chequeo_Treintasiete_Morgan',
        'chequeo_Treintaocho_Morgan',
        'chequeo_Treintanueve_Morgan',
        'chequeo_Cuarenta_Morgan',
        'chequeo_Cuarentauno_Morgan',
        'chequeo_Cuarentados_Morgan',
        'chequeo_Cuarentatres_Morgan',
        'chequeo_Cuarentacuatro_Morgan',
        'chequeo_Cuarentacinco_Morgan',
        'chequeo_Cuarentaseis_Morgan',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
