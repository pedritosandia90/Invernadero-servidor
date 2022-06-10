<?php

namespace App\Models;

use CodeIgniter\Model;

class parcelaModel extends Model
{
    protected $table = 'parcela'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_parcela'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $allowedFields =
    [
        'planta_nombre',
        'extension_metros2',
        'id_agricultor',
        'id_planta',
    ];
}