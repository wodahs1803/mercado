<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'produto.nome' => ['required'],
            'produto.valor' => ['required', 'numeric'],
        ];
    }

    public function messages() {
        return [
            'required' => 'Campo obrigatório!',
            'numeric' => 'Campo tem que ser numérico!'
        ];
    }
}
