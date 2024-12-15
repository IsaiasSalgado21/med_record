<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionCuidadorPaciente extends Model
{
    use HasFactory;

    protected $table = 'asignacion_cuidador_paciente';
    protected $primaryKey = 'id_asignacion';

    protected $fillable = [
        'id_cuidador',
        'id_paciente',
        'fecha_asignacion',
        'fecha_fin'
    ];

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}
