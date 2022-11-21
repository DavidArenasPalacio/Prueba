<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoKamikaze extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Kamikaze',
        'chequeo_Dos_Kamikaze',
        'chequeo_Tres_Kamikaze',
        'chequeo_Cuatro_Kamikaze',
        'chequeo_Cinco_Kamikaze',
        'chequeo_Seis_Kamikaze',
        'chequeo_Siete_Kamikaze',
        'chequeo_Ocho_Kamikaze',
        'chequeo_Nueve_Kamikaze',
        'chequeo_Diez_Kamikaze',
        'chequeo_Once_Kamikaze',
        'chequeo_Doce_Kamikaze',
        'chequeo_Trece_Kamikaze',
        'chequeo_Catorce_Kamikaze',
        'chequeo_Quince_Kamikaze',
        'chequeo_Dieciseis_Kamikaze',
        'chequeo_Diecisiete_Kamikaze',
        'chequeo_Dieciocho_Kamikaze',
        'chequeo_Diecinueve_Kamikaze',
        'chequeo_Veinte_Kamikaze',
        'chequeo_Ventiuno_Kamikaze',
        'chequeo_Ventidos_Kamikaze',
        'chequeo_Ventitres_Kamikaze',
        'chequeo_Venticuatro_Kamikaze',
        'chequeo_Venticinco_Kamikaze',
        'chequeo_Ventiseis_Kamikaze',
        'chequeo_Ventisiete_Kamikaze',
        'chequeo_Ventiocho_Kamikaze',
        'chequeo_Ventinueve_Kamikaze',
        'chequeo_Treinta_Kamikaze',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
