<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class transporte extends Seeder
{
    
    public function run(): void
    {
        DB::table('transporte')-> insert([
            ['id_transporte'=>01],
            ['codigo'=>001],
            ['nombre'=>Toro],
            ['razon_social'=>ejemplo],
            ['created_at'=>15/03/2025],
            ['updated_at'=>15/03/2025]
            
        ]);
    }
}
