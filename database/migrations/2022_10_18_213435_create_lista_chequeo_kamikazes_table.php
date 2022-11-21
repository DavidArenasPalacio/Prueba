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
        Schema::create('lista_chequeo_kamikazes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Kamikaze', 5);
            $table->char('chequeo_Dos_Kamikaze', 5);
            $table->char('chequeo_Tres_Kamikaze', 5);
            $table->char('chequeo_Cuatro_Kamikaze', 5);
            $table->char('chequeo_Cinco_Kamikaze', 5);
            $table->char('chequeo_Seis_Kamikaze', 5);
            $table->char('chequeo_Siete_Kamikaze', 5);
            $table->char('chequeo_Ocho_Kamikaze', 5);
            $table->char('chequeo_Nueve_Kamikaze', 5);
            $table->char('chequeo_Diez_Kamikaze', 5);
            $table->char('chequeo_Once_Kamikaze', 5);
            $table->char('chequeo_Doce_Kamikaze', 5);
            $table->char('chequeo_Trece_Kamikaze', 5);
            $table->char('chequeo_Catorce_Kamikaze', 5);
            $table->char('chequeo_Quince_Kamikaze', 5);
            $table->char('chequeo_Dieciseis_Kamikaze', 5);
            $table->char('chequeo_Diecisiete_Kamikaze', 5);
            $table->char('chequeo_Dieciocho_Kamikaze', 5);
            $table->char('chequeo_Diecinueve_Kamikaze', 5);
            $table->char('chequeo_Veinte_Kamikaze', 5);
            $table->char('chequeo_Ventiuno_Kamikaze', 5);
            $table->char('chequeo_Ventidos_Kamikaze', 5);
            $table->char('chequeo_Ventitres_Kamikaze', 5);
            $table->char('chequeo_Venticuatro_Kamikaze', 5);
            $table->char('chequeo_Venticinco_Kamikaze', 5);
            $table->char('chequeo_Ventiseis_Kamikaze', 5);
            $table->char('chequeo_Ventisiete_Kamikaze', 5);
            $table->char('chequeo_Ventiocho_Kamikaze', 5);
            $table->char('chequeo_Ventinueve_Kamikaze', 5);
            $table->char('chequeo_Treinta_Kamikaze', 5);
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
        Schema::dropIfExists('lista_chequeo_kamikazes');
    }
};
