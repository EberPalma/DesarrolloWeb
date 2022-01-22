<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_alumnos', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula');
            $table->string('nombre', 50);
            $table->date('fecha_nacimiento');
            $table->string('genero', 10);
            $table->text('email');
            $table->text('direccion');
            $table->integer('id_grupo');
            $table->string('password');
            $table->text('foto');
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
        Schema::dropIfExists('td_alumnos');
    }
}
