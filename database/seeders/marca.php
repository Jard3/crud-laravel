<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marca extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('marca')-> insert([
            ['id_marca'=>'002'],
            ['descripcion'=> 'Toyota']
           
        ]);
    }
}
