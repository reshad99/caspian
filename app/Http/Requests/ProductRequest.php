<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'disount' => 'nullable|numeric',
            'stock' => 'required|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'cost' => 'required|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'price' => 'required|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'photo' => 'nullable|file|mimes:jpg,png,jpeg,webp',
            'hover_photo' => 'nullable|file|mimes:jpg,png,jpeg,webp',
            'category_id' => 'required|numeric',
            'slug' => 'nullable',
        ];

        return $rules;
    }

    


}
