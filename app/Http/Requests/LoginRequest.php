<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;//su valor es true para habilitar el uso de esta request
    }

    /**
     * @return array
     */
    public function rules()
    {
      //aqui defino los datos que usara para
      //autenticarse
        return [
            'correo' => 'required',
            'contraseña' => 'required'
        ];
    }

    /**
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getCredentials()
    {
      //aqui retorno las credenciales que se usaran en la autenticacion
        return $this->only('correo', 'contraseña');
    }
}
