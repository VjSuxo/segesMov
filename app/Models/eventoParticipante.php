<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventoParticipante extends Model
{
    use HasFactory;
    protected $table = 'evento_participantes';
    protected $fillable = [
        'id',
        'evento_id',
        'participante_id',
        'inscrito',
        'reservado',
    ];


    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }

    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }

    public function eventos()
    {
        return $this->belongsToMany(Evento::class);
    }

}
