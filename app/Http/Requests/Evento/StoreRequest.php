<?php

namespace App\Http\Requests\Evento;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'tipo' => ['required', 'string', 'max:50'],
            'temas' => ['nullable', 'array'],
            'temas.*' => ['exists:App\Models\Tema,id'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'nombre.max' => 'El campo nombre no debe tener más de 255 caracteres.',
            'descripcion.required' => 'El campo descripción es obligatorio.',
            'descripcion.string' => 'El campo descripción debe ser una cadena de caracteres.',
            'tipo.required' => 'El campo tipo es obligatorio.',
            'tipo.string' => 'El campo tipo debe ser una cadena de caracteres.',
            'tipo.max' => 'El campo tipo no debe tener más de 50 caracteres.',
            'temas.array' => 'El campo temas debe ser un arreglo.',
            'temas.*.exists' => 'Uno de los temas seleccionados no existe.',
        ];
    }
}
