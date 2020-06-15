<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned();

            $table->string('slug');

            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('ditrito')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('nacionalidad');          
            $table->string('tipo_documento');
            $table->string('nro_documento');            
            $table->string('ruc')->nullable();
            $table->string('tipo_direccion');
            $table->string('direccion')->nullable();            
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('correo_electronico')->nullable();;
            $table->string('colegio')->nullable();
            $table->string('nro_registro')->nullable();

            $table->string('imagen')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personales');
    }
}
