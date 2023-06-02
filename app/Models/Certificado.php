<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $table = 'certificados';
    protected $fillable = [
        'fecha',
        'participante_id',
        'enlace',
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
