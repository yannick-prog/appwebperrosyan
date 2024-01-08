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
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 64);
            $table->string('img', 200);
            $table->unsignedBigInteger('raza_id');
            $table->foreign('raza_id')->references('id')->on('razas');
            $table->unsignedBigInteger('tamaño_id');
            $table->foreign('tamaño_id')->references('id')->on('tamaños');
            $table->unsignedBigInteger('color_pelo_id');
            $table->foreign('color_pelo_id')->references('id')->on('colores_pelo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
