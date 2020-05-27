<?php

namespace App\Http\Controllers\Admin\Orders\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersStoreRequest extends FormRequest
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
            'ocustomername' => 'required',
            'ocid' => 'required',
            'oaddressline1' => 'required',
            'ocity' => 'required',
            'ostate' => 'required',
            'ozipcode' => 'required',
            'ophone' => 'required',
        ];
    }
}
