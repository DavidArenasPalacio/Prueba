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
        Schema::create('lista_chequeo_avions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Avion', 5);
            $table->char('chequeo_Dos_Avion', 5);
            $table->char('chequeo_Tres_Avion', 5);
            $table->char('chequeo_Cuatro_Avion', 5);
            $table->char('chequeo_Cinco_Avion', 5);
            $table->char('chequeo_Seis_Avion', 5);
            $table->char('chequeo_Siete_Avion', 5);
            $table->char('chequeo_Ocho_Avion', 5);
            $table->char('chequeo_Nueve_Avion', 5);
            $table->char('chequeo_Diez_Avion', 5);
            $table->char('chequeo_Once_Avion', 5);
            $table->char('chequeo_Doce_Avion', 5);
            $table->char('chequeo_Trece_Avion', 5);
            $table->char('chequeo_Catorce_Avion', 5);
            $table->char('chequeo_Quince_Avion', 5);
            $table->char('chequeo_Dieciseis_Avion', 5);
            $table->char('chequeo_Diecisiete_Avion', 5);
            $table->char('chequeo_Dieciocho_Avion', 5);
            $table->char('chequeo_Diecinueve_Avion', 5);
            $table->char('chequeo_Veinte_Avion', 5);
            $table->char('chequeo_Ventiuno_Avion', 5);
            $table->char('chequeo_Ventidos_Avion', 5);
            $table->char('chequeo_Ventitres_Avion', 5);
            $table->char('chequeo_Venticuatro_Avion', 5);
            $table->char('chequeo_Venticinco_Avion', 5);
            $table->char('chequeo_Ventiseis_Avion', 5);
            $table->char('chequeo_Ventisiete_Avion', 5);
            $table->char('chequeo_Ventiocho_Avion', 5);
            $table->char('chequeo_Ventinueve_Avion', 5);
            $table->char('chequeo_Treinta_Avion', 5);
            $table->char('chequeo_Treintauno_Avion', 5);
            $table->char('chequeo_Treintados_Avion', 5);
            $table->char('chequeo_Treintatres_Avion', 5);
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
        Schema::dropIfExists('lista_chequeo_avions');
    }
};
