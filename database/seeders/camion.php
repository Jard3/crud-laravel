<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class camion extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('camion')-> insert([
            ['id_camion'=>'01'],
            ['placa'=>'T005klk'],
            ['codigo_interno'=>'001'],
            ['color'=>'azul'],
            ['modelo'=>'2005'],
            ['capacidad_toneladas'=>'115'],
            ['created_at'=>now()],
            ['updated_at'=>now()]
        ]);
    }
}
