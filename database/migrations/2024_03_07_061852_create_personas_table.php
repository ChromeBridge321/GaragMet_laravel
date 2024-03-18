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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('correo', 120);
            $table->string('telefono', 10);
            $table->text('direccion');
            $table->unsignedBigInteger('taller_id');
            $table->foreign('taller_id')->references('id')->on('talleres_mecanicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
