<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['nombre', 'clasificacion', 'fecha_de_lanzamiento', 'revision_general', 'temporada'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
