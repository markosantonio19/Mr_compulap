<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'ventas';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'producto_id',
        'dni',
        'cantidad',
        'precio_unitario',
        'total',
        'fecha_venta',
    ];

    // Relación con el modelo Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

}
