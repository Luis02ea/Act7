<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
}
public function cursos()
{
    return $this->hasMany(Curso::class);
}

public function usuarios()
{
    return $this->hasMany(User::class);
}
