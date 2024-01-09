<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $table = 'perros';
    protected $fillable = [
        'id',
        'nombre',
        'img',
        'raza_id',
        'tamaño_id',
        'color_pelo_id',
        'updated_at',
        'created_at'
    ];
}
