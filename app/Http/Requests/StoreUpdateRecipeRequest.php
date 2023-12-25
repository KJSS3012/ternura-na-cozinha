<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRecipeRequest extends FormRequest
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
        return [
            'title' => 'required|string',
            'ingredients' => 'required|string',
            'preparation' => 'required|string',
            'categories_id' => 'required',
            'image_path' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo Título é obrigatório.',
            'title.string' => 'O campo Título deve ser uma string.',

            'ingredients.required' => 'O campo Ingredientes é obrigatório.',
            'ingredients.string' => 'O campo Ingredientes deve ser uma string.',

            'preparation.required' => 'O campo Preparação é obrigatório.',
            'preparation.string' => 'O campo Preparação deve ser uma string.',

            'categories_id.required' => 'O campo Categoria é obrigatório.',

            'image_path.required' => 'O campo Imagem é obrigatório.',
        ];;
    }
}
