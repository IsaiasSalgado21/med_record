<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $primaryKey = 'id_paciente';


    protected $fillable = [
        'id_usuario',
        'estado',
        'fecha_creacion',
        'fecha_modificacion'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

  
    public function cuidadores()
    {
        return $this->belongsToMany(Cuidador::class, 'asignacioncuidadorpaciente', 'id_paciente', 'id_cuidador');
    }
}
