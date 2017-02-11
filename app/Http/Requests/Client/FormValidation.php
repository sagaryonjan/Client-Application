<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'name'                 => 'required | max:25',
            'birth_date'           => 'required | date',
            'phone'                => 'required | max:50',
            'email'                => 'required | email',
            'address'              => 'required | min:3',
            'nationality'          => 'required',
            'gender'               => 'required',
            'prefer_contact'       => 'required',
            'educational_background' => 'required | min:10',
        ];
    }
}
