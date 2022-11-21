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
        Schema::create('lista_chequeo_invasions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Invasion', 5);
            $table->char('chequeo_Dos_Invasion', 5);
            $table->char('chequeo_Tres_Invasion', 5);
            $table->char('chequeo_Cuatro_Invasion', 5);
            $table->char('chequeo_Cinco_Invasion', 5);
            $table->char('chequeo_Seis_Invasion', 5);
            $table->char('chequeo_Siete_Invasion', 5);
            $table->char('chequeo_Ocho_Invasion', 5);
            $table->char('chequeo_Nueve_Invasion', 5);
            $table->char('chequeo_Diez_Invasion', 5);
            $table->char('chequeo_Once_Invasion', 5);
            $table->char('chequeo_Doce_Invasion', 5);
            $table->char('chequeo_Trece_Invasion', 5);
            $table->char('chequeo_Catorce_Invasion', 5);
            $table->char('chequeo_Quince_Invasion', 5);
            $table->char('chequeo_Dieciseis_Invasion', 5);
            $table->char('chequeo_Diecisiete_Invasion', 5);
            $table->char('chequeo_Dieciocho_Invasion', 5);
            $table->char('chequeo_Diecinueve_Invasion', 5);
            $table->char('chequeo_Veinte_Invasion', 5);
            $table->char('chequeo_Ventiuno_Invasion', 5);
            $table->char('chequeo_Ventidos_Invasion', 5);
            $table->char('chequeo_Ventitres_Invasion', 5);
            $table->char('chequeo_Venticuatro_Invasion', 5);
            $table->char('chequeo_Venticinco_Invasion', 5);
            $table->char('chequeo_Ventiseis_Invasion', 5);
            $table->char('chequeo_Ventisiete_Invasion', 5);
            $table->char('chequeo_Ventiocho_Invasion', 5);
            $table->char('chequeo_Ventinueve_Invasion', 5);
            $table->char('chequeo_Treinta_Invasion', 5);
            $table->char('chequeo_Treintauno_Invasion', 5);
            $table->char('chequeo_Treintados_Invasion', 5);
            $table->char('chequeo_Treintatres_Invasion', 5);
            $table->char('chequeo_Treintacuatro_Invasion', 5);
            $table->char('chequeo_Treintacinco_Invasion', 5);
            $table->char('chequeo_Treintaseis_Invasion', 5);
            $table->char('chequeo_Treintasiete_Invasion', 5);
            $table->char('chequeo_Treintaocho_Invasion', 5);
            $table->char('chequeo_Treintanueve_Invasion', 5);
            $table->char('chequeo_Cuarenta_Invasion', 5);
            $table->char('hora_operacion_tablero');
            $table->char('verificar_voltaje_selector');
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
        Schema::dropIfExists('lista_chequeo_invasions');
    }
};
