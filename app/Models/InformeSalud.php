<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformeSalud extends Model
{
    use HasFactory;

    protected $table = 'informes_salud';
    protected $primaryKey = 'id_informe';

    protected $fillable = [
        'id_paciente',
        'sintomas',
        'diagnostico',
        'actividades_realizadas',
        'fecha_creacion',
        'fecha_modificacion'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}

