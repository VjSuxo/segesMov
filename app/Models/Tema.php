<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $table = 'temas';
    protected $fillable = [
        'nombre',
        'descripcion',
        'hora_inicio',
        'hora_fin',
        'evento_id',
        'expositor_id',
        'ambiente_id',
        'fecha'];



    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function expositor()
    {
        return $this->belongsTo(Expositor::class);
    }

    public function contenido()
    {
        return $this->hasMany(Contenido::class);
    }

    public function ambiente()
    {
        return $this->hasMany(Ambiente::class);
    }

    public function tambientes()
    {
        return $this->belongsTo(Ambiente::class);
    }

}
