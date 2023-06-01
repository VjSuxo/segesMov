<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participantes';
    protected $fillable = [
        'nivel_estudios',
        'profesion',
        'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function asistencia()
    {
        return $this->belongsTo(Asistencia::class);
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }

    public function eventoParticipante()
    {
        return $this->belongsTo(eventoParticipante::class);
    }
    public function eventoParticipantes()
    {
        return $this->hasMany(eventoParticipante::class);
    }
}
