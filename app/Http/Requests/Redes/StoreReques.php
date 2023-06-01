<?php

namespace App\Http\Requests\Redes;

use Illuminate\Foundation\Http\FormRequest;

class StoreReques extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required|integer|exists:App\User,id',
            'nombre'=>'required|string|max:255',
            'link'=>'required|string',
        ];

    }

    public function messages()
    {
        return [
            'user_id.required'=>'El campo es requerido',
            'user_id.integer'=>'El valor tiene que ser entero',
            'user_id.exists'=>'El usuario no existe',

            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',

            'link.required'=>'Este campo es requerido',
            'link.string'=>'El valor no es correcto',
        ];
    }
}
