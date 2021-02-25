<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients,dni,'.$this->route('client')->id.'|min:max:15',
            'ruc'=>'nullable|string|unique:clients,ruc,'.$this->route('client')->id.'|max:11',
            'address'=>'nullable|string|max:255',
            'phone'=>'string|nullable|unique:clients,phone,'.$this->route('client')->id.'|max:8',
            'email'=>'string|nullable|unique:clients,email,'.$this->route('client')->id.'|max:255|email:rfc,dns',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 255 carácteres',
            
            'dni.string'=>'El valor no es correcto',
            'dni.required'=>'Este campo es requerido',
            'dni.unique'=>'Este DNI ya se encuentra registrado',
            'dni.min'=>'Se requieren de 8 carácteres',
            'dni.max'=>'Solo se permiten 8 carácteres',

            'ruc.string'=>'El valor no es correcto',
            'ruc.unique'=>'Este número de RUC ya se encuentra registrado',
            'ruc.min'=>'Se requieren de 8 carácteres',
            'ruc.max'=>'Solo se permiten 8 carácteres',
            
            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permiten 255 carácteres',

            'phone.string'=>'El valor no es correcto',
            'phone.unique'=>'Este número de celular ya se encuentra registrado',
            'phone.min'=>'Se requieren de 8 carácteres',
            'phone.max'=>'Solo se permiten 8 carácteres',

            'email.string'=>'El valor no es correcto',
            'email.unique'=>'La dirección de correo electrónico ya se encuentra registrado',
            'email.max'=>'Solo se permiten 255 carácteres',
            'email.email'=>'No es un correo electrónico',
        ];
    }
}
