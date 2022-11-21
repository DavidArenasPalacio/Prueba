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
        Schema::create('lista_chequeo_polars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Polar',  5);
            $table->char('chequeo_Dos_Polar',  5);
            $table->char('chequeo_Tres_Polar',  5);
            $table->char('chequeo_Cuatro_Polar',  5);
            $table->char('chequeo_Cinco_Polar',  5);
            $table->char('chequeo_Seis_Polar',  5);
            $table->char('chequeo_Siete_Polar',  5);
            $table->char('chequeo_Ocho_Polar',  5);
            $table->char('chequeo_Nueve_Polar',  5);
            $table->char('chequeo_Diez_Polar',  5);
            $table->char('chequeo_Once_Polar',  5);
            $table->char('chequeo_Doce_Polar',  5);
            $table->char('chequeo_Trece_Polar',  5);
            $table->char('chequeo_Catorce_Polar',  5);
            $table->char('chequeo_Quince_Polar',  5);
            $table->char('chequeo_Dieciseis_Polar',  5);
            $table->char('chequeo_Diecisiete_Polar',  5);
            $table->char('chequeo_Dieciocho_Polar',  5);
            $table->char('chequeo_Diecinueve_Polar',  5);
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
        Schema::dropIfExists('lista_chequeo_polars');
    }
};
