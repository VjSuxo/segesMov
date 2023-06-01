<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $table = 'asistencias';
    protected $fillable = [
        'asistio',
        'evento_id',
        'participante_id',
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }



    // Relación de asistencias con evento
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    // Relación de asistencias con temas
    public function temas()
    {
        return $this->belongsToMany(Tema::class, 'asistencia_tema')
                    ->withPivot('asistio');
    }


}
