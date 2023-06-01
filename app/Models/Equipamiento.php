<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamiento extends Model
{
    protected $fillable = [
        'inventario_id',
        'ambiente_id',
        'nombre',
        'cantidad',
        'estado',
        'tipo'
    ];

    public function inventario()
    {
        return $this->morphOne(Inventario::class);
    }

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class);
    }

}
