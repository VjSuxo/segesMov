<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    use HasFactory;
    protected $table = 'infraestructuras';
    protected $fillable = [
        'nombre',
        'direccion',
    ];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function temas()
    {
        return $this->hasMany(Tema::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }


    public function ambiente()
    {
        return $this->belongsToMany(Ambiente::class);
    }



}

