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
        Schema::create('lista_chequeo_simulador_extremos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Simulador_Extremo',  5);
            $table->char('chequeo_Dos_Simulador_Extremo',  5);
            $table->char('chequeo_Tres_Simulador_Extremo',  5);
            $table->char('chequeo_Cuatro_Simulador_Extremo',  5);
            $table->char('chequeo_Cinco_Simulador_Extremo',  5);
            $table->char('chequeo_Seis_Simulador_Extremo',  5);
            $table->char('chequeo_Siete_Simulador_Extremo',  5);
            $table->char('chequeo_Ocho_Simulador_Extremo',  5);
            $table->char('chequeo_Nueve_Simulador_Extremo',  5);
            $table->char('chequeo_Diez_Simulador_Extremo',  5);
            $table->char('chequeo_Once_Simulador_Extremo',  5);
            $table->char('chequeo_Doce_Simulador_Extremo',  5);
            $table->char('chequeo_Trece_Simulador_Extremo',  5);
            $table->char('chequeo_Catorce_Simulador_Extremo',  5);
            $table->char('chequeo_Quince_Simulador_Extremo',  5);
            $table->char('chequeo_Dieciseis_Simulador_Extremo',  5);
            $table->char('chequeo_Diecisiete_Simulador_Extremo',  5);
            $table->char('chequeo_Dieciocho_Simulador_Extremo',  5);
            $table->char('chequeo_Diecinueve_Simulador_Extremo',  5);
            $table->char('chequeo_Veinte_Simulador_Extremo',  5);
            $table->char('chequeo_Ventiuno_Simulador_Extremo',  5);
            $table->char('chequeo_Ventidos_Simulador_Extremo',  5);
            $table->char('chequeo_Ventitres_Simulador_Extremo',  5);
            $table->char('chequeo_Venticuatro_Simulador_Extremo',  5);
            $table->char('chequeo_Venticinco_Simulador_Extremo',  5);
            $table->char('chequeo_Ventiseis_Simulador_Extremo',  5);
            $table->char('chequeo_Ventisiete_Simulador_Extremo',  5);
            $table->char('chequeo_Ventiocho_Simulador_Extremo',  5);
            $table->char('chequeo_Ventinueve_Simulador_Extremo',  5);
            $table->char('chequeo_Treinta_Simulador_Extremo',  5);
            $table->char('chequeo_Treintauno_Simulador_Extremo',  5);
            $table->char('chequeo_Treintados_Simulador_Extremo',  5);
            $table->char('horas_operacion_compresor');
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
        Schema::dropIfExists('lista_chequeo_simulador_extremos');
    }
};
