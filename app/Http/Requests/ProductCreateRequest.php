<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'description' => 'required',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'images' => 'required|array',
            'informations' => 'required|array',
            'informations.*.information_title' => 'required|max:255',
            'informations.*.information_description' => 'required|max:255',
            'list' => 'required|array',
            'list.*.variant' => 'required|max:255',
            'list.*.attribute' => 'required|array',
            'list.*.attribute.*.attribute_title' => 'required|max:255',
            'list.*.attribute.*.attribute_stock' => 'required|integer',
            'list.*.attribute.*.attribute_price' => 'required|integer',
            //
        ];
    }
}
