<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerroColor extends Model
{
    use HasFactory;

    protected $table = 'perros_colores';
    protected $fillable = [
        'id',
        'perro_id',
        'color_id',
    ];
}
