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
        Schema::create('lista_chequeo_tren_miticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('hora_Inicio');
            $table->char('chequeo_Uno_Tren_Mitico', 5);
            $table->char('chequeo_Dos_Tren_Mitico', 5);
            $table->char('chequeo_Tres_Tren_Mitico', 5);
            $table->char('chequeo_Cuatro_Tren_Mitico', 5);
            $table->char('chequeo_Cinco_Tren_Mitico', 5);
            $table->char('chequeo_Seis_Tren_Mitico', 5);
            $table->char('chequeo_Siete_Tren_Mitico', 5);
            $table->char('chequeo_Ocho_Tren_Mitico', 5);
            $table->char('chequeo_Nueve_Tren_Mitico', 5);
            $table->char('chequeo_Diez_Tren_Mitico', 5);
            $table->char('chequeo_Once_Tren_Mitico', 5);
            $table->char('chequeo_Doce_Tren_Mitico', 5);
            $table->char('chequeo_Trece_Tren_Mitico', 5);
            $table->char('chequeo_Catorce_Tren_Mitico', 5);
            $table->char('chequeo_Quince_Tren_Mitico', 5);
            $table->char('chequeo_Dieciseis_Tren_Mitico', 5);
            $table->char('chequeo_Diecisiete_Tren_Mitico', 5);
            $table->char('chequeo_Dieciocho_Tren_Mitico', 5);
            $table->char('chequeo_Diecinueve_Tren_Mitico', 5);
            $table->char('chequeo_Veinte_Tren_Mitico', 5);
            $table->char('chequeo_Ventiuno_Tren_Mitico', 5);
            $table->char('chequeo_Ventidos_Tren_Mitico', 5);
            $table->char('chequeo_Ventitres_Tren_Mitico', 5);
            $table->char('chequeo_Venticuatro_Tren_Mitico', 5);
            $table->char('chequeo_Venticinco_Tren_Mitico', 5);
            $table->char('chequeo_Ventiseis_Tren_Mitico', 5);
            $table->char('chequeo_Ventisiete_Tren_Mitico', 5);
            $table->char('chequeo_Ventiocho_Tren_Mitico', 5);
            $table->char('chequeo_Ventinueve_Tren_Mitico', 5);
            $table->char('chequeo_Treinta_Tren_Mitico', 5);
            $table->char('chequeo_Treintauno_Tren_Mitico', 5);
            $table->char('chequeo_Treintados_Tren_Mitico', 5);
            $table->char('chequeo_Treintatres_Tren_Mitico', 5);
            $table->char('chequeo_Treintacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Treintacinco_Tren_Mitico', 5);
            $table->char('chequeo_Treintaseis_Tren_Mitico', 5);
            $table->char('chequeo_Treintasiete_Tren_Mitico', 5);
            $table->char('chequeo_Treintaocho_Tren_Mitico', 5);
            $table->char('chequeo_Treintanueve_Tren_Mitico', 5);
            $table->char('chequeo_Cuarenta_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentauno_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentados_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentatres_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentacinco_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentaseis_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentasiete_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentaocho_Tren_Mitico', 5);
            $table->char('chequeo_Cuarentanueve_Tren_Mitico', 5);
            $table->char('chequeo_Cincuenta_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentauno_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentados_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentatres_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentacinco_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentaseis_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentasiete_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentaocho_Tren_Mitico', 5);
            $table->char('chequeo_Cincuentanueve_Tren_Mitico', 5);
            $table->char('chequeo_Sesenta_Tren_Mitico', 5);
            $table->char('chequeo_Sesentauno_Tren_Mitico', 5);
            $table->char('chequeo_Sesentados_Tren_Mitico', 5);
            $table->char('chequeo_Sesentatres_Tren_Mitico', 5);
            $table->char('chequeo_Sesentacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Sesentacinco_Tren_Mitico', 5);
            $table->char('chequeo_Sesentaseis_Tren_Mitico', 5);
            $table->char('chequeo_Sesentasiete_Tren_Mitico', 5);
            $table->char('chequeo_Sesentaocho_Tren_Mitico', 5);
            $table->char('chequeo_Sesentanueve_Tren_Mitico', 5);
            $table->char('chequeo_Setenta_Tren_Mitico', 5);
            $table->char('chequeo_Setentauno_Tren_Mitico', 5);
            $table->char('chequeo_Setentados_Tren_Mitico', 5);
            $table->char('chequeo_Setentatres_Tren_Mitico', 5);
            $table->char('chequeo_Setentacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Setentacinco_Tren_Mitico', 5);
            $table->char('chequeo_Setentaseis_Tren_Mitico', 5);
            $table->char('chequeo_Setentasiete_Tren_Mitico', 5);
            $table->char('chequeo_Setentaocho_Tren_Mitico', 5);
            $table->char('chequeo_Setentanueve_Tren_Mitico', 5);
            $table->char('chequeo_Ochenta_Tren_Mitico', 5);
            $table->char('chequeo_Ochentauno_Tren_Mitico', 5);
            $table->char('chequeo_Ochentados_Tren_Mitico', 5);
            $table->char('chequeo_Ochentatres_Tren_Mitico', 5);
            $table->char('chequeo_Ochentacuatro_Tren_Mitico', 5);
            $table->char('chequeo_Ochentacinco_Tren_Mitico', 5);
            $table->char('chequeo_Ochentaseis_Tren_Mitico', 5);
            $table->char('chequeo_Ochentasiete_Tren_Mitico', 5);
            $table->char('chequeo_Ochentaocho_Tren_Mitico', 5);
            $table->char('chequeo_Ochentanueve_Tren_Mitico', 5);
            $table->char('chequeo_Noventa_Tren_Mitico', 5);
            $table->char('chequeo_Noventauno_Tren_Mitico', 5);
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
        Schema::dropIfExists('lista_chequeo_tren_miticos');
    }
};
