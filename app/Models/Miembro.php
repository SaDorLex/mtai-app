<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ap_p',
        'ap_m',
        'edad',
        'dni',
        'genero',
        'local',
        'telefono',
        'correo',
        'categoria',
        'modulo',
        'seminario',
        'fecha_nac',
        'ondas_d',
        'usuario',
        'password',
        'foto'
    ];
}
