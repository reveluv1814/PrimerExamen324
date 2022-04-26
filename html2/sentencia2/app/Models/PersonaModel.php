<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonaModel extends Model
{
	protected $table                = 'persona';
	protected $primaryKey           = 'id_persona';
	protected $allowedFields        = ['id_persona','id_acceso,','ci','nombre_c','fecha_nac','deparatamento'];
}