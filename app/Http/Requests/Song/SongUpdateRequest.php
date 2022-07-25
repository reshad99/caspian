<?php

namespace App\Http\Requests\Song;

use Illuminate\Foundation\Http\FormRequest;

class SongUpdateRequest extends FormRequest
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
            'duration' => 'required',
            'artist_id' => 'required|numeric',
            'photo' => 'nullable|file|mimes:png,jpg,jpeg,webp',
            'mp3' => 'nullable|file|mimes:mp3',
        ];
    }
}
