<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $table ='marca';
    protected $primaryKey ='id_marca';
    protected $fillable=[
        'descripcion'
    ];
}
