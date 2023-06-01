<?php

namespace App\Http\Requests\Inventario;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'equipamiento_id'=>'requierd|integer|exists:App\Equipamiento,id',
            'nombre'=>'required|string|max:255',
            'cantidad'=>'required|integer',
            'estado'=>'required|string|max:255',
            'tipo'=>'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [

            'equipamiento_id.required'=>'El campo es requerido',
            'equipamiento_id.integer'=>'El valor tiene que ser entero',
            'equipamiento_id.exists'=>'El ambiente no existe',

            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',

            'cantidad',
            'cantidad.required'=>'Este campo es requerido',
            'cantidad.integer'=>'El valor no es correcto',

            'estado',
            'estado.required'=>'Este campo es requerido',
            'estado.string'=>'El valor no es correcto',
            'estado.max'=>'Solo se permiten 50 caracteres',

            'tipo.required'=>'Este campo es requerido',
            'tipo.string'=>'El valor no es correcto',
            'tipo.max'=>'Solo se permiten 50 caracteres',
        ];
    }

}
