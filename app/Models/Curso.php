<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'portada',
        'contenido',
        'material',
        'grupo_id',
        'kit_id'
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }
}
