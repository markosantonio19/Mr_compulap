<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
    ];
}
