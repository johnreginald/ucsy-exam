<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ResultRequest extends Request
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
            'roll_no' => 'required|integer',
            'year' => "required|in:1,2,3,4,5",
            'major' => "in:cs,ct",
            'external' => "in:on"
        ];
    }
}
