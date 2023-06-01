<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $table = 'auditorias';

    protected $fillable = [
        'user_id',
        'accion',
        'modelo',
        'valores_viejos',
        'valores_nuevos',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
