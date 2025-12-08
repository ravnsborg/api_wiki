<?php

namespace App\Http\Requests\Traits;

trait MapParametersTrait
{
    /**
     * Custom method to retrieve the validated "include" parameter value*
     */
    public function getIncludeParameterValue(): ?string
    {
        $key = $this->validated('include');

        return self::ALLOWED_INCLUDES[$key] ?? null;
    }

    public function messages(): array
    {
        return [
            'include.in' => 'Optional parameter [include] must be one of these values: '.implode(', ', self::ALLOWED_INCLUDES),
        ];
    }
}
