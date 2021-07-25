<?php

namespace App\Http\Requests\Admin\Publicacao;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePublicacao extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.publicacao.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string'],
            'conteudo' => ['required', 'string'],
            'bol_permitir_comentario' => ['nullable', 'boolean'],
            'bol_agendar' => ['nullable', 'boolean'],
            'data_inicio' => ['nullable', 'date'],

        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
