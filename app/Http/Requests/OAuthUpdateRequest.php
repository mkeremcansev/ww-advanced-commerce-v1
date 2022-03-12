<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OAuthUpdateRequest extends FormRequest
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
            'facebook_client_id'=>'required',
            'facebook_client_secret'=>'required',
            'facebook_redirect'=>'required',
            'google_client_id'=>'required',
            'google_client_secret'=>'required',
            'google_redirect'=>'required'
        ];
    }
}
