<?php

namespace App\Http\Controllers\Admin\OrderCart\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCartUpdateRequest extends FormRequest
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
            // 'ocoid' => 'required',
            // 'ocpid' => 'required',
            // 'ocpname' => 'required',
            // 'ocpcode' => 'required',
            // 'ocprice' => 'required',
        ];
    }
}
