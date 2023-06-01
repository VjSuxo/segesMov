<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255|unique:users,email,' . $this->user->id,
            'password' => 'sometimes|required|string|min:8|max:255',
            'role' => 'sometimes|required|in:participante,expositor,controlador',
            'apellido_Pat' => 'sometimes|required|string|max:255',
            'apellido_Mat' => 'sometimes|required|string|max:255',
            'anio_Nac' => 'sometimes|required|date',
            'genero' => 'sometimes|required|in:m,f,o',
            'informacion' => 'nullable|string',
            // Atributos específicos de cada tipo de usuario:
            'nivel_estudios' => 'nullable|string|max:255|required_if:role,participante',
            'profesion' => 'nullable|string|max:255|required_if:role,participante',
            'nombre_empresa' => 'nullable|string|max:255|required_if:role,expositor',
            'biografia' => 'nullable|string|required_if:role,expositor',
            'turno' => 'nullable|string|max:255|required_if:role,controlador',
            'fecha_inicio_contrato' => 'nullable|date|required_if:role,controlador',
            'fecha_termino_contrato' => 'nullable|date|required_if:role,controlador',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'apellido_pat.required' => 'El apellido paterno es obligatorio.',
            'apellido_pat.string' => 'El apellido paterno debe ser una cadena de caracteres.',
            'apellido_pat.max' => 'El apellido paterno no puede tener más de :max caracteres.',

            'apellido_mat.required' => 'El apellido materno es obligatorio.',
            'apellido_mat.string' => 'El apellido materno debe ser una cadena de caracteres.',
            'apellido_mat.max' => 'El apellido materno no puede tener más de :max caracteres.',

            'anio_nac.required' => 'El año de nacimiento es obligatorio.',
            'anio_nac.date_format' => 'El año de nacimiento debe tener el formato :format.',

            'genero.required' => 'El género es obligatorio.',
            'genero.in' => 'El género debe ser Masculino, Femenino o No binario.',

            'informacion.required' => 'La información es obligatoria.',
            'informacion.string' => 'La información debe ser una cadena de caracteres.',
            'informacion.max' => 'La información no puede tener más de :max caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de caracteres.',
            'email.email' => 'El correo electrónico debe tener un formato válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña debe ser una cadena de caracteres.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.'
        ];
    }
}
