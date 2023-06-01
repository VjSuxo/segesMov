<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'role' => 'required|in:participante,expositor,controlador',
            'apellido_Pat' => 'required|string|max:255',
            'apellido_Mat' => 'required|string|max:255',
            'anio_Nac' => 'required|date',
            'genero' => 'required|in:m,f,o',
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
            'name.required' => 'El nombre es requerido.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.max' => 'El nombre no debe exceder los 255 caracteres.',
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.required' => 'La contraseña es requerida.',
            'password.string' => 'La contraseña debe ser una cadena de caracteres.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.max' => 'La contraseña no debe exceder los 255 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'role.required' => 'El rol es requerido.',
            'role.string' => 'El rol debe ser una cadena de caracteres.',
            'role.max' => 'El rol no debe exceder los 255 caracteres.',
            'apellido_pat.required' => 'El apellido paterno es requerido.',
            'apellido_pat.string' => 'El apellido paterno debe ser una cadena de caracteres.',
            'apellido_pat.max' => 'El apellido paterno no debe exceder los 255 caracteres.',
            'apellido_mat.string' => 'El apellido materno debe ser una cadena de caracteres.',
            'apellido_mat.max' => 'El apellido materno no debe exceder los 255 caracteres.',
            'anio_nac.date_format' => 'El año de nacimiento debe estar en formato YYYY.',
            'genero.in' => 'El género debe ser "male" o "female".',
            'informacion.string' => 'La información adicional debe ser una cadena de caracteres.',
        ];
    }
}
