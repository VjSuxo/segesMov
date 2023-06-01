<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->integer('capacidad');
            $table->string('estado');

            //$table->unsignedBigInteger('evento_id');
            //$table->foreign('evento_id')->references('id')->on('eventos');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //$table->unsignedBigInteger('horario_id');
            //$table->foreign('horario_id')->references('id')->on('horarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambientes');
    }
};
