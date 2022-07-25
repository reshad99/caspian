<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'title' => 'required',
            'artist' => 'required',
            'photo' => 'required|file|mimes:png,jpg,jpeg,webp',
            'cover_photo' => 'required|file|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
        ];
    }
}
