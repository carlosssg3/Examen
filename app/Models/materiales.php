<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $table = 'materiales';

    protected $fillable = [
        'proveedor_id',
        'nombre',
        'descripcion',
        'unidad_medida',
        'precio_unitario',
    ];

    public function proveedor()
    {
        return $this->belongsTo(proveedores::class, 'proveedor_id');
    }
}
