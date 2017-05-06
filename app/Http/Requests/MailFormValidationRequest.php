<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormValidationRequest extends FormRequest
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
            'email' =>'required|email',
            'subject' => 'required|min:2|max:150',
            'message' => 'required|min:0|max:90000'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        $messages = [
            'email.required' =>'Uh..oh..Your email is missing',
            'email.email' =>'ermm..That does not look like a valid email',
            'subject.min' => 'Woooops..At least two characters are needed as subject',
            'message' => 'required|min:0|max:90000'
        ];

        return $messages;
    }
}
