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
        Schema::create('lista_chequeo_morgans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Morgan', 5);
            $table->char('chequeo_Dos_Morgan', 5);
            $table->char('chequeo_Tres_Morgan', 5);
            $table->char('chequeo_Cuatro_Morgan', 5);
            $table->char('chequeo_Cinco_Morgan', 5);
            $table->char('chequeo_Seis_Morgan', 5);
            $table->char('chequeo_Siete_Morgan', 5);
            $table->char('chequeo_Ocho_Morgan', 5);
            $table->char('chequeo_Nueve_Morgan', 5);
            $table->char('chequeo_Diez_Morgan', 5);
            $table->char('chequeo_Once_Morgan', 5);
            $table->char('chequeo_Doce_Morgan', 5);
            $table->char('chequeo_Trece_Morgan', 5);
            $table->char('chequeo_Catorce_Morgan', 5);
            $table->char('chequeo_Quince_Morgan', 5);
            $table->char('chequeo_Dieciseis_Morgan', 5);
            $table->char('chequeo_Diecisiete_Morgan', 5);
            $table->char('chequeo_Dieciocho_Morgan', 5);
            $table->char('chequeo_Diecinueve_Morgan', 5);
            $table->char('chequeo_Veinte_Morgan', 5);
            $table->char('chequeo_Ventiuno_Morgan', 5);
            $table->char('chequeo_Ventidos_Morgan', 5);
            $table->char('chequeo_Ventitres_Morgan', 5);
            $table->char('chequeo_Venticuatro_Morgan', 5);
            $table->char('chequeo_Venticinco_Morgan', 5);
            $table->char('chequeo_Ventiseis_Morgan', 5);
            $table->char('chequeo_Ventisiete_Morgan', 5);
            $table->char('chequeo_Ventiocho_Morgan', 5);
            $table->char('chequeo_Ventinueve_Morgan', 5);
            $table->char('chequeo_Treinta_Morgan', 5);
            $table->char('chequeo_Treintauno_Morgan', 5);
            $table->char('chequeo_Treintados_Morgan', 5);
            $table->char('chequeo_Treintatres_Morgan', 5);
            $table->char('chequeo_Treintacuatro_Morgan', 5);
            $table->char('chequeo_Treintacinco_Morgan', 5);
            $table->char('chequeo_Treintaseis_Morgan', 5);
            $table->char('chequeo_Treintasiete_Morgan', 5);
            $table->char('chequeo_Treintaocho_Morgan', 5);
            $table->char('chequeo_Treintanueve_Morgan', 5);
            $table->char('chequeo_Cuarenta_Morgan', 5);
            $table->char('chequeo_Cuarentauno_Morgan', 5);
            $table->char('chequeo_Cuarentados_Morgan', 5);
            $table->char('chequeo_Cuarentatres_Morgan', 5);
            $table->char('chequeo_Cuarentacuatro_Morgan', 5);
            $table->char('chequeo_Cuarentacinco_Morgan', 5);
            $table->char('chequeo_Cuarentaseis_Morgan', 5);
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
        Schema::dropIfExists('lista_chequeo_morgans');
    }
};
