<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transporte', function (Blueprint $table) {
            $table->id('id_transporte'); // Crea la columna id_transporte como clave primaria
            $table->string('codigo', 45); // Columna para código de transporte
            $table->string('nombre', 125); // Columna para nombre del transporte
            $table->string('razon_social', 175); // Columna para la razón social
            $table->timestamps(); // Crea automáticamente las columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Desactivar las restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Elimina las tablas
        Schema::dropIfExists('camion');
        Schema::dropIfExists('transporte');

        // Habilitar las restricciones de claves foráneas nuevamente
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
