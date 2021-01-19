<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaxestudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaxestudiante', function (Blueprint $table) {
        
            $table->integer('id_est');
            $table->foreign('id_est')->references('id_estudiante')->on('estudiante');
            $table->integer('cod_materia');
            $table->foreign('cod_materia')->references('id_materia')->on('materia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiaxestudiante');
    }
}
