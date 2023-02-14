<?php

namespace App\Http\Requests\Back\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'max:255',
            'description' => 'max:300',
            'phone' => 'max:11|min:10',
            'email' => 'email',
            'favicon' => 'file|image|mimes:jpeg,png,svg',
            'logo' => 'file|image|mimes:jpeg,png,svg',
        ];
    }
}
