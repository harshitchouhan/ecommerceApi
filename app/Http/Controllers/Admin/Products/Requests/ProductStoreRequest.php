<?php

namespace App\Http\Controllers\Admin\Products\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'pcode' => 'required|integer|min:1',
            'pbrandid' => 'required|integer|min:1',
            'pcategoryid' => 'required|integer|min:1',
            'pname' => 'required|max:150',
            'pdescription' => 'required|max:1000',
            'psellerid' => 'required|integer|min:1',
            'pwholesaleprice' => 'required|integer',
            'pretailprice' => 'required|integer',
            'psaleprice' => 'required|integer',
            'pimage1' => 'image|mimes:png,jpg|max:2048',
            'pimage2' => 'image|mimes:png,jpg|max:2048',
            'pimage3' => 'image|mimes:png,jpg|max:2048',
            'pimage4' => 'image|mimes:png,jpg|max:2048',
            'pimage5' => 'image|mimes:png,jpg|max:2048',
            'pmetatitle' => 'required|max:500',
            'pmetakeyword' => 'required|max:20',
            'pmetadescription' => 'required|max:1000',
            'prelatedproducts' => 'required|integer',
        ];
    }
}
