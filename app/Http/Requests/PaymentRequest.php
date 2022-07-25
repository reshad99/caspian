<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'surname' => 'required',
            'father_name' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'card_no' => 'nullable|numeric',
            'expire' => 'nullable',
            'cvv' => 'nullable|numeric',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }
}
