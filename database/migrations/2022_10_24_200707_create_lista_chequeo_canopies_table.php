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
        Schema::create('lista_chequeo_canopies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Canopy', 5);
            $table->char('chequeo_Dos_Canopy', 5);
            $table->char('chequeo_Tres_Canopy', 5);
            $table->char('chequeo_Cuatro_Canopy', 5);
            $table->char('chequeo_Cinco_Canopy', 5);
            $table->char('chequeo_Seis_Canopy', 5);
            $table->char('chequeo_Siete_Canopy', 5);
            $table->char('chequeo_Ocho_Canopy', 5);
            $table->char('chequeo_Nueve_Canopy', 5);
            $table->char('chequeo_Diez_Canopy', 5);
            $table->char('chequeo_Once_Canopy', 5);
            $table->char('chequeo_Doce_Canopy', 5);
            $table->char('chequeo_Trece_Canopy', 5);
            $table->char('chequeo_Catorce_Canopy', 5);
            $table->char('chequeo_Quince_Canopy', 5);
            $table->char('chequeo_Dieciseis_Canopy', 5);
            $table->char('chequeo_Diecisiete_Canopy', 5);
            $table->char('chequeo_Dieciocho_Canopy', 5);
            $table->char('chequeo_Diecinueve_Canopy', 5);
            $table->char('chequeo_Veinte_Canopy', 5);
            $table->char('chequeo_Ventiuno_Canopy', 5);
            $table->char('chequeo_Ventidos_Canopy', 5);
            $table->char('chequeo_Ventitres_Canopy', 5);
            $table->char('chequeo_Venticuatro_Canopy', 5);
            $table->char('chequeo_Venticinco_Canopy', 5);
            $table->char('chequeo_Ventiseis_Canopy', 5);
            $table->char('chequeo_Ventisiete_Canopy', 5);
            $table->char('chequeo_Ventiocho_Canopy', 5);
            $table->char('chequeo_Ventinueve_Canopy', 5);
            $table->char('chequeo_Treinta_Canopy', 5);
            $table->char('chequeo_Treintauno_Canopy', 5);
            $table->char('chequeo_Treintados_Canopy', 5);
            $table->char('chequeo_Treintatres_Canopy', 5);
            $table->char('chequeo_Treintacuatro_Canopy', 5);
            $table->char('chequeo_Treintacinco_Canopy', 5);
            $table->char('chequeo_Treintaseis_Canopy', 5);
            $table->char('chequeo_Treintasiete_Canopy', 5);
            $table->char('chequeo_Treintaocho_Canopy', 5);
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
        Schema::dropIfExists('lista_chequeo_canopies');
    }
};
