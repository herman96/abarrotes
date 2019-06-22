<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nombre','categoria','descripcion','presentacion','cantidad','unidad','precio',
    ];

    public $timestamps = false;
}
