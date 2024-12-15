<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    protected $table = 'cuidadores';
    protected $primaryKey = 'id_cuidador';

    protected $fillable = [
        'id_usuario',
        'fecha_creacion',
        'fecha_modificacion'
    ];

  
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }


    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class, 'asignacioncuidadorpaciente', 'id_cuidador', 'id_paciente');
    }
}
