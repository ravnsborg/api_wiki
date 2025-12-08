<?php

namespace App\Http\Requests\Articles;

use Illuminate\Foundation\Http\FormRequest;

class CreateUpdateArticleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'is_favorite' => 'sometimes|boolean',
        ];
    }
}
