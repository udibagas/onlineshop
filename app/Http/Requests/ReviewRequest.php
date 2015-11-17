<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class ReviewRequest extends Request
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
            'star'          => 'required|numeric|min:1|max:5',
            'comment'       => 'required',
            'product_id'    => 'required'
        ];
    }
}
