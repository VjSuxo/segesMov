<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'ambiente_id',
            'hora',
            'tiempo',
            'fecha',
    ];

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class);
    }

}
