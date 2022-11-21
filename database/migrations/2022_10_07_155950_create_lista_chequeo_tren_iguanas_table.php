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
        Schema::create('lista_chequeo_tren_iguanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Tren_Iguana', 5);
            $table->char('chequeo_Dos_Tren_Iguana', 5);
            $table->char('chequeo_Tres_Tren_Iguana', 5);
            $table->char('chequeo_Cuatro_Tren_Iguana', 5);
            $table->char('chequeo_Cinco_Tren_Iguana', 5);
            $table->char('chequeo_Seis_Tren_Iguana', 5);
            $table->char('chequeo_Siete_Tren_Iguana', 5);
            $table->char('chequeo_Ocho_Tren_Iguana', 5);
            $table->char('chequeo_Nueve_Tren_Iguana', 5);
            $table->char('chequeo_Diez_Tren_Iguana', 5);
            $table->char('chequeo_Once_Tren_Iguana', 5);
            $table->char('chequeo_Doce_Tren_Iguana', 5);
            $table->char('chequeo_Trece_Tren_Iguana', 5);
            $table->char('chequeo_Catorce_Tren_Iguana', 5);
            $table->char('chequeo_Quince_Tren_Iguana', 5);
            $table->char('chequeo_Dieciseis_Tren_Iguana', 5);
            $table->char('chequeo_Diecisiete_Tren_Iguana', 5);
            $table->char('chequeo_Dieciocho_Tren_Iguana', 5);
            $table->char('chequeo_Diecinueve_Tren_Iguana', 5);
            $table->char('chequeo_Veinte_Tren_Iguana', 5);
            $table->char('chequeo_Ventiuno_Tren_Iguana', 5);
            $table->char('chequeo_Ventidos_Tren_Iguana', 5);
            $table->char('chequeo_Ventitres_Tren_Iguana', 5);
            $table->char('chequeo_Venticuatro_Tren_Iguana', 5);
            $table->char('chequeo_Venticinco_Tren_Iguana', 5);
            $table->char('chequeo_Ventiseis_Tren_Iguana', 5);
            $table->char('chequeo_Ventisiete_Tren_Iguana', 5);
            $table->char('hora_operacion_tablero');
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
        Schema::dropIfExists('lista_chequeo_tren_iguanas');
    }
};
