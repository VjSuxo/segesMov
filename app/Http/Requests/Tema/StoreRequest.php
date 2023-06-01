<?php

namespace App\Http\Requests\Tema;

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
            'expositor_id' => ['required', 'exists:expositores,id'],
            'contenido_id' => ['required', 'exists:contenidos,id'],
            'evento_id' => ['required', 'exists:eventos,id'],
            'infraestructura_id' => 'required|exists:App\Models\Infraestructura,id',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser un texto.',
            'nombre.max' => 'El nombre no debe ser mayor a 255 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string' => 'La descripción debe ser un texto.',
            'expositor_id.required' => 'El expositor es obligatorio.',
            'expositor_id.exists' => 'El expositor seleccionado no existe.',
            'contenido_id.required' => 'El contenido es obligatorio.',
            'contenido_id.exists' => 'El contenido seleccionado no existe.',
            'evento_id.required' => 'El evento es obligatorio.',
            'evento_id.exists' => 'El evento seleccionado no existe.',

            'infraestructura_id.required' => 'Debe seleccionar una infraestructura para el tema.',
            'infraestructura_id.exists' => 'La infraestructura seleccionada no existe en nuestra base de datos.',
        ];
    }
}
