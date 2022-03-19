<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'keywords' => 'required',
            'adress' => 'required|max:255',
            'facebook' => 'required|max:255',
            'instagram' => 'required|max:255',
            'twitter' => 'required|max:255',
            'mail' => 'required|max:255',
            'phone' => 'required|max:255',
            'logo' => 'mimes:jpeg,png,jpg,webp',
            'favicon' => 'mimes:ico',
        ];
    }
}
