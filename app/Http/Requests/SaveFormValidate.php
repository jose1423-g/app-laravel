<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/* en este archivo se hacen las validaciones para los formularios */
class SaveFormValidate extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /* para acceder al error y mostrarlo debemos ingresar con @error('valor del return') */
        return [
            'Titulo' => ['required'],
            'Que_es' => ['required']
        ];
    }
}
