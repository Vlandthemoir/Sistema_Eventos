<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
  		'id_usuario',
  		'nombre',
      'url',
  		'tipo',
  	];
  	//cambio de nombre de las convenciones
  	protected $table = 'fotos';
  		 /**
  		 * The name of the "created at" column.
  		 *
  		 * @var string
  		 */
  		const CREATED_AT = 'fecha_creado';
  		 /**
  		 * The name of the "updated at" column.
  		 *
  		 * @var string
  		 */
  		 const UPDATED_AT = 'fecha_modificado';
}
