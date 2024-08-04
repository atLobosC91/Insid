<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['Nombres', 'Apellidos', 'Email', 'Pass', 'Fecha_creacion', 'Fecha_modificacion', 'ID_Rol'];
}
