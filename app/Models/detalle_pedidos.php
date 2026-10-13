<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalle_pedidos extends Model
{
    protected $table = 'detalle_pedidos';

    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
    ];

    public function pedido()
    {
        return $this->belongsTo(pedidos::class, 'pedido_id');
    }

    public function producto()
    {
        return $this->belongsTo(productos::class, 'producto_id');
    }
}
