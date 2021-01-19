


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->integer('nota');
            $table->integer('cod_carnetnota');
            $table->foreign('cod_carnetnota')->references('id_est')->on('materiaxestudiante');
            
            $table->integer('cod_mate');
            $table->foreign('cod_mate')->references('cod_materia')->on('materiaxestudiante');






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
        Schema::dropIfExists('nota');
    }
}
