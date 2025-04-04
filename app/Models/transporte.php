<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    protected $table = 'transporte';
    protected $primaryKey = 'id_transporte';
    public $timestamps = true;

    protected $fillable = [
        'codigo',
        'nombre',
        'razon_social',
        'id_marca',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function camiones()
    {
        return $this->hasMany(Camion::class, 'id_transporte');
    }
}
