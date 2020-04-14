<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'login' => 'required|between:3,14',
            'email' => 'required|email:rfc',
            'password' => 'required|confirmed|regex:#^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])#|between:8,20',
        ];
    }
    
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'password.regex' => 'The password must contain 1 uppercase letter, 1 lowercase letter and 1 digit',
        ];
    }
}
