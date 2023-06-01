<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expositor extends Model
{
    protected $table = 'expositores';
    protected $fillable = [
        'id',
        'nombre_empresa',
        'biografia',
        'usuario_id',
        'url',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }



}
