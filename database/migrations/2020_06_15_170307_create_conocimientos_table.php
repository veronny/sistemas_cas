<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimientos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('personales_id')->unsigned();

            $table->string('conocimiento');
            $table->string('nivel');
            $table->string('institucion');
        
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
        Schema::dropIfExists('conocimientos');
    }
}
