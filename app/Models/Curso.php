<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
}

public function grupo()
{
    return $this->belongsTo(Grupo::class);
}

public function kit()
{
    return $this->belongsTo(Kit::class);
}
