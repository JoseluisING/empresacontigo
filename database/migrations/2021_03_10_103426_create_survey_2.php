<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvey2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_2', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta')->nullable();
            $table->string('valor_siempre')->nullable();
            $table->string('valor_casi_siempre')->nullable();
            $table->string('valor_algunas_veces')->nullable();
            $table->string('valor_casi_nunca')->nullable();
            $table->string('valor_nunca')->nullable();
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
        Schema::dropIfExists('survey_2');
    }
}
