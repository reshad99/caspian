<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'photo' => 'nullable|file|mimes:png,jpg,jpeg,webp',
            'cover_photo' => 'nullable|file|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
        ];
    }
}
