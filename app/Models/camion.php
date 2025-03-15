<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    protected $table ='camion';
    protected $primaryKey ='id_camion';
    protected $fillable=[
        'placa',
        'codigo_interno',
        'color',
        'modelo',
        'capacidad_toneladas',
        'id_transporte',
        'id_marca'
    ];
    public function transporte ()
    {
        return $this->belongsTo (Transporte::class, 'id_transporte');
    }
    public function marca ()
    {
        return $this->belongsTo (Marca::class, 'id_marca');
    }
}
