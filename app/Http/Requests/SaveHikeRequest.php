<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveHikeRequest extends Request
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
            'name' => 'required',
            'altitude' => 'required|numeric',
            'open_form' =>'date',
            'open_to' => 'date|after:open_form',
            'description' => 'required',
            'img_url' => 'url'
        ];
    }
}
