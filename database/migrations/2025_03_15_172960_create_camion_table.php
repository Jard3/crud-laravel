<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table->string('id_camion')->unique(); // id_camion como string único
            $table->string('placa'); // Columna para la placa del camión
            $table->decimal('codigo_interno', 8, 2); // Un número decimal para el código interno
            $table->string('color'); // Color del camión
            $table->year('modelo'); // Año del modelo del camión
            $table->decimal('capacidad_toneladas', 8, 2); // Capacidad en toneladas
            $table->unsignedBigInteger('id_transporte');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_transporte')->references('id_transporte')->on('transporte')->onDelete('cascade');
            $table->foreign('id_marca')->references('id')->on('marca')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        // Desactivar las restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Elimina las tablas
        Schema::dropIfExists('marca');
        Schema::dropIfExists('transporte');

        // Habilitar las restricciones de claves foráneas nuevamente
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
