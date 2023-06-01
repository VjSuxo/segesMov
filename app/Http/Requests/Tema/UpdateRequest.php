<?php

namespace App\Http\Requests\Tema;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'string|max:255',
            'descripcion' => 'string|max:1000',
            'expositor_id' => 'exists:expositores,id',
            'contenido_id' => 'exists:contenidos,id',
            'evento_id' => 'exists:eventos,id',
            'infraestructura_id' => 'nullable|exists:App\Models\Infraestructura,id',
        ];
    }

    public function messages()
    {
        return [
            'titulo.string' => 'El título debe ser un texto',
            'titulo.max' => 'El título no debe ser mayor a 255 caracteres',
            'descripcion.string' => 'La descripción debe ser un texto',
            'descripcion.max' => 'La descripción no debe ser mayor a 1000 caracteres',
            'expositor_id.exists' => 'El expositor seleccionado no existe',
            'contenido_id.exists' => 'El contenido seleccionado no existe',
            'evento_id.exists' => 'El evento seleccionado no existe',
            'infraestructura_id.exists' => 'La infraestructura seleccionada no existe en nuestra base de datos.',
        ];
    }
}
