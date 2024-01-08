<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AñadirPerro extends Model
{
    use HasFactory;

    protected $table = 'perros';
    protected $fillable = [
        'id',
        'nombre',
        'color',
        'raza_id',
    ];
}
