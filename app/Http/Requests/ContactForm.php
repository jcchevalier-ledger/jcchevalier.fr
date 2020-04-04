<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactForm
 *
 * @package App\Http\Requests
 */
class ContactForm extends FormRequest
{

    /**
     * @var null
     */
    public $errors = null;

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
            'email' => 'required|email:rfc',
            'body' => 'required|max:2000',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email address',
            'body' => 'message',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'A valid :attribute is required',
        ];
    }

    /**
     * @param Validator $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->errors = $validator->errors();
    }
}
