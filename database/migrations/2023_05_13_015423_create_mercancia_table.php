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
        Schema::create('mercancia', function (Blueprint $table) {
            $table->id('id_merca');
            $table->string('nombre_mercancia');
            $table->unsignedBigInteger('id_tipmerca');
            $table->foreign('id_tipmerca')->references('id_tipmerca')->on('tipo_mercancia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mercancia');
    }
};
