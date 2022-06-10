<?php

namespace App\Models;

use CodeIgniter\Model;

class plantaModel extends Model
{
    protected $table = 'planta'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_planta'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $allowedFields =
    [
        'planta_nombre',
        'ambiente',
        'tipoluz',
    ];
}