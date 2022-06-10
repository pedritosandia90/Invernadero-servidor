<?php

namespace App\Models;

use CodeIgniter\Model;

class monitoreodetModel extends Model
{
    protected $table = 'det_mon_par'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_detalle_planta_datos'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $allowedFields =
    [
        'id_parametros',
        'id_monitoreo',
        'observaciones_monitoreo',
        'valor_parametro',
    ];
}