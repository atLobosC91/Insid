<?php

namespace App\Models;

use CodeIgniter\Model;

class PermisoModel extends Model
{
    protected $table = 'permiso';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['descripcion', 'fecha_creacion'];
}
