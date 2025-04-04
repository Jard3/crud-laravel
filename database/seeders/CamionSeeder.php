<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camion;

class CamionSeeder extends Seeder
{
    public function run()
    {

        Camion::factory(10)->create();
    }
}
