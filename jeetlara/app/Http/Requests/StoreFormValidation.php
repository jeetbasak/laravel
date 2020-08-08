<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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

'name'=>'required|max:100|min:1',

'email'=>'required|max:100|min:5',
            //
        ];
    }


    public function messages()
    {
        return [

'name.required'=>'ai field ta dorkar',

'email.required'=>'email dorkar',
            //
        ];
    }
}
