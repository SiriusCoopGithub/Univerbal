<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
          'nom' => 'bail|required|between:4,20|alpha',
          'email' => 'bail|required|unique:users|email',
          'password' => 'bail|required|between:6,16',
          'type' => 'bail|required'
        ];
    }
}
