<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
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
          'name'          => 'bail|required|between:4,16|alpha|unique:roles',
          'display_name'  => 'bail|required|between:4,16|alpha|unique:roles',
          'description'   => 'bail|nullable|max:120',
        ];
    }
}
