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
        Schema::create('equipamientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('estado');
            $table->string('tipo');

            $table->unsignedBigInteger('ambiente_id');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
            //$table->unsignedBigInteger('inventario_id');
            //$table->foreign('inventario_id')->references('id')->on('inventarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamientos');
    }
};
