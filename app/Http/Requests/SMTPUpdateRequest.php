<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SMTPUpdateRequest extends FormRequest
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
            'smtp_host'=>'required',
            'smtp_username'=>'required',
            'smtp_password'=>'required',
            'smtp_port'=>'required',
            'smtp_from'=>'required'
        ];
    }
}
