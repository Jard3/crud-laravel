<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{
    protected $table ='transporte';
    protected $primaryKey ='id_transporte';
    protected $fillable=[
        'codigo',
        'nombre',
        'razon_social',
        'created_at',
        'updated_at',
        'id_transporte',
        'id_marca'
    ];
}
