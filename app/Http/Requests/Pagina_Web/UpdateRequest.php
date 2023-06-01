<?php

namespace App\Http\Requests\Pagina_Web;

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
            'nombre'=>'required|string|max:255',
            'image'=>'dimensions:min_width=100,min_height=200',
            'seccion'=>'required|string|max:255',
            'contenido'=>'string|max:255',
            'titulo'=>'string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 50 caracteres',

            'image.dimensions'=>'Solo se permiten imagenes de 100x200px',

            'seccion.required'=>'Este campo es requerido',
            'seccion.string'=>'El valor no es correcto',
            'seccion.max'=>'Solo se permiten 50 caracteres',

            'contenido.string'=>'El valor no es correcto',
            'contenido.max'=>'Solo se permiten 50 caracteres',

            'titulo.string'=>'El valor no es correcto',
            'titulo.max'=>'Solo se permiten 50 caracteres',

        ];
    }
}
