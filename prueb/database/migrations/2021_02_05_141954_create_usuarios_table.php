<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->Integer('configu_id')->unsigned();
            $table->string('NombreUsuario')->nullable();
            $table->string('NombreCompleto')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('fecha')->nullable();
            $table->foreign('configu_id')->references('id')->on('configuracions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
