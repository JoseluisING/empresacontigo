<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailbox', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('boss_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('tema');
            $table->string('sugerencias');
            $table->string('estado')->nullable();
            $table->timestamps();

            $table->foreign('boss_id')->references('id')->on('users');
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
        Schema::dropIfExists('mailbox');
    }
}
