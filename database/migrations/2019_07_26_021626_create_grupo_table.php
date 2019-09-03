<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('id_grupo');
            $table->string('generacion');
            $table->string('seccion');
            $table->unsignedBigInteger('id_licenciatura');
            $table->unsignedBigInteger('id_tutor');
            $table->foreign('id_licenciatura')->references('id_licenciatura')->on('licenciatura');
            $table->foreign('id_tutor')->references('id_tutor')->on('tutor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
