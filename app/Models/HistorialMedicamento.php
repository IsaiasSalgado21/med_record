<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedicamento extends Model
{
    use HasFactory;

    protected $table = 'historial_medicamento';
    protected $primaryKey = 'id_historial';

    protected $fillable = [
        'id_paciente',
        'id_medicamento',
        'cantidad_administrada',
        'fecha_administracion',
        'observaciones',
        'fecha_creacion'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class, 'id_medicamento');
    }
}
