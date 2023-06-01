<?php

namespace App\Http\Requests\Asistencia;

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
            'tema_id' => 'required|exists:temas,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'asistio' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'tema_id.required' => 'El campo Tema es obligatorio.',
            'tema_id.exists' => 'El Tema seleccionado no es válido.',
            'usuario_id.required' => 'El campo Usuario es obligatorio.',
            'usuario_id.exists' => 'El Usuario seleccionado no es válido.',
            'asistio.required' => 'El campo Asistió es obligatorio.',
            'asistio.boolean' => 'El campo Asistió debe ser verdadero o falso.',
        ];
    }
}
