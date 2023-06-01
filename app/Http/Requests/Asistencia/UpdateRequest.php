<?php

namespace App\Http\Requests\Asistencia;

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
            'asistio' => 'boolean',
        ];
    }

    public function messages()
    {
        return [
            'asistio.boolean' => 'El campo asistió debe ser verdadero o falso.',
        ];
    }
}
