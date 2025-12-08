<?php

namespace App\Http\Requests\Categories;

use App\Http\Requests\Traits\MapParametersTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ListCategoryRequest extends FormRequest
{
    use MapParametersTrait;

    /*
     * Allowed optional parameters to return model relationships (param => model_relationship)
     */
    private const ALLOWED_INCLUDES = [
        'article' => 'articles',
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
