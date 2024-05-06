<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'fecha_nacimiento',
        'direccion',
        '_token',
    ];
}
