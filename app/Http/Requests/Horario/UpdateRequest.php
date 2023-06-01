<?php

namespace App\Http\Requests\Horario;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'ambiente_id'=>'required|integer|exists:App\Ambiente,id',
            'hora'=>'reqired',
            'tiempo'=>'required',
            'fecha'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'ambiente_id.required'=>'El campo es requerido',
            'ambiente_id.integer'=>'El valor tiene que ser entero',
            'ambiente_id.exists'=>'El ambiente no existe',

            'hora.required'=>'El campo es requerido',

            'tiempo.required'=>'El campo es requerido',

            'fecha.required'=>'El campo es requerido',
        ];
    }
}
