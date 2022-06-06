<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'razonsocial',
        'cuil',
        'telefono1',
        'telefono2',
        'correo',
        'calle_nombre',
        'calle_numero',
        'codigo_postal',
        'barrio_id',
        'localidad_id',
        'provincia_id',
        'contacto_nombre',
        'contacto_correo',
        'contacto_cargo',
        'fecha_alta',
    ];
}
