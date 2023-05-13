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
        Schema::create('camion', function (Blueprint $table) {
            $table->id('id_camion');
            $table->string('placa');
            $table->string('marca');
            $table->string('color');
            $table->string('modelo');
            $table->integer('capacidad');
            $table->unsignedBigInteger('id_transporte');
            $table->foreign('id_transporte')->references('id_transporte')->on('transporte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
