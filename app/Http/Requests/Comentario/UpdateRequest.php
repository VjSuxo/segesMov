<?php

namespace App\Http\Requests\Comentario;

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
            'participante_id' => 'sometimes|required|exists:participantes,id',
            'evento_id' => 'sometimes|required|exists:eventos,id',
            'contenido' => 'sometimes|required|string'
        ];
    }

    public function messages()
    {
        return [
            'participante_id.required' => 'El participante es requerido.',
            'participante_id.exists' => 'El participante seleccionado no existe en la base de datos.',
            'evento_id.required' => 'El evento es requerido.',
            'evento_id.exists' => 'El evento seleccionado no existe en la base de datos.',
            'contenido.required' => 'El contenido es requerido.',
            'contenido.string' => 'El contenido debe ser una cadena de caracteres.'
        ];
    }
}
