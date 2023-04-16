<?php

namespace App\Http\Requests\Back;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->route('category')),
            ],
            'slug' => [
                'required',
                Rule::unique('categories')->ignore($this->route('category')),
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
