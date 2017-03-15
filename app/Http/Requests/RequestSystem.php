<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSystem extends FormRequest
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
        $validation_email = '';
        $validation_justification_update = '';

        if($this->exists('justification_update'))
            $validation_justification_update = 'required';

        if($this->has('email_support'))
            $validation_email = 'email';

        return [
            'description' => 'required',
            'initials' => 'required',
            'email_support' => $validation_email,
            'justification_update' => $validation_justification_update
        ];
    }
}
