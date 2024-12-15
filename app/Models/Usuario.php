<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $table = 'usuarios';

    
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'password',
        'rol',
        'fecha_creacion',
        'fecha_modificacion'
    ];

    public $timestamps = false;

    public function paciente()
    {
        return $this->hasOne(Paciente::class, 'id_usuario');
    }

    public function cuidador()
    {
        return $this->hasOne(Cuidador::class, 'id_usuario');
    }
}
