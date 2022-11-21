<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoJungla extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Jungla',
        'chequeo_Dos_Jungla',
        'chequeo_Tres_Jungla',
        'chequeo_Cuatro_Jungla',
        'chequeo_Cinco_Jungla',
        'chequeo_Seis_Jungla',
        'chequeo_Siete_Jungla',
        'chequeo_Ocho_Jungla',
        'chequeo_Nueve_Jungla',
        'chequeo_Diez_Jungla',
        'chequeo_Once_Jungla',
        'chequeo_Doce_Jungla',
        'chequeo_Trece_Jungla',
        'chequeo_Catorce_Jungla',
        'chequeo_Quince_Jungla',
        'chequeo_Dieciseis_Jungla',
        'chequeo_Diecisiete_Jungla',
        'chequeo_Dieciocho_Jungla',
        'chequeo_Diecinueve_Jungla',
        'chequeo_Veinte_Jungla',
        'chequeo_Ventiuno_Jungla',
        'chequeo_Ventidos_Jungla',
        'chequeo_Ventitres_Jungla',
        'chequeo_Venticuatro_Jungla',
        'chequeo_Venticinco_Jungla',
        'chequeo_Ventiseis_Jungla',
        'chequeo_Ventisiete_Jungla',
        'chequeo_Ventiocho_Jungla',
        'chequeo_Ventinueve_Jungla',
        'chequeo_Treinta_Jungla',
        'chequeo_Treintauno_Jungla',
        'chequeo_Treintados_Jungla',
        'chequeo_Treintatres_Jungla',
        'chequeo_Treintacuatro_Jungla',
        'chequeo_Treintacinco_Jungla',
        'chequeo_Treintaseis_Jungla',
        'chequeo_Treintasiete_Jungla',
        'chequeo_Treintaocho_Jungla',
        'chequeo_Treintanueve_Jungla',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
