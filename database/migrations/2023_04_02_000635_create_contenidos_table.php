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
        Schema::create('contenidos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('archivo');
            $table->text('descripcion');
            $table->unsignedBigInteger('tema_id');
            $table->unsignedBigInteger('expositor_id');
            $table->timestamps();

            $table->foreign('tema_id')->references('id')->on('temas');
            $table->foreign('expositor_id')->references('id')->on('expositores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenidos');
    }
};
