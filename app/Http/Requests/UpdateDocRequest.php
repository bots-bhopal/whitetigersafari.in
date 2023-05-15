<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocRequest extends FormRequest
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
            'title' => 'required|max:255',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The title field is required !!',
                // 'image' => 'image|mimes:jpeg,bmp,png,jpg',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'शीर्षक फ़ील्ड आवश्यक है !!',
            ];
        }
    }
}
