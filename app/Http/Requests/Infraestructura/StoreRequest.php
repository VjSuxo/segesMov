<?php

namespace App\Http\Requests\Infraestructura;

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
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'estado' => 'required|string|in:disponible,ocupado',
            'tema_id' => 'required|exists:temas,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la infraestructura es obligatorio.',
            'nombre.string' => 'El nombre de la infraestructura debe ser una cadena de caracteres.',
            'nombre.max' => 'El nombre de la infraestructura no puede tener más de 255 caracteres.',
            'capacidad.required' => 'La capacidad de la infraestructura es obligatoria.',
            'capacidad.integer' => 'La capacidad de la infraestructura debe ser un número entero.',
            'capacidad.min' => 'La capacidad de la infraestructura debe ser mayor o igual a 1.',
            'estado.required' => 'El estado de la infraestructura es obligatorio.',
            'estado.string' => 'El estado de la infraestructura debe ser una cadena de caracteres.',
            'estado.in' => 'El estado de la infraestructura debe ser "disponible" o "ocupado".',
            'tema_id.required' => 'El tema relacionado con la infraestructura es obligatorio.',
            'tema_id.exists' => 'El tema relacionado con la infraestructura no existe.',
        ];
    }
}
