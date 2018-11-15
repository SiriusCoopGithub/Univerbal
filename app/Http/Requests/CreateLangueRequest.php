<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLangueRequest extends FormRequest
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
          'name' => 'bail|required|between:1,50|string',
          'abbr' => 'bail|required|between:1,6|string',
          'dialect'     => 'bail|nullable|between:1,50|string',
          'country'     => 'bail|nullable|between:1,50|string',
          'description' => 'bail|nullable|between:1,120|string',
          'active'      => 'bail|nullable|boolean',
        ];
    }
}
