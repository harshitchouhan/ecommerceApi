<?php

namespace App\Http\Controllers\Admin\Orders\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersUpdateRequest extends FormRequest
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
            // 'ocid' => 'required',
        ];
    }
}
