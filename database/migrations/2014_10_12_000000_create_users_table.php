<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ap_p');
            $table->string('ap_m');
            //$table->string('cp');
            $table->string('discapacidad');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cedula')->unique();
            $table->string('rfc')->unique();
            $table->string('curp')->unique();
            $table->string('password');
            $table->string('id_rol')->nullable();
            $table->rememberToken();
            //$table->foreignId('current_team_id')->nullable();
            $table->string('rfc_company')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->date('fecha_nacimiento')->nullable();
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
        Schema::dropIfExists('users');
    }
}
