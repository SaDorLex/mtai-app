<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo',
        'descripcion',
        'id_miembro',
    ];

    public function miembro(){
        return $this->belongsTo(Miembro::class, 'id_miembro');
    }
}
