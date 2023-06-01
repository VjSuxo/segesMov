<?php

namespace App\Http\Requests\Contenido;

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
            'titulo' => 'required|string|max:255',
            'archivo' => 'nullable|file|max:10240',
            'descripcion' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El título del contenido es obligatorio',
            'titulo.string' => 'El título del contenido debe ser una cadena de caracteres',
            'titulo.max' => 'El título del contenido no debe ser mayor a 255 caracteres',
            'archivo.file' => 'El archivo del contenido debe ser un archivo',
            'archivo.max' => 'El archivo del contenido no debe ser mayor a 10 MB',
            'descripcion.string' => 'La descripción del contenido debe ser una cadena de caracteres',
        ];
    }
}
