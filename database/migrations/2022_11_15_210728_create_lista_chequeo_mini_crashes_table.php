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
        Schema::create('lista_chequeo_mini_Crashes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Mini_Crash', 5);
            $table->char('chequeo_Dos_Mini_Crash', 5);
            $table->char('chequeo_Tres_Mini_Crash', 5);
            $table->char('chequeo_Cuatro_Mini_Crash', 5);
            $table->char('chequeo_Cinco_Mini_Crash', 5);
            $table->char('chequeo_Seis_Mini_Crash', 5);
            $table->char('chequeo_Siete_Mini_Crash', 5);
            $table->char('chequeo_Ocho_Mini_Crash', 5);
            $table->char('chequeo_Nueve_Mini_Crash', 5);
            $table->char('chequeo_Diez_Mini_Crash', 5);
            $table->char('chequeo_Once_Mini_Crash', 5);
            $table->char('chequeo_Doce_Mini_Crash', 5);
            $table->char('chequeo_Trece_Mini_Crash', 5);
            $table->char('chequeo_Catorce_Mini_Crash', 5);
            $table->char('chequeo_Quince_Mini_Crash', 5);
            $table->char('chequeo_Dieciseis_Mini_Crash', 5);
            $table->char('chequeo_Diecisiete_Mini_Crash', 5);
            $table->char('chequeo_Dieciocho_Mini_Crash', 5);
            $table->char('chequeo_Diecinueve_Mini_Crash', 5);
            $table->char('chequeo_Veinte_Mini_Crash', 5);
            $table->char('chequeo_Ventiuno_Mini_Crash', 5);
            $table->char('chequeo_Ventidos_Mini_Crash', 5);
            $table->char('chequeo_Ventitres_Mini_Crash', 5);
            $table->char('chequeo_Venticuatro_Mini_Crash', 5);
            $table->char('chequeo_Venticinco_Mini_Crash', 5);
            $table->char('chequeo_Ventiseis_Mini_Crash', 5);
            $table->char('chequeo_Ventisiete_Mini_Crash', 5);
            $table->char('chequeo_Ventiocho_Mini_Crash', 5);
            $table->char('chequeo_Ventinueve_Mini_Crash', 5);
            $table->char('chequeo_Treinta_Mini_Crash', 5);
            $table->char('chequeo_Treintauno_Mini_Crash', 5);
            $table->char('chequeo_Treintados_Mini_Crash', 5);
            $table->char('chequeo_Treintatres_Mini_Crash', 5);
            $table->char('chequeo_Treintacuatro_Mini_Crash', 5);
            $table->char('chequeo_Treintacinco_Mini_Crash', 5);
            $table->char('chequeo_Treintaseis_Mini_Crash', 5);
            $table->char('chequeo_Treintasiete_Mini_Crash', 5);
            $table->char('chequeo_Treintaocho_Mini_Crash', 5);
            $table->char('chequeo_Treintanueve_Mini_Crash', 5);
            $table->char('chequeo_Cuarenta_Mini_Crash', 5);
            $table->char('chequeo_Cuarentauno_Mini_Crash', 5);
            $table->char('chequeo_Cuarentados_Mini_Crash', 5);
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
        Schema::dropIfExists('lista_chequeo_mini_Crashes');
    }
};
