<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoInvasion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Invasion',
        'chequeo_Dos_Invasion',
        'chequeo_Tres_Invasion',
        'chequeo_Cuatro_Invasion',
        'chequeo_Cinco_Invasion',
        'chequeo_Seis_Invasion',
        'chequeo_Siete_Invasion',
        'chequeo_Ocho_Invasion',
        'chequeo_Nueve_Invasion',
        'chequeo_Diez_Invasion',
        'chequeo_Once_Invasion',
        'chequeo_Doce_Invasion',
        'chequeo_Trece_Invasion',
        'chequeo_Catorce_Invasion',
        'chequeo_Quince_Invasion',
        'chequeo_Dieciseis_Invasion',
        'chequeo_Diecisiete_Invasion',
        'chequeo_Dieciocho_Invasion',
        'chequeo_Diecinueve_Invasion',
        'chequeo_Veinte_Invasion',
        'chequeo_Ventiuno_Invasion',
        'chequeo_Ventidos_Invasion',
        'chequeo_Ventitres_Invasion',
        'chequeo_Venticuatro_Invasion',
        'chequeo_Venticinco_Invasion',
        'chequeo_Ventiseis_Invasion',
        'chequeo_Ventisiete_Invasion',
        'chequeo_Ventiocho_Invasion',
        'chequeo_Ventinueve_Invasion',
        'chequeo_Treinta_Invasion',
        'chequeo_Treintauno_Invasion',
        'chequeo_Treintados_Invasion',
        'chequeo_Treintatres_Invasion',
        'chequeo_Treintacuatro_Invasion',
        'chequeo_Treintacinco_Invasion',
        'chequeo_Treintaseis_Invasion',
        'chequeo_Treintasiete_Invasion',
        'chequeo_Treintaocho_Invasion',
        'chequeo_Treintanueve_Invasion',
        'chequeo_Cuarenta_Invasion',
        'hora_operacion_tablero',
        'verificar_voltaje_selector',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
