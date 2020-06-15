<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('personales_id')->unsigned();

            $table->string('tipo_curso');
            $table->string('curso');
            $table->string('institucion');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('fecha_expedicion');
            $table->string('creditos');
            $table->string('horas');
            $table->string('ciudad');

            
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
        Schema::dropIfExists('cursos');
    }
}
