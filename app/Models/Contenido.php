<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;
    protected $table = 'contenidos';
    protected $fillable = [
        'titulo',
        'archivo',
        'descripcion',
        'tema_id',
        'expositor_id',
    ];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function expositor()
    {
        return $this->belongsTo(Expositor::class);
    }
}
