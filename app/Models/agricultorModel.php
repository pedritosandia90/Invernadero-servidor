<?php

namespace App\Models;

use CodeIgniter\Model;

class agricultorModel extends Model
{
    protected $table = 'agricultor'; // nombre de la tabla en base de datos
    protected $primaryKey = 'id_agricultor'; //nombre de la llave primaria que se usa los metodos crud
    protected $useAutoIncrement = true; 
    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    // indica si la fecha actual sera añadida automaticamente en los 'inserts' y 'updates',
    // si es true, requiere que la tabla contenga columnas 'created_at', 'updated_at'
    protected $useTimestamps = true;

    // especifica el campo  que guarda la fecha en que se inserta un registro a la bd
    protected $createdField = false;
    protected $updatedField = false;
    // especifica el campo  que guarda la fecha en que se actualiza un registro a la bd
    protected $deletedField = 'eliminado ';
    protected $allowedFields =
    [
        'Usuario',
        'ag_nombre_completo',
        'contrasena',
    ];
}