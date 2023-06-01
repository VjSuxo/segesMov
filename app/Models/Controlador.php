<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controlador extends Model
{
    protected $table = 'controladores';
    protected $fillable = [
        'turno',
        'fecha_inicio_contrato',
        'fecha_termino_contrato',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function ambientes()
    {
        return $this->hasMany(Ambiente::class);
    }

}
