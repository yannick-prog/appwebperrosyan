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

        Schema::create('perros_colores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perro_id');
            $table->foreign('perro_id')->references('id')->on('perros');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colores_pelo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perros_colores');
    }
};
