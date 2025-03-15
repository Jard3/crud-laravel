<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table= 'prodcuto';
    protected $primarykey = 'id';
    public $incrementing = true;
    protected $fillable =['id','nombre producto','descripcion_producto','precio_producto'];
    public $timestamps = true;



   
    

}
