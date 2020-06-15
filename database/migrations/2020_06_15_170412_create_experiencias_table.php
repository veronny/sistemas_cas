<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('personales_id')->unsigned();

            $table->string('instituciones');
            $table->string('unidad');
            $table->string('sector');
            $table->string('cargo');
            $table->string('fecha_inicio');
            $table->string('fecha_termino');
            $table->string('descripcion');
            $table->string('duracion');
            $table->string('tipo_documento');

            $table->timestamps();

            $table->foreign('personales_id')->references('id')->on('personales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencias');
    }
}
