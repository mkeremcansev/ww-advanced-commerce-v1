<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowcaseStoreRequest extends FormRequest
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
            'title'=>'required|max:255',
            'showcases'=>'required|array|max:4',
            'showcases.*.image'=>'required|mimes:png,jpg,jpeg,webp',
            'showcases.*.category_id'=>'required|integer',
            'showcases.*.url'=>'nullable',
        ];
    }
}
