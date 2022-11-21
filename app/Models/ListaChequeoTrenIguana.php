<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoTrenIguana extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Tren_Iguana',
        'chequeo_Dos_Tren_Iguana',
        'chequeo_Tres_Tren_Iguana',
        'chequeo_Cuatro_Tren_Iguana',
        'chequeo_Cinco_Tren_Iguana',
        'chequeo_Seis_Tren_Iguana',
        'chequeo_Siete_Tren_Iguana',
        'chequeo_Ocho_Tren_Iguana',
        'chequeo_Nueve_Tren_Iguana',
        'chequeo_Diez_Tren_Iguana',
        'chequeo_Once_Tren_Iguana',
        'chequeo_Doce_Tren_Iguana',
        'chequeo_Trece_Tren_Iguana',
        'chequeo_Catorce_Tren_Iguana',
        'chequeo_Quince_Tren_Iguana',
        'chequeo_Dieciseis_Tren_Iguana',
        'chequeo_Diecisiete_Tren_Iguana',
        'chequeo_Dieciocho_Tren_Iguana',
        'chequeo_Diecinueve_Tren_Iguana',
        'chequeo_Veinte_Tren_Iguana',
        'chequeo_Ventiuno_Tren_Iguana',
        'chequeo_Ventidos_Tren_Iguana',
        'chequeo_Ventitres_Tren_Iguana',
        'chequeo_Venticuatro_Tren_Iguana',
        'chequeo_Venticinco_Tren_Iguana',
        'chequeo_Ventiseis_Tren_Iguana',
        'chequeo_Ventisiete_Tren_Iguana',
        'hora_operacion_tablero',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
