<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'nombre_empresa',
        'contacto',
        'telefono',
        'correo',
        'direccion',
    ];

    public function materiales()
    {
        return $this->hasMany(materiales::class, 'proveedor_id');
    }
}
