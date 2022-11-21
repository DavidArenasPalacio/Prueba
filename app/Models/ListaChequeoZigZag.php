<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoZigZag extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_ZigZag',
        'chequeo_Dos_ZigZag',
        'chequeo_Tres_ZigZag',
        'chequeo_Cuatro_ZigZag',
        'chequeo_Cinco_ZigZag',
        'chequeo_Seis_ZigZag',
        'chequeo_Siete_ZigZag',
        'chequeo_Ocho_ZigZag',
        'chequeo_Nueve_ZigZag',
        'chequeo_Diez_ZigZag',
        'chequeo_Once_ZigZag',
        'chequeo_Doce_ZigZag',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
