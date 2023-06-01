<?php

namespace App\Http\Requests\Reserva;

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
            'fecha' => ['required', 'date'],
            'hora_inicio' => ['required', 'date_format:H:i'],
            'hora_fin' => ['required', 'date_format:H:i', 'after:hora_inicio'],
            'infraestructura_id' => ['required', 'exists:infraestructuras,id']
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'La fecha de la reserva es requerida',
            'fecha.date_format' => 'La fecha de la reserva debe estar en formato YYYY-MM-DD',
            'hora_inicio.required' => 'La hora de inicio de la reserva es requerida',
            'hora_inicio.date_format' => 'La hora de inicio de la reserva debe estar en formato HH:MM:SS',
            'hora_fin.required' => 'La hora de fin de la reserva es requerida',
            'hora_fin.date_format' => 'La hora de fin de la reserva debe estar en formato HH:MM:SS',
            'infraestructura_id.required' => 'La infraestructura a reservar es requerida',
            'infraestructura_id.exists' => 'La infraestructura seleccionada no existe',
        ];
    }

}
