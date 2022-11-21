<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_chequeo_v_c_t_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_VCT', 5);
            $table->char('chequeo_Dos_VCT', 5);
            $table->char('chequeo_Tres_VCT', 5);
            $table->char('chequeo_Cuatro_VCT', 5);
            $table->char('chequeo_Cinco_VCT', 5);
            $table->char('chequeo_Seis_VCT', 5);
            $table->char('chequeo_Siete_VCT', 5);
            $table->char('chequeo_Ocho_VCT', 5);
            $table->char('chequeo_Nueve_VCT', 5);
            $table->char('chequeo_Diez_VCT', 5);
            $table->char('chequeo_Once_VCT', 5);
            $table->char('chequeo_Doce_VCT', 5);
            $table->char('chequeo_Trece_VCT', 5);
            $table->char('chequeo_Catorce_VCT', 5);
            $table->char('chequeo_Quince_VCT', 5);
            $table->char('chequeo_Dieciseis_VCT', 5);
            $table->char('chequeo_Diecisiete_VCT', 5);
            $table->char('chequeo_Dieciocho_VCT', 5);
            $table->char('chequeo_Diecinueve_VCT', 5);
            $table->char('chequeo_Veinte_VCT', 5);
            $table->char('chequeo_Ventiuno_VCT', 5);
            $table->char('chequeo_Ventidos_VCT', 5);
            $table->char('chequeo_Ventitres_VCT', 5);
            $table->char('chequeo_Venticuatro_VCT', 5);
            $table->char('chequeo_Venticinco_VCT', 5);
            $table->char('chequeo_Ventiseis_VCT', 5);
            $table->char('chequeo_Ventisiete_VCT', 5);
            $table->char('chequeo_Ventiocho_VCT', 5);
            $table->char('chequeo_Ventinueve_VCT', 5);
            $table->char('chequeo_Treinta_VCT', 5);
            $table->char('chequeo_Treintauno_VCT', 5);
            $table->char('chequeo_Treintados_VCT', 5);
            $table->char('chequeo_Treintatres_VCT', 5);
            $table->char('chequeo_Treintacuatro_VCT', 5);
            $table->char('chequeo_Treintacinco_VCT', 5);
            $table->char('chequeo_Treintaseis_VCT', 5);
            $table->char('chequeo_Treintasiete_VCT', 5);
            $table->char('chequeo_Treintaocho_VCT', 5);
            $table->char('chequeo_Treintanueve_VCT', 5);
            $table->char('chequeo_Cuarenta_VCT', 5);
            $table->char('chequeo_Cuarentauno_VCT', 5);
            $table->char('chequeo_Cuarentados_VCT', 5);
            $table->char('chequeo_Cuarentatres_VCT', 5);
            $table->char('chequeo_Cuarentacuatro_VCT', 5);
            $table->char('chequeo_Cuarentacinco_VCT', 5);
            $table->char('chequeo_Cuarentaseis_VCT', 5);
            $table->char('chequeo_Cuarentasiete_VCT', 5);
            $table->char('chequeo_Cuarentaocho_VCT', 5);
            $table->char('chequeo_Cuarentanueve_VCT', 5);
            $table->char('chequeo_Cincuenta_VCT', 5);
            $table->char('chequeo_Cincuentauno_VCT', 5);
            $table->char('chequeo_Cincuentados_VCT', 5);
            $table->char('chequeo_Cincuentatres_VCT', 5);
            $table->char('chequeo_Cincuentacuatro_VCT', 5);
            $table->char('chequeo_Cincuentacinco_VCT', 5);
            $table->char('chequeo_Cincuentaseis_VCT', 5);
            $table->char('chequeo_Cincuentasiete_VCT', 5);
            $table->char('observaciones')->nullable();
            $table->time('hora_Fin');  
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_chequeo_v_c_t_s');
    }
};
