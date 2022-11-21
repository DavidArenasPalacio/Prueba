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
        Schema::create('lista_chequeo_mauis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Maui',  5);
            $table->char('chequeo_Dos_Maui',  5);
            $table->char('chequeo_Tres_Maui',  5);
            $table->char('chequeo_Cuatro_Maui',  5);
            $table->char('chequeo_Cinco_Maui',  5);
            $table->char('chequeo_Seis_Maui',  5);
            $table->char('chequeo_Siete_Maui',  5);
            $table->char('chequeo_Ocho_Maui',  5);
            $table->char('chequeo_Nueve_Maui',  5);
            $table->char('chequeo_Diez_Maui',  5);
            $table->char('chequeo_Once_Maui',  5);
            $table->char('chequeo_Doce_Maui',  5);
            $table->char('chequeo_Trece_Maui',  5);
            $table->char('chequeo_Catorce_Maui',  5);
            $table->char('chequeo_Quince_Maui',  5);
            $table->char('chequeo_Dieciseis_Maui',  5);
            $table->char('chequeo_Diecisiete_Maui',  5);
            $table->char('chequeo_Dieciocho_Maui',  5);
            $table->char('chequeo_Diecinueve_Maui',  5);
            $table->char('chequeo_Veinte_Maui',  5);
            $table->char('chequeo_Ventiuno_Maui',  5);
            $table->char('chequeo_Ventidos_Maui',  5);
            $table->char('chequeo_Ventitres_Maui',  5);
            $table->char('chequeo_Venticuatro_Maui',  5);
            $table->char('chequeo_Venticinco_Maui',  5);
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
        Schema::dropIfExists('lista_chequeo_mauis');
    }
};
