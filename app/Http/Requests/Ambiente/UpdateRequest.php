<?php

namespace App\Http\Requests\Ambiente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'evento_id'=>'required|integer|exists:App\Evento,id',
            'horario_id'=>'required|integer|exists:App\Horario,id',
            'nombre'=>'required|string|max:255',
            'capacidad'=>'required|integer',
            'estado'=>'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required'=>'El campo es requerido',
            'user_id.integer'=>'El valor tiene que ser entero',
            'user_id.exists'=>'El usuario no existe',

            'evento_id.required'=>'El campo es requerido',
            'evento_id.integer'=>'El valor tiene que ser entero',
            'evento_id.exists'=>'El evento no existe',

            'horario_id.required'=>'El campo es requerido',
            'horario_id.integer'=>'El valor tiene que ser entero',
            'horario_id.exists'=>'El horario no existe',

            'capacidad.required'=>'Este campo es requerido',
            'capacidad.integer'=>'El valor no es correcto',

            'estado.required'=>'Este campo es requerido',
            'estado.string'=>'El valor no es correcto',
            'estado.max'=>'Solo se permiten 50 caracteres',

            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',
        ];
    }
}
