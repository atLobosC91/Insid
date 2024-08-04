<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model
{
    protected $table = 'solicitud';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'id_Usuario', 'id_permiso', 'fecha_inicio', 'fecha_termino', 'hora_inicio',
        'hora_termino', 'id_estado', 'motivo', 'fecha_solicitud'
    ];
}
