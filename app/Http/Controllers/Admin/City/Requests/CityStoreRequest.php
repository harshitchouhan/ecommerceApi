<?php

namespace App\Http\Controllers\Admin\City\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityStoreRequest extends FormRequest
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
            'cityname' => 'required',
            'citycode' => 'required|integer',
            'cityactive' => 'required|integer|min:0|max:1'
        ];
    }
}
