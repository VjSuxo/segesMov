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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('apellido_Mat');
            $table->string('apellido_Pat');
            $table->integer('anio_Nac');
            $table->string('genero');
            $table->string('password');
            //0 = admin, 1 = user, 2 = expositor, 4 = controlador, 3 = expositor
            $table->tinyInteger('role')->default(1);
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
