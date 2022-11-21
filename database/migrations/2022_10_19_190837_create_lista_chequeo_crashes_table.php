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
        Schema::create('lista_chequeo_crashes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Crash', 5);
            $table->char('chequeo_Dos_Crash', 5);
            $table->char('chequeo_Tres_Crash', 5);
            $table->char('chequeo_Cuatro_Crash', 5);
            $table->char('chequeo_Cinco_Crash', 5);
            $table->char('chequeo_Seis_Crash', 5);
            $table->char('chequeo_Siete_Crash', 5);
            $table->char('chequeo_Ocho_Crash', 5);
            $table->char('chequeo_Nueve_Crash', 5);
            $table->char('chequeo_Diez_Crash', 5);
            $table->char('chequeo_Once_Crash', 5);
            $table->char('chequeo_Doce_Crash', 5);
            $table->char('chequeo_Trece_Crash', 5);
            $table->char('chequeo_Catorce_Crash', 5);
            $table->char('chequeo_Quince_Crash', 5);
            $table->char('chequeo_Dieciseis_Crash', 5);
            $table->char('chequeo_Diecisiete_Crash', 5);
            $table->char('chequeo_Dieciocho_Crash', 5);
            $table->char('chequeo_Diecinueve_Crash', 5);
            $table->char('chequeo_Veinte_Crash', 5);
            $table->char('chequeo_Ventiuno_Crash', 5);
            $table->char('chequeo_Ventidos_Crash', 5);
            $table->char('chequeo_Ventitres_Crash', 5);
            $table->char('chequeo_Venticuatro_Crash', 5);
            $table->char('chequeo_Venticinco_Crash', 5);
            $table->char('chequeo_Ventiseis_Crash', 5);
            $table->char('chequeo_Ventisiete_Crash', 5);
            $table->char('chequeo_Ventiocho_Crash', 5);
            $table->char('chequeo_Ventinueve_Crash', 5);
            $table->char('chequeo_Treinta_Crash', 5);
            $table->char('chequeo_Treintauno_Crash', 5);
            $table->char('chequeo_Treintados_Crash', 5);
            $table->char('chequeo_Treintatres_Crash', 5);
            $table->char('chequeo_Treintacuatro_Crash', 5);
            $table->char('chequeo_Treintacinco_Crash', 5);
            $table->char('chequeo_Treintaseis_Crash', 5);
            $table->char('chequeo_Treintasiete_Crash', 5);
            $table->char('chequeo_Treintaocho_Crash', 5);
            $table->char('chequeo_Treintanueve_Crash', 5);
            $table->char('chequeo_Cuarenta_Crash', 5);
            $table->char('chequeo_Cuarentauno_Crash', 5);
            $table->char('chequeo_Cuarentados_Crash', 5);
            $table->char('chequeo_Cuarentatres_Crash', 5);
            $table->char('VRN');
            $table->char('VTR');
            $table->char('VRS'); 
            $table->char('VST');
            $table->char('tablero_potencia_voltaje');
            $table->char('observaciones')->nullable();
            $table->time('hora_Fin'); 
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('lista_chequeo_crashes');
    }
};
