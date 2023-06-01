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
        Schema::create('infraestructuras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ambiente_id')->nullable();
            $table->foreign('ambiente_id')->references('id')->on('ambientes');
            $table->unsignedBigInteger('tema_id')->nullable();
            $table->foreign('tema_id')->references('id')->on('temas');

            $table->timestamps();
        });



    }

    public function down()
    {
        Schema::dropIfExists('infraestructuras');
    }
};
