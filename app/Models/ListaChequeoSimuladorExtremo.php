<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoSimuladorExtremo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Simulador_Extremo',
        'chequeo_Dos_Simulador_Extremo',
        'chequeo_Tres_Simulador_Extremo',
        'chequeo_Cuatro_Simulador_Extremo',
        'chequeo_Cinco_Simulador_Extremo',
        'chequeo_Seis_Simulador_Extremo',
        'chequeo_Siete_Simulador_Extremo',
        'chequeo_Ocho_Simulador_Extremo',
        'chequeo_Nueve_Simulador_Extremo',
        'chequeo_Diez_Simulador_Extremo',
        'chequeo_Once_Simulador_Extremo',
        'chequeo_Doce_Simulador_Extremo',
        'chequeo_Trece_Simulador_Extremo',
        'chequeo_Catorce_Simulador_Extremo',
        'chequeo_Quince_Simulador_Extremo',
        'chequeo_Dieciseis_Simulador_Extremo',
        'chequeo_Diecisiete_Simulador_Extremo',
        'chequeo_Dieciocho_Simulador_Extremo',
        'chequeo_Diecinueve_Simulador_Extremo',
        'chequeo_Veinte_Simulador_Extremo',
        'chequeo_Ventiuno_Simulador_Extremo',
        'chequeo_Ventidos_Simulador_Extremo',
        'chequeo_Ventitres_Simulador_Extremo',
        'chequeo_Venticuatro_Simulador_Extremo',
        'chequeo_Venticinco_Simulador_Extremo',
        'chequeo_Ventiseis_Simulador_Extremo',
        'chequeo_Ventisiete_Simulador_Extremo',
        'chequeo_Ventiocho_Simulador_Extremo',
        'chequeo_Ventinueve_Simulador_Extremo',
        'chequeo_Treinta_Simulador_Extremo',
        'chequeo_Treintauno_Simulador_Extremo',
        'chequeo_Treintados_Simulador_Extremo',
        'horas_operacion_compresor',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
