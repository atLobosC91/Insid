<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadoModel extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'ID';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['descripcion'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    
}
