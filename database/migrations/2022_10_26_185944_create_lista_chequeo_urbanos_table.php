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
        Schema::create('lista_chequeo_urbanos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Urbano', 5);
            $table->char('chequeo_Dos_Urbano', 5);
            $table->char('chequeo_Tres_Urbano', 5);
            $table->char('chequeo_Cuatro_Urbano', 5);
            $table->char('chequeo_Cinco_Urbano', 5);
            $table->char('chequeo_Seis_Urbano', 5);
            $table->char('chequeo_Siete_Urbano', 5);
            $table->char('chequeo_Ocho_Urbano', 5);
            $table->char('chequeo_Nueve_Urbano', 5);
            $table->char('chequeo_Diez_Urbano', 5);
            $table->char('chequeo_Once_Urbano', 5);
            $table->char('chequeo_Doce_Urbano', 5);
            $table->char('chequeo_Trece_Urbano', 5);
            $table->char('chequeo_Catorce_Urbano', 5);
            $table->char('chequeo_Quince_Urbano', 5);
            $table->char('chequeo_Dieciseis_Urbano', 5);
            $table->char('chequeo_Diecisiete_Urbano', 5);
            $table->char('chequeo_Dieciocho_Urbano', 5);
            $table->char('chequeo_Diecinueve_Urbano', 5);
            $table->char('chequeo_Veinte_Urbano', 5);
            $table->char('chequeo_Ventiuno_Urbano', 5);
            $table->char('chequeo_Ventidos_Urbano', 5);
            $table->char('chequeo_Ventitres_Urbano', 5);
            $table->char('chequeo_Venticuatro_Urbano', 5);
            $table->char('chequeo_Venticinco_Urbano', 5);
            $table->char('chequeo_Ventiseis_Urbano', 5);
            $table->char('chequeo_Ventisiete_Urbano', 5);
            $table->char('chequeo_Ventiocho_Urbano', 5);
            $table->char('chequeo_Ventinueve_Urbano', 5);
            $table->char('chequeo_Treinta_Urbano', 5);
            $table->char('chequeo_Treintauno_Urbano', 5);
            $table->char('chequeo_Treintados_Urbano', 5);
            $table->char('chequeo_Treintatres_Urbano', 5);
            $table->char('chequeo_Treintacuatro_Urbano', 5);
            $table->char('chequeo_Treintacinco_Urbano', 5);
            $table->char('chequeo_Treintaseis_Urbano', 5);
            $table->char('chequeo_Treintasiete_Urbano', 5);
            $table->char('chequeo_Treintaocho_Urbano', 5);
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
        Schema::dropIfExists('lista_chequeo_urbanos');
    }
};
