<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoUrbano extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Urbano',
        'chequeo_Dos_Urbano',
        'chequeo_Tres_Urbano',
        'chequeo_Cuatro_Urbano',
        'chequeo_Cinco_Urbano',
        'chequeo_Seis_Urbano',
        'chequeo_Siete_Urbano',
        'chequeo_Ocho_Urbano',
        'chequeo_Nueve_Urbano',
        'chequeo_Diez_Urbano',
        'chequeo_Once_Urbano',
        'chequeo_Doce_Urbano',
        'chequeo_Trece_Urbano',
        'chequeo_Catorce_Urbano',
        'chequeo_Quince_Urbano',
        'chequeo_Dieciseis_Urbano',
        'chequeo_Diecisiete_Urbano',
        'chequeo_Dieciocho_Urbano',
        'chequeo_Diecinueve_Urbano',
        'chequeo_Veinte_Urbano',
        'chequeo_Ventiuno_Urbano',
        'chequeo_Ventidos_Urbano',
        'chequeo_Ventitres_Urbano',
        'chequeo_Venticuatro_Urbano',
        'chequeo_Venticinco_Urbano',
        'chequeo_Ventiseis_Urbano',
        'chequeo_Ventisiete_Urbano',
        'chequeo_Ventiocho_Urbano',
        'chequeo_Ventinueve_Urbano',
        'chequeo_Treinta_Urbano',
        'chequeo_Treintauno_Urbano',
        'chequeo_Treintados_Urbano',
        'chequeo_Treintatres_Urbano',
        'chequeo_Treintacuatro_Urbano',
        'chequeo_Treintacinco_Urbano',
        'chequeo_Treintaseis_Urbano',
        'chequeo_Treintasiete_Urbano',
        'chequeo_Treintaocho_Urbano',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
