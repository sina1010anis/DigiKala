<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newAttrProductSeller extends FormRequest
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
            'name_attr' => 'required|min:2',
            'title_attr' => 'required|min:2',
        ];
    }
}
