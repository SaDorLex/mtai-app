<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;

class Miembro extends Authenticatable
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

    public function cargo(){
        return $this->hasOne(Cargo::class, 'id_miembro');
    }

    public function getAuthIdentifierName()
    {
        return 'usuario';
    }
}
