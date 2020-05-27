<?php

namespace App\Http\Controllers\Admin\ProductAttribute\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAttributeStoreRequest extends FormRequest
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
            'paname' => 'required|max:150',
            'pavalue' => 'required|integer',
            'padetail' => 'required|max:1000',
            'paimage' => 'image|mimes:png,jpg|max:2048'
        ];
    }
}
