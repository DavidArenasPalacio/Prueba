<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoPolar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Polar',
        'chequeo_Dos_Polar',
        'chequeo_Tres_Polar',
        'chequeo_Cuatro_Polar',
        'chequeo_Cinco_Polar',
        'chequeo_Seis_Polar',
        'chequeo_Siete_Polar',
        'chequeo_Ocho_Polar',
        'chequeo_Nueve_Polar',
        'chequeo_Diez_Polar',
        'chequeo_Once_Polar',
        'chequeo_Doce_Polar',
        'chequeo_Trece_Polar',
        'chequeo_Catorce_Polar',
        'chequeo_Quince_Polar',
        'chequeo_Dieciseis_Polar',
        'chequeo_Diecisiete_Polar',
        'chequeo_Dieciocho_Polar',
        'chequeo_Diecinueve_Polar',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
