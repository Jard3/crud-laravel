<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transporte;

class TransporteSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 registros de transporte usando el factory
        Transporte::factory(10)->create();
    }
}
