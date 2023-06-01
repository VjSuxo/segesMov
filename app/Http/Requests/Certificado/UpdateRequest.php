<?php

namespace App\Http\Requests\Certificado;

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
            'fecha' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'La fecha del certificado es obligatoria.',
            'fecha.date' => 'La fecha del certificado debe ser una fecha válida.',
        ];
    }
}
