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
		'contraseña',
	];
	//cambio de nombre de las convenciones
	protected $table = 'usuarios';
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
		 /**
 	 	 * Get the login username to be used by the controller.
 		 *
 		 * @return string
 		 */
		 public function username()
		 {
			 return 'nombre';
		 }
		 /**
 	 	 * Get the password for the user.
 		 *
 	 	 * @return string
 	 	 */
		 public function getAuthPassword()
		 {
			 return $this->contraseña;
		 }


}
