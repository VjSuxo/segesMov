<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
        'apellido_Pat',
        'apellido_Mat',
        'anio_Nac',
        'genero',
        'informacion',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected function role(): Attribute
    {
        //0 = admin, 1 = user, 2 = controlador, 4 = expositor
        return new Attribute(
            get: fn ($value) =>  ["admin", "user", "controlador", "expositor"][$value],
        );
    }


    public function expositor()
    {
        return $this->belongsTo(Expositor::class, 'id_expositor');
    }

    public function controlador()
    {
        return $this->belongsTo(Controlador::class, 'id_controlador');
    }

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'id_participante');
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }





}






