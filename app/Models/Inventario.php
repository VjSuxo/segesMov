<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'equipamiento_id',
        'nombre',
        'cantidad',
        'estado',
        'tipo',
    ];

    public function equipamiento()
    {
        return $this->belongsTo(Equipamiento::class);
    }

}
