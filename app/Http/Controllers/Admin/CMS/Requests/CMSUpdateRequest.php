<?php

namespace App\Http\Controllers\Admin\CMS\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CMSUpdateRequest extends FormRequest
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
            'cpagetitle' => 'required',
        ];
    }
}
