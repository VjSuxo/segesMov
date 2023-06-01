<?php

namespace App\Http\Requests\Contenido;

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
            'titulo' => 'required|string|max:255',
            'archivo' => 'required|file|mimes:pdf,doc,docx',
            'descripcion' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'titulo.string' => 'El título debe ser un texto',
            'titulo.max' => 'El título no debe superar los 255 caracteres',
            'archivo.required' => 'El archivo es obligatorio',
            'archivo.file' => 'El archivo debe ser un archivo',
            'archivo.mimes' => 'El archivo debe ser de tipo pdf, doc o docx',
            'descripcion.string' => 'La descripción debe ser un texto',
        ];
    }
}
