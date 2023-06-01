<?php

namespace App\Http\Requests\Infraestructura;

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
            'capacidad' => 'required|integer|min:1',
            'estado' => 'required|in:disponible,no disponible',
            'tema_id' => 'nullable|exists:temas,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'nombre.max' => 'El campo nombre no debe exceder los :max caracteres.',
            'capacidad.required' => 'El campo capacidad es obligatorio.',
            'capacidad.integer' => 'El campo capacidad debe ser un número entero.',
            'capacidad.min' => 'El campo capacidad debe ser mayor a :min.',
            'estado.required' => 'El campo estado es obligatorio.',
            'estado.in' => 'El campo estado debe ser "disponible" o "no disponible".',
            'tema_id.exists' => 'El tema seleccionado no existe.',
        ];
    }
}
