<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
    protected $fillable=[
        'user_id',
        'nombre',
        'link',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }


}
