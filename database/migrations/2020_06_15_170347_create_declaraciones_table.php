<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaraciones', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('personales_id')->unsigned();

            $table->string('declaracion_rnsdd');
            $table->string('declaracion_alimentacion');
            $table->string('declaracion_nepotismo');
            $table->string('declaracion_penales');
            $table->string('declaracion_sintomatologia');
            $table->string('declaracion_discapacidad');
            $table->string('declaracion_fuerzas_armadas');
            

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
        Schema::dropIfExists('declaraciones');
    }
}
