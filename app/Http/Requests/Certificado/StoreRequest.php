<?php

namespace App\Http\Requests\Certificado;

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
            'fecha' => 'required|date',
            'participante_id' => 'required|exists:participantes,id',
            'evento_id' => 'required|exists:eventos,id',
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'La fecha es obligatoria',
            'fecha.date' => 'La fecha debe ser una fecha válida',
            'participante_id.required' => 'El participante es obligatorio',
            'participante_id.exists' => 'El participante seleccionado no existe en la base de datos',
            'evento_id.required' => 'El evento es obligatorio',
            'evento_id.exists' => 'El evento seleccionado no existe en la base de datos',
        ];
    }
}
