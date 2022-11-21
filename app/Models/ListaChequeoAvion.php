<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoAvion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Avion',
        'chequeo_Dos_Avion',
        'chequeo_Tres_Avion',
        'chequeo_Cuatro_Avion',
        'chequeo_Cinco_Avion',
        'chequeo_Seis_Avion',
        'chequeo_Siete_Avion',
        'chequeo_Ocho_Avion',
        'chequeo_Nueve_Avion',
        'chequeo_Diez_Avion',
        'chequeo_Once_Avion',
        'chequeo_Doce_Avion',
        'chequeo_Trece_Avion',
        'chequeo_Catorce_Avion',
        'chequeo_Quince_Avion',
        'chequeo_Dieciseis_Avion',
        'chequeo_Diecisiete_Avion',
        'chequeo_Dieciocho_Avion',
        'chequeo_Diecinueve_Avion',
        'chequeo_Veinte_Avion',
        'chequeo_Ventiuno_Avion',
        'chequeo_Ventidos_Avion',
        'chequeo_Ventitres_Avion',
        'chequeo_Venticuatro_Avion',
        'chequeo_Venticinco_Avion',
        'chequeo_Ventiseis_Avion',
        'chequeo_Ventisiete_Avion',
        'chequeo_Ventiocho_Avion',
        'chequeo_Ventinueve_Avion',
        'chequeo_Treinta_Avion',
        'chequeo_Treintauno_Avion',
        'chequeo_Treintados_Avion',
        'chequeo_Treintatres_Avion',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
