<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'codigo',
        'nombre',
        'telefono',
        'correo',
        'cargo',
    ];

    public function pedidos()
    {
        return $this->hasMany(pedidos::class, 'empleado_id');
    }
}
