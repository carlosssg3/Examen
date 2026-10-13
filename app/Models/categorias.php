<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function productos()
    {
        return $this->hasMany(productos::class, 'categoria_id');
    }
}
