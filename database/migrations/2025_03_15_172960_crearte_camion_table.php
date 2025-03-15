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
            $table->string('placa',8);
            $table->string('codigo interno',8);
            $table->string('color',35);
            $table->string('modelo',35);
            $table->string('capacidad_toneladas',45);
            $table->unsignedBigInteger('id_transporte');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_transporte')
                ->references('id_transporte')
            ->on('transporte')
            ->onDelete('cascade');
            $table->foreign('id_marca')
            ->references('marca')
            ->on('transporte')
            ->onDelete('cascade');
            $table->timestamp('created at');
            $table->timestamp('updated at');

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
