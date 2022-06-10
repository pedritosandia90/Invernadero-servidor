<?php

namespace App\Models;

use CodeIgniter\Model;

class parametroModel extends Model
{
    protected $table = 'parametros'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_parametros'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $allowedFields =
    [
        'parametros_nombre',
        'frecuencia_dias',
        'valor_parametro',
        'comentario',
    ];
}