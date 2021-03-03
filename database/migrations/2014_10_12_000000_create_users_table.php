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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cedula')->unique();
            $table->string('rfc')->unique();
            $table->string('curp')->unique();
            $table->string('password');
            $table->bigInteger('id_rol')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->rememberToken();
            //$table->bigInteger('company_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('roles');
            //$table->foreign('company_id')->references('id')->on('companies');
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
