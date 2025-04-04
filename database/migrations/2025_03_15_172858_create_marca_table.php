<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaTable extends Migration
{
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->id(); // Asegúrate de que la columna 'id' esté definida como clave primaria
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marca');
    }
}
