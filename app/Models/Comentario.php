<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = [
        'contenido',
        'participante_id',
        'evento_id',
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
