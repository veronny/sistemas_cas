<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('personales_id')->unsigned();

            $table->string('convocatoria');
            $table->string('plaza');
            $table->string('centro_costo');
            $table->string('codigo');
            $table->string('monto');
            $table->string('fuente');
            $table->string('meta');
            $table->string('cantidad');
            $table->string('duracion');
            $table->string('fecha');
            $table->string('presidente');
            $table->string('secretario');
            $table->string('miembro');



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
        Schema::dropIfExists('convocatorias');
    }
}
