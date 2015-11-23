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
            'name'          => 'required|max:255',
            'description'   => 'required',
            'address'       => 'required',
            'email'         => 'email',
            'tagline'       => 'max:255',
            'facebook'      => 'url|max:255',
            'twitter'       => 'url|max:255',
            'instagram'     => 'url|max:255',
            'web'           => 'url|max:255',
            'phone'         => 'max:255',
            'mobile'        => 'max:255',
            'bb'            => 'max:255',
            'wa'            => 'max:255',
        ];
    }
}
