<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SystemRequest extends FormRequest
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
            'description' => 'required',
            'initials' => 'required',
            'email_support' => $this->validationEmail(),
            'justification_update' => $this->validationJustUpdate()
        ];
    }

    public function validationEmail()
    {
        return ($this->has('email_support')) ? 'rn_email' : '';
    }

    public function validationJustUpdate()
    {
        return ($this->exists('justification_update')) ? 'required' : '';
    }
}
