<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrganisationRequest extends FormRequest
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
          'name'          => 'bail|required|between:1,50|string',
          'first_name'    => 'bail|required|between:1,50|string',
          'titre'         => 'bail|nullable|between:1,50|string',
          'organisation'  => 'bail|required|between:1,50|string',
          'langue'        => 'bail|required|between:1,50|string',
          'user_type'     => 'bail|required|max:16',
          'genre'         => 'bail|required|max:1',
          'street_num'    => 'bail|nullable|numeric|min:0',
          'box_num'       => 'bail|nullable|alpha_num|min:0',
          'street_name'   => 'bail|nullable|between:1,50|string',
          'postal_code'   => 'bail|nullable|digits:4',
          'city_name'     => 'bail|nullable|between:1,50|string',
          'email'         => 'bail|required|unique:users|email',
          'gsm'           => 'bail|nullable|between:1,24|string',
          'telephone'     => 'bail|nullable|between:1,24|string',
          'active'        => 'bail|required|boolean',
          'password'      => 'bail|required|between:6,16',
        ];
    }
}
