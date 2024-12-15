<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;

    protected $table = 'configuracion';
    protected $primaryKey = 'id_configuracion';

    protected $fillable = [
        'id_usuario',
        'etiquetas',
        'simbolos',
        'dashboard_personalizado'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}

