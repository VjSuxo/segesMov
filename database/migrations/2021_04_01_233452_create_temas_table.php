<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->date('fecha');
            $table->unsignedBigInteger('evento_id');
            $table->unsignedBigInteger('expositor_id');

            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('expositor_id')->references('id')->on('expositores');


            $table->timestamps();

        });


    }

    public function down()
    {
        Schema::dropIfExists('temas');
    }
};
