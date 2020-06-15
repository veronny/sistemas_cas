<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('personales_id')->unsigned();

            $table->string('titulo');
            $table->string('centro_estudios');
            $table->string('especialidad');
            $table->string('fecha_expedicion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('archivo');
            
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
        Schema::dropIfExists('formaciones');
    }
}
