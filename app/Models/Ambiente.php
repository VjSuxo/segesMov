<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;
    protected $table = 'ambientes';
    protected $fillable = [
        'nombre',
        'capacidad',
        'estado',
        'controlador_id',
        'infraestructura_id'
    ];

    public function controlador()
    {
        return $this->belongsTo(Controlador::class);
    }

    public function infraestructura()
    {
        return $this->belongsTo(Infraestructura::class);
    }

    public function infraestructuras()
    {
        return $this->hasMany(Infraestructura::class);
    }

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function temas()
    {
        return $this->hasMany(Tema::class);
    }


}
