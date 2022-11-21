<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoEspacioInfinito extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Espacio_Infinito',
        'chequeo_Dos_Espacio_Infinito',
        'chequeo_Tres_Espacio_Infinito',
        'chequeo_Cuatro_Espacio_Infinito',
        'chequeo_Cinco_Espacio_Infinito',
        'chequeo_Seis_Espacio_Infinito',
        'chequeo_Siete_Espacio_Infinito',
        'chequeo_Ocho_Espacio_Infinito',
        'chequeo_Nueve_Espacio_Infinito',
        'chequeo_Diez_Espacio_Infinito',
        'chequeo_Once_Espacio_Infinito',
        'chequeo_Doce_Espacio_Infinito',
        'chequeo_Trece_Espacio_Infinito',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];
}
