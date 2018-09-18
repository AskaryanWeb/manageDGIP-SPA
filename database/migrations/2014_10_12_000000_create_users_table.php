<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('unidad_academica_clave_ua')->unsigned();
            $table->string('num_plaza', 10);
            $table->string('name');
            $table->string('paterno');
            $table->string('materno');
            $table->char('genero',1);
            $table->string('telefono',10);
            $table->string('grado_academico',10);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('unidad_academica_clave_ua')->references('clave_ua')->on('unidad_academica');
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
