<?php

namespace App\Http\Requests\Articles;

use App\Http\Requests\Traits\MapParametersTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ListArticleRequest extends FormRequest
{
    use MapParametersTrait;

    /*
     * Allowed optional parameters to return model relationships (param => model_relationship)
     */

    private const ALLOWED_INCLUDES = [
        'category' => 'category',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'include' => [
                'sometimes',
                'string',
                Rule::in(array_keys(self::ALLOWED_INCLUDES)),
            ],
        ];
    }
}
