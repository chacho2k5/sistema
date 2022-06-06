<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_Iva extends Model
{
    use HasFactory;

    protected $table = "tipos_iva";
    public $timestamps = false;
    protected $fillable = [
        'descripcion'
    ];
}
