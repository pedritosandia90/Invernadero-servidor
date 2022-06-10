<?php

namespace App\Models;

use CodeIgniter\Model;

class monitoreoModel extends Model
{
    protected $table = 'monitoreo'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_monitoreo'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $allowedFields =
    [
        'fecha_monitoreo',
        'id_parcela',
    ];
}