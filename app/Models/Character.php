<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['nombre', 'movie_id', 'imagen', 'descripcion'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
