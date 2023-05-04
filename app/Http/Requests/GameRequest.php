<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
     * Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:20',
            'producer' => 'required|max:100',
            'cover' => 'required|image',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Inserisci il titolo del videogame',
            'title.min' => 'Il titolo deve essere minimo di 3 caratteri',
            'title.max' => 'Il titolo deve essere massimo di 50 caratteri',
            'cover.image' => 'La copertina deve essere una foto',
            'description.required' => 'Inserisci la descrizione del gioco',
        ];

    }
}
