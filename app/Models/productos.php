<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
    ];

    public function categoria()
    {
        return $this->belongsTo(categorias::class, 'categoria_id');
    }

    public function detallePedidos()
    {
        return $this->hasMany(detalle_pedidos::class, 'producto_id');
    }
}
