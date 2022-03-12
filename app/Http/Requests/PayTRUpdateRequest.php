<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayTRUpdateRequest extends FormRequest
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
            'paytr_merchant_id'=>'required',
            'paytr_merchant_key'=>'required',
            'paytr_merchant_salt'=>'required'
        ];
    }
}
