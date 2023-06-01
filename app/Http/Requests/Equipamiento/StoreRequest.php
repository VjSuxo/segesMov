<?php

namespace App\Http\Requests\Equipamiento;

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
            'inventario_id'=>'required|integer|exists:App\Invetario,id',
            'ambiente_id'=>'required|integer|exists:App\Ambiente,id',
            'nombre'=>'required|string|max:255',
            'cantidad'=>'required|integer',
            'estado'=>'required|string|max:255',
            'tipo'=>'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'inventario_id.required'=>'El campo es requerido',
            'inventario_id.integer'=>'El valor tiene que ser entero',
            'inventario_id.exists'=>'El item no existe',

            'ambiente_id.required'=>'El campo es requerido',
            'ambiente_id.integer'=>'El valor tiene que ser entero',
            'ambiente_id.exists'=>'El ambiente no existe',

            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',


            'cantidad.required'=>'Este campo es requerido',
            'cantidad.integer'=>'El valor no es correcto',


            'estado.required'=>'Este campo es requerido',
            'estado.string'=>'El valor no es correcto',
            'estado.max'=>'Solo se permiten 50 caracteres',

            'tipo.required'=>'Este campo es requerido',
            'tipo.string'=>'El valor no es correcto',
            'tipo.max'=>'Solo se permiten 50 caracteres',
        ];
    }
}
