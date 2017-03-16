<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;

class SearchSystemRequest extends FormRequest
{

    protected $redirectRoute = 'system';
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
            'email_support' => $this->validationEmail()
        ];
    }

    public function validationEmail()
    {
        return ($this->exists('email_support') && $this->input('email_support') != null) ? 'rn_email' : '';
    }

}
