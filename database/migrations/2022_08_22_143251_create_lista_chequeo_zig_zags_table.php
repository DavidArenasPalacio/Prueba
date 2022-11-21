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
        Schema::create('lista_chequeo_zig_zags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_ZigZag', 5);
            $table->char('chequeo_Dos_ZigZag', 5);
            $table->char('chequeo_Tres_ZigZag', 5);
            $table->char('chequeo_Cuatro_ZigZag', 5);
            $table->char('chequeo_Cinco_ZigZag', 5);
            $table->char('chequeo_Seis_ZigZag', 5);
            $table->char('chequeo_Siete_ZigZag', 5);
            $table->char('chequeo_Ocho_ZigZag', 5);
            $table->char('chequeo_Nueve_ZigZag', 5);
            $table->char('chequeo_Diez_ZigZag', 5);
            $table->char('chequeo_Once_ZigZag', 5);
            $table->char('chequeo_Doce_ZigZag', 5);
            $table->char('observaciones');
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
        Schema::dropIfExists('lista_chequeo_zig_zags');
    }
};
