<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'fecha_pedido',
        'fecha_entrega',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(clientes::class, 'cliente_id');
    }

    public function empleado()
    {
        return $this->belongsTo(empleados::class, 'empleado_id');
    }

    public function detallePedidos()
    {
        return $this->hasMany(detalle_pedidos::class, 'pedido_id');
    }
}
