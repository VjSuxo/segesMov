<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina_Web extends Model
{
    protected $fillable = [
        'nombre',
        'image',
        'seccion',
        'contenido',
        'titulo',
    ];
}
