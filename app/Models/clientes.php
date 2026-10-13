<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'codigo',
        'nombre',
        'telefono',
        'correo',
        'direccion',
    ];

    public function pedidos()
    {
        return $this->hasMany(pedidos::class, 'cliente_id');
    }
}
