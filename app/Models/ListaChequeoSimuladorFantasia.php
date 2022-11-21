<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoSimuladorFantasia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_Simulador_Fantasia',
        'chequeo_Dos_Simulador_Fantasia',
        'chequeo_Tres_Simulador_Fantasia',
        'chequeo_Cuatro_Simulador_Fantasia',
        'chequeo_Cinco_Simulador_Fantasia',
        'chequeo_Seis_Simulador_Fantasia',
        'chequeo_Siete_Simulador_Fantasia',
        'chequeo_Ocho_Simulador_Fantasia',
        'chequeo_Nueve_Simulador_Fantasia',
        'chequeo_Diez_Simulador_Fantasia',
        'chequeo_Once_Simulador_Fantasia',
        'chequeo_Doce_Simulador_Fantasia',
        'chequeo_Trece_Simulador_Fantasia',
        'chequeo_Catorce_Simulador_Fantasia',
        'chequeo_Quince_Simulador_Fantasia',
        'chequeo_Dieciseis_Simulador_Fantasia',
        'chequeo_Diecisiete_Simulador_Fantasia',
        'chequeo_Dieciocho_Simulador_Fantasia',
        'chequeo_Diecinueve_Simulador_Fantasia',
        'chequeo_Veinte_Simulador_Fantasia',
        'chequeo_Ventiuno_Simulador_Fantasia',
        'chequeo_Ventidos_Simulador_Fantasia',
        'chequeo_Ventitres_Simulador_Fantasia',
        'chequeo_Venticuatro_Simulador_Fantasia',
        'chequeo_Venticinco_Simulador_Fantasia',
        'chequeo_Ventiseis_Simulador_Fantasia',
        'chequeo_Ventisiete_Simulador_Fantasia',
        'chequeo_Ventiocho_Simulador_Fantasia',
        'chequeo_Ventinueve_Simulador_Fantasia',
        'chequeo_Treinta_Simulador_Fantasia',
        'chequeo_Treintauno_Simulador_Fantasia',
        'chequeo_Treintados_Simulador_Fantasia',
        'chequeo_Treintatres_Simulador_Fantasia',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
