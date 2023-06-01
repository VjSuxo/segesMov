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
        Schema::create('auditorias', function (Blueprint $table) {
            $table->id();
    $table->unsignedBigInteger('user_id');
    $table->string('accion');
    $table->string('modelo')->nullable();
    $table->json('valores_viejos')->nullable();
    $table->json('valores_nuevos')->nullable();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditorias');
    }
};
