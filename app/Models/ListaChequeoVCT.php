<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaChequeoVCT extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'hora_Inicio',
        'chequeo_Uno_VCT',
        'chequeo_Dos_VCT',
        'chequeo_Tres_VCT',
        'chequeo_Cuatro_VCT',
        'chequeo_Cinco_VCT',
        'chequeo_Seis_VCT',
        'chequeo_Siete_VCT',
        'chequeo_Ocho_VCT',
        'chequeo_Nueve_VCT',
        'chequeo_Diez_VCT',
        'chequeo_Once_VCT',
        'chequeo_Doce_VCT',
        'chequeo_Trece_VCT',
        'chequeo_Catorce_VCT',
        'chequeo_Quince_VCT',
        'chequeo_Dieciseis_VCT',
        'chequeo_Diecisiete_VCT',
        'chequeo_Dieciocho_VCT',
        'chequeo_Diecinueve_VCT',
        'chequeo_Veinte_VCT',
        'chequeo_Ventiuno_VCT',
        'chequeo_Ventidos_VCT',
        'chequeo_Ventitres_VCT',
        'chequeo_Venticuatro_VCT',
        'chequeo_Venticinco_VCT',
        'chequeo_Ventiseis_VCT',
        'chequeo_Ventisiete_VCT',
        'chequeo_Ventiocho_VCT',
        'chequeo_Ventinueve_VCT',
        'chequeo_Treinta_VCT',
        'chequeo_Treintauno_VCT',
        'chequeo_Treintados_VCT',
        'chequeo_Treintatres_VCT',
        'chequeo_Treintacuatro_VCT',
        'chequeo_Treintacinco_VCT',
        'chequeo_Treintaseis_VCT',
        'chequeo_Treintasiete_VCT',
        'chequeo_Treintaocho_VCT',
        'chequeo_Treintanueve_VCT',
        'chequeo_Cuarenta_VCT',
        'chequeo_Cuarentauno_VCT',
        'chequeo_Cuarentados_VCT',
        'chequeo_Cuarentatres_VCT',
        'chequeo_Cuarentacuatro_VCT',
        'chequeo_Cuarentacinco_VCT',
        'chequeo_Cuarentaseis_VCT',
        'chequeo_Cuarentasiete_VCT',
        'chequeo_Cuarentaocho_VCT',
        'chequeo_Cuarentanueve_VCT',
        'chequeo_Cincuenta_VCT',
        'chequeo_Cincuentauno_VCT',
        'chequeo_Cincuentados_VCT',
        'chequeo_Cincuentatres_VCT',
        'chequeo_Cincuentacuatro_VCT',
        'chequeo_Cincuentacinco_VCT',
        'chequeo_Cincuentaseis_VCT',
        'chequeo_Cincuentasiete_VCT',
        'observaciones',
        'hora_Fin',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
