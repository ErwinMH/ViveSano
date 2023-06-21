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
        Schema::create('reginformacions', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('nombre_completo');
            $table->string('email');
            $table->string('fecha_nacimiento');
            $table->string('peso_kg');
            $table->string('sexo');
            $table->string('enfermedades');
            $table->string('tipo_de_cuerpo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reginformacions');
    }
};
