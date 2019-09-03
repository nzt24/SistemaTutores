<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_alumno');
            $table->string('id_materia');
            $table->integer('status');
            $table->integer('calificacion');
            $table->integer('veces_cursada');
            $table->foreign('id_alumno')->references('id_alumno')->on('alumno');
            $table->foreign('id_materia')->references('id_materia')->on('materia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_materia');
    }
}
