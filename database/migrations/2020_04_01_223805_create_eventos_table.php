<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo');
            $table->unsignedBigInteger('controlador_id')->nullable();
            $table->foreign('controlador_id')->references('id')->on('controladores');
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('evento_participante');
        Schema::dropIfExists('eventos');
    }
};
