<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';
    protected $primaryKey = 'id_medicamento';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_creacion',
        'fecha_modificacion'
    ];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class, 'historial_medicamento', 'id_medicamento', 'id_paciente');
    }


    public function alarmas()
    {
        return $this->hasMany(Alarma::class, 'id_medicamento');
    }
}
