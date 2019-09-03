<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->string('id_materia')->primary();
          //  $table->string('clave');
            $table->string('nombre');
            $table->integer('creditos');
            $table->string('tipo_materia');
            $table->string('materia_requisito');
            $table->unsignedBigInteger('id_licenciatura');
            $table->foreign('id_licenciatura')->references('id_licenciatura')->on('licenciatura');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia');
    }
}
