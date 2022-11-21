<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoCanopy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Canopy',
        'chequeo_Dos_Canopy',
        'chequeo_Tres_Canopy',
        'chequeo_Cuatro_Canopy',
        'chequeo_Cinco_Canopy',
        'chequeo_Seis_Canopy',
        'chequeo_Siete_Canopy',
        'chequeo_Ocho_Canopy',
        'chequeo_Nueve_Canopy',
        'chequeo_Diez_Canopy',
        'chequeo_Once_Canopy',
        'chequeo_Doce_Canopy',
        'chequeo_Trece_Canopy',
        'chequeo_Catorce_Canopy',
        'chequeo_Quince_Canopy',
        'chequeo_Dieciseis_Canopy',
        'chequeo_Diecisiete_Canopy',
        'chequeo_Dieciocho_Canopy',
        'chequeo_Diecinueve_Canopy',
        'chequeo_Veinte_Canopy',
        'chequeo_Ventiuno_Canopy',
        'chequeo_Ventidos_Canopy',
        'chequeo_Ventitres_Canopy',
        'chequeo_Venticuatro_Canopy',
        'chequeo_Venticinco_Canopy',
        'chequeo_Ventiseis_Canopy',
        'chequeo_Ventisiete_Canopy',
        'chequeo_Ventiocho_Canopy',
        'chequeo_Ventinueve_Canopy',
        'chequeo_Treinta_Canopy',
        'chequeo_Treintauno_Canopy',
        'chequeo_Treintados_Canopy',
        'chequeo_Treintatres_Canopy',
        'chequeo_Treintacuatro_Canopy',
        'chequeo_Treintacinco_Canopy',
        'chequeo_Treintaseis_Canopy',
        'chequeo_Treintasiete_Canopy',
        'chequeo_Treintaocho_Canopy',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
