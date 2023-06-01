<?php

namespace App\Http\Requests\Reserva;

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
            'fecha' => ['required|date'],
            'hora_inicio' => ['required|date_format:H:i:s'],
            'hora_fin' => ['required|date_format:H:i:s|after:hora_inicio'],
            'infraestructura_id' => ['required|exists:infraestructuras,id'],
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'El campo fecha es obligatorio',
            'fecha.date' => 'El campo fecha debe ser una fecha válida',
            'hora_inicio.required' => 'El campo hora de inicio es obligatorio',
            'hora_inicio.date_format' => 'El campo hora de inicio debe tener un formato de hora válido (hh:mm:ss)',
            'hora_fin.required' => 'El campo hora de fin es obligatorio',
            'hora_fin.date_format' => 'El campo hora de fin debe tener un formato de hora válido (hh:mm:ss)',
            'hora_fin.after' => 'El campo hora de fin debe ser posterior a la hora de inicio',
            'infraestructura_id.required' => 'El campo infraestructura es obligatorio',
            'infraestructura_id.exists' => 'La infraestructura seleccionada no existe',
        ];
    }
}
