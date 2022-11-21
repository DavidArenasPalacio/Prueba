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
        Schema::create('lista_chequeo_junglas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Jungla', 5);
            $table->char('chequeo_Dos_Jungla', 5);
            $table->char('chequeo_Tres_Jungla', 5);
            $table->char('chequeo_Cuatro_Jungla', 5);
            $table->char('chequeo_Cinco_Jungla', 5);
            $table->char('chequeo_Seis_Jungla', 5);
            $table->char('chequeo_Siete_Jungla', 5);
            $table->char('chequeo_Ocho_Jungla', 5);
            $table->char('chequeo_Nueve_Jungla', 5);
            $table->char('chequeo_Diez_Jungla', 5);
            $table->char('chequeo_Once_Jungla', 5);
            $table->char('chequeo_Doce_Jungla', 5);
            $table->char('chequeo_Trece_Jungla', 5);
            $table->char('chequeo_Catorce_Jungla', 5);
            $table->char('chequeo_Quince_Jungla', 5);
            $table->char('chequeo_Dieciseis_Jungla', 5);
            $table->char('chequeo_Diecisiete_Jungla', 5);
            $table->char('chequeo_Dieciocho_Jungla', 5);
            $table->char('chequeo_Diecinueve_Jungla', 5);
            $table->char('chequeo_Veinte_Jungla', 5);
            $table->char('chequeo_Ventiuno_Jungla', 5);
            $table->char('chequeo_Ventidos_Jungla', 5);
            $table->char('chequeo_Ventitres_Jungla', 5);
            $table->char('chequeo_Venticuatro_Jungla', 5);
            $table->char('chequeo_Venticinco_Jungla', 5);
            $table->char('chequeo_Ventiseis_Jungla', 5);
            $table->char('chequeo_Ventisiete_Jungla', 5);
            $table->char('chequeo_Ventiocho_Jungla', 5);
            $table->char('chequeo_Ventinueve_Jungla', 5);
            $table->char('chequeo_Treinta_Jungla', 5);
            $table->char('chequeo_Treintauno_Jungla', 5);
            $table->char('chequeo_Treintados_Jungla', 5);
            $table->char('chequeo_Treintatres_Jungla', 5);
            $table->char('chequeo_Treintacuatro_Jungla', 5);
            $table->char('chequeo_Treintacinco_Jungla', 5);
            $table->char('chequeo_Treintaseis_Jungla', 5);
            $table->char('chequeo_Treintasiete_Jungla', 5);
            $table->char('chequeo_Treintaocho_Jungla', 5);
            $table->char('chequeo_Treintanueve_Jungla', 5);
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
        Schema::dropIfExists('lista_chequeo_junglas');
    }
};
