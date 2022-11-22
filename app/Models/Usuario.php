<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	use HasFactory;

	protected $fillable = [
		'nombre',
		'correo',
		'contrasena',
	];
	protected $table = 'usuarios';
	const CREATED_AT = 'fecha_creado';
	const UPDATED_AT = 'fecha_actualizado';

}
