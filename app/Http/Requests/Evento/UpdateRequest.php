<?php

namespace App\Http\Requests\Evento;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string|max:50',
            'tema_id' => 'nullable|integer|exists:temas,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del evento es requerido',
            'nombre.string' => 'El nombre del evento debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del evento no puede tener más de 255 caracteres',
            'descripcion.required' => 'La descripción del evento es requerida',
            'descripcion.string' => 'La descripción del evento debe ser una cadena de caracteres',
            'tipo.required' => 'El tipo de evento es requerido',
            'tipo.string' => 'El tipo de evento debe ser una cadena de caracteres',
            'tipo.max' => 'El tipo de evento no puede tener más de 50 caracteres',
            'certificado_id.integer' => 'El certificado seleccionado es inválido',
            'certificado_id.exists' => 'El certificado seleccionado no existe en la base de datos',
           'tema_id.integer' => 'El tema seleccionado es inválido',
            'tema_id.exists' => 'El tema seleccionado no existe en la base de datos',
            ];
    }
}
