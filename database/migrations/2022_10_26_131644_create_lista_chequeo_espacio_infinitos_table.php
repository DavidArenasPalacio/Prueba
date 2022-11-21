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
        Schema::create('lista_chequeo_espacio_infinitos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Espacio_Infinito',  5);
            $table->char('chequeo_Dos_Espacio_Infinito',  5);
            $table->char('chequeo_Tres_Espacio_Infinito',  5);
            $table->char('chequeo_Cuatro_Espacio_Infinito',  5);
            $table->char('chequeo_Cinco_Espacio_Infinito',  5);
            $table->char('chequeo_Seis_Espacio_Infinito',  5);
            $table->char('chequeo_Siete_Espacio_Infinito',  5);
            $table->char('chequeo_Ocho_Espacio_Infinito',  5);
            $table->char('chequeo_Nueve_Espacio_Infinito',  5);
            $table->char('chequeo_Diez_Espacio_Infinito',  5);
            $table->char('chequeo_Once_Espacio_Infinito',  5);
            $table->char('chequeo_Doce_Espacio_Infinito',  5);
            $table->char('chequeo_Trece_Espacio_Infinito',  5);
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
        Schema::dropIfExists('lista_chequeo_espacio_infinitos');
    }
};
