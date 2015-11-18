<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
Use Auth;

class StoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required',
            'description'   => 'required',
            'address'       => 'required',
            'email'         => 'email'
        ];
    }
}
