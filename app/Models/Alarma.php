<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarma extends Model
{
    use HasFactory;

    protected $table = 'alarmas';
    protected $primaryKey = 'id_alarma';

    protected $fillable = [
        'id_medicamento',
        'id_paciente',
        'hora_alarma',
        'fecha_creacion',
        'fecha_modificacion'
    ];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'id_medicamento');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}

