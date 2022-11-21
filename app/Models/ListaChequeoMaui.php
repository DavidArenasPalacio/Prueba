<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoMaui extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Maui',
        'chequeo_Dos_Maui',
        'chequeo_Tres_Maui',
        'chequeo_Cuatro_Maui',
        'chequeo_Cinco_Maui',
        'chequeo_Seis_Maui',
        'chequeo_Siete_Maui',
        'chequeo_Ocho_Maui',
        'chequeo_Nueve_Maui',
        'chequeo_Diez_Maui',
        'chequeo_Once_Maui',
        'chequeo_Doce_Maui',
        'chequeo_Trece_Maui',
        'chequeo_Catorce_Maui',
        'chequeo_Quince_Maui',
        'chequeo_Dieciseis_Maui',
        'chequeo_Diecisiete_Maui',
        'chequeo_Dieciocho_Maui',
        'chequeo_Diecinueve_Maui',
        'chequeo_Veinte_Maui',
        'chequeo_Ventiuno_Maui',
        'chequeo_Ventidos_Maui',
        'chequeo_Ventitres_Maui',
        'chequeo_Venticuatro_Maui',
        'chequeo_Venticinco_Maui',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
